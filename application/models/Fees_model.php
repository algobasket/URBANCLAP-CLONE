<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Fees_model extends CI_Model {

    /**
     * @vars
     */
    private $_db;


    /**
     * Constructor
     */
    function __construct()
    {
        parent::__construct();

        // define primary table
        $this->_db = 'fees';
    }

    function updateFees($data)
	{
		$this->db->where("ID", 1)->update("fees", $data);
	}

    function get_fees()
	{
		return $this->db->get("fees");
	}

  function getMasterCardApiDetail()
  {
     $query = $this->db->query("SELECT value FROM settings WHERE name='mastercard_api'");
     if($query->num_rows() == 1)
     {
        return $query->result_array()[0]['value'];
     }
  }

  function getCyberSecureApiDetail()
  {
     $query = $this->db->query("SELECT value FROM settings WHERE name='cybersecure_api'");
     if($query->num_rows() == 1)
     {
        return $query->result_array()[0]['value'];
     }
  }


  function upsert($name,$json)
  {
     if($this->getMasterCardApiDetail() && $name == "mastercard_api")
     {
       $this->db->where('name',$name);
       $this->db->update('settings',array('value' => $json));
     }elseif($this->getCyberSecureApiDetail() && $name == "cybersecure_api"){
       $this->db->where('name',$name);
       $this->db->update('settings',array('value' => $json));
     }else{
       $this->db->insert('settings',array('name' => $name,'value' => $json));
     }
      return true;
  }

  function getBankList(){
    $query = $this->db->query("SELECT * FROM bank_list");
    return $query->result_array();
  }

  function insertBankList($data){
    $this->db->insert("bank_list",$data); 
    return true;
  }
  
  function deleteBankList($id){ 
    $this->db->where('id',$id);
    $this->db->delete("bank_list");  
    return true;
  }


}
?>
