<?php

$errorMessage = "";
$errorCode = "";
$gatewayCode = "";
$result = "";

$tmpArray = array();

// [Snippet] howToDecodeResponse - start
// $response is defined in process.php as the server response
$responseArray = json_decode($response, TRUE);
// [Snippet] howToDecodeResponse - end

// either a HTML error was received
// or response is a curl error
if ($responseArray == NULL) {
  print("JSON decode failed. Please review server response (enable debug in config.php).");
  die();
}

// [Snippet] howToParseResponse - start
if (array_key_exists("result", $responseArray))
  $result = $responseArray["result"];
// [Snippet] howToParseResponse - end

// Form error string if error is triggered
if ($result == "FAIL") {
  if (array_key_exists("reason", $responseArray)) {
    $tmpArray = $responseArray["reason"];

    if (array_key_exists("explanation", $tmpArray)) {
      $errorMessage = rawurldecode($tmpArray["explanation"]);
    }
    else if (array_key_exists("supportCode", $tmpArray)) {
      $errorMessage = rawurldecode($tmpArray["supportCode"]);
    }
    else {
      $errorMessage = "Reason unspecified.";
    }

    if (array_key_exists("code", $tmpArray)) {
      $errorCode = "Error (" . $tmpArray["code"] . ")";
    }
    else {
      $errorCode = "Error (UNSPECIFIED)";
    }
  }
}

else {
  if (array_key_exists("response", $responseArray)) {
    $tmpArray = $responseArray["response"];
    if (array_key_exists("gatewayCode", $tmpArray))
      $gatewayCode = rawurldecode($tmpArray["gatewayCode"]);
    else
      $gatewayCode = "Response not received.";
  }
}

?>
<!-- 	The following is a simple HTML page to display the response to the transaction.
      This should never be used in your integration -->
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
  <link rel="stylesheet" type="text/css" href="assets/paymentstyle.css" />
    <head>
      <title>API Example Code</title>
      <meta http-equiv="Content-Type" content="text/html, charset=iso-8859-1">
    </head>
    <body>
    <br/>
    <center><h1>PHP Example - REST (JSON)</h1></center>
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
      <!-- Response Fields -->

         <tr class="title">
             <td colspan="2" height="20"><P><strong>&nbsp;JSON Response</strong></P></td>
         </tr>

  </table>

  <table width="50%" align="center" cellpadding="5" border="0">
    <tr>
      <td><p>The display of the below response is intended to be for this example only. In your integration, you should parse this 		response to extract and use the response fields required.</p>
      </td>
    </tr>
     <tr>
       <td align="center" width="100%">
          <textarea rows="40" cols="118" name="outContent" id="outContent"><?=$response?></textarea>
      </td>
    </tr>

    <!-- The below Java Script & HTML formats the JSON output result to make it clean
         and readable. You should not use these scripts to format or expose the
         JSON response in your integration, but rather store/use any of the
         specific fields required for your integration -->
    <tr>
      <td align="center" width="100%">
        <p>Note: The above response has been formatted to make it easier to read. The reformatting also changes amounts to be strictly defined JSON numbers. This means 0's are removed from after the decimal place i.e. 1.00 is displayed as 1 and 1.10 is displayed as 1.1. <a href="javascript:displayRawJSON()">Click here to display the unformatted JSON Response</a></p>
      </td>
    </tr>
    <script type="text/javascript" src="./assets/json2.js"></script>
    <script type="text/javascript" src="./assets/jsonformatter.js"></script>
    <script type="text/javascript" src="./assets/jquery-1.3.2.js"></script>

    <script>
      var orginalJSON = $("#outContent").val();
      function FormatTextarea() {
        var sJSON = $("#outContent").val();
        var oJSON = JSON.parse(sJSON);
        sJSON = FormatJSON(oJSON);
        $("#outContent").val(sJSON);
      }
      FormatTextarea();

      function displayRawJSON() {
        $("#outContent").val(orginalJSON);
      }
    </script>

   </table>

  <br/><br/>
   </body>
</html>