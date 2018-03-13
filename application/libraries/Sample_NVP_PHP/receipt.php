<?php

$errorMessage = "";
$errorCode = "";
$gatewayCode = "";
$result = "";

$responseArray = array();

// meaning there's a string cURL Error in the response
if (strstr($response, "cURL Error") != FALSE) {
  print("Communication failed. Please review payment server return response (put code into debug mode).");
  die();
}

// [Snippet] howToDecodeResponse - start
// loop through server response and form an associative array
// name/value pair format
if (strlen($response) != 0) {
  $pairArray = explode("&", $response);
  foreach ($pairArray as $pair) {
    $param = explode("=", $pair);
    $responseArray[urldecode($param[0])] = urldecode($param[1]);
  }
}
// [Snippet] howToDecodeResponse - end

// [Snippet] howToParseResponse - start
if (array_key_exists("result", $responseArray))
  $result = $responseArray["result"];
  // [Snippet] howToParseResponse - end

// Form error string if error is triggered
if ($result == "FAIL") {
  if (array_key_exists("failureExplanation", $responseArray)) {
    $errorMessage = rawurldecode($responseArray["failureExplanation"]);
  }
  else if (array_key_exists("supportCode", $responseArray)) {
    $errorMessage = rawurldecode($responseArray["supportCode"]);
  }
  else {
    $errorMessage = "Reason unspecified.";
  }

  if (array_key_exists("failureCode", $responseArray)) {
    $errorCode = "Error (" . $responseArray["failureCode"] . ")";
  }
  else {
    $errorCode = "Error (UNSPECIFIED)";
  }
}

else {
  if (array_key_exists("response.gatewayCode", $responseArray))
    $gatewayCode = rawurldecode($responseArray["response.gatewayCode"]);
  else
    $gatewayCode = "Response not received.";
}

?>

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
  <link rel="stylesheet" type="text/css" href="assets/paymentstyle.css" />
    <head>
      <title>DirectApi Example</title>
      <meta http-equiv="Content-Type" content="text/html, charset=iso-8859-1">
    </head>
    <body>

    <center><h1><br/>DirectApi PHP NVP Example</h1></center>
    <center><h3>Receipt Page</h3></center><br/><br/>

  <table width="60%" align="center" cellpadding="5" border="0">

  <?php
    // echo HTML displaying Error headers if error is found
    if ($errorCode != "" || $errorMessage != "") {
  ?>
      <tr class="title">
             <td colspan="2" height="25"><P><strong>&nbsp;Error Response</strong></P></td>
         </tr>
         <tr>
             <td align="right" width="50%"><strong><i><?=$errorCode?>: </i></strong></td>
             <td width="50%"><?=$errorMessage?></td>
         </tr>
  <?php
    }

    else {
  ?>
      <tr class="title">
             <td colspan="2" height="25"><P><strong>&nbsp;<?=$gatewayCode?></strong></P></td>
         </tr>
         <tr>
             <td align="right" width="50%"><strong><i>Result: </i></strong></td>
             <td width="50%"><?=$result?></td>
         </tr>
  <?php
     }
  ?>
      <!-- Credit Card Fields -->

         <tr class="title">
             <td colspan="2" height="20"><P><strong>&nbsp;All Response Fields</strong></P></td>
         </tr>
    <?php
      $shade = 0;

      // Output field: value HTML in response fields HTML table
      foreach ($responseArray as $field => $value) {
        if ($shade % 2 == 0) {
          print "<tr class=\"shade\">";
        }
        else
          print "<tr>";

        $shade = $shade + 1;
    ?>
            <td align="right" width="50%"><strong><i><?=$field?>: </i></strong></td>
            <td width="50%"><?=$value?></td>
         </tr>
    <?php
      }
    ?>
  </table>

  <br/><br/>
   </body>
</html>