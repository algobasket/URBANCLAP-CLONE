<?php

class api_lib
{

public function parse_from_nvp($string){
		$array=array();
		$pairArray = array();
		$param = array();
		if (strlen($string) != 0) {
        $pairArray = explode("&", $string);
        foreach ($pairArray as $pair) {
            $param = explode("=", $pair);
            $array[urldecode($param[0])] = urldecode($param[1]);
        }
        
    }
		return $array;
	} 
	
	//Takes an associative array (in the format -> [key1 => val1, key2 => val2, ...]) and builds a return string 
	//inserting '=' and '&' to divide name value pairs (in the format -> "key1=val1&key2=val2&key3=val3...")
	public function parse_to_nvp($array){
		$string = '';
		foreach($array as $key => $val){
			$string .= urlencode($key) . "=" . urlencode($val) . "&";
		}
		$string = substr($string,0, -1);
		return $string;
	}

function getRandomString($length) {
  $salt = array_merge(range('A', 'Z'), range('a', 'z'), range(0, 9));
  $maxIndex = count($salt) - 1;

  $result = '';
  for ($i = 0; $i < $length; $i++) {
    $index = mt_rand(0, $maxIndex);
    $result .= $salt[$index];
  }
  return $result;
 }
	
}
	
?>

  