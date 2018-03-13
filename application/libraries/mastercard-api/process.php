<?php

/* Main controller page

1. Create 1 MerchantConfiguration object for each merchant ID
2. Create 1 Parser object
3. Call Parser object FormRequest method to form the request that will be sent to the payment server
4. Parse the formed reqest to SendTransaction method to attempt to send the transaction to the payment server
5. Store the received transaction response in a variable
6. Include receipt page which will output the response HTML and parse the server response

*/

include "configuration.php";
include "connection.php";


// This is used to set the HTTP operation for sending the transaction
// In your integration, you should never pass this in, but set the value here based on your requirements
if (array_key_exists("method", $_POST))
  $method = $_POST["method"];


// The following section allows the example code to setup the custom/changing components to the URI
// In your integration, you should never pass these in, but set the values here based on your requirements
$customUri = "";
if (array_key_exists("orderId", $_POST))
  $customUri .= "/order/" . $_POST["orderId"];

if (array_key_exists("transactionId", $_POST))
  $customUri .= "/transaction/" . $_POST["transactionId"];


// Add any HTML/$_POST field names that you want to unset to this array
// If you have any other fields in the HTTP POST, you need to process them here and remove from $_POST
// After this, $_POST should only contain fields that are being sent as part of the transaction
$unsetNames = array("orderId", "transactionId", "submit", "method");

// loop through each field in the unsetNames array
// unset the field if the key exists
foreach ($unsetNames as $fieldName) {
  if (array_key_exists($fieldName, $_POST))
    unset($_POST[$fieldName]);
}

// Creates the Merchant Object from config. If you are using multiple merchant ID's,
// you can pass in another configArray each time, instead of using the one from configuration.php
$merchantObj = new Merchant($configArray);

// The Parser object is used to process the response from the gateway and handle the connections
$parserObj = new Parser($merchantObj);

// In your integration, you should never pass this in, but store the value in configuration
// If you wish to use multiple versions, you can set the version as is being done below
if (array_key_exists("version", $_POST)) {
  $merchantObj->SetVersion($_POST["version"]);
  unset($_POST["version"]);
}

// form transaction request
$request = $parserObj->ParseRequest($_POST);

// if no post received from HTML page (parseRequest returns "" upon receiving an empty $_POST)
if ($request == "")
  die();

// print the request pre-send to server if in debug mode
// this is used for debugging only. This would not be used in your integration, as DEBUG should be set to FALSE
if ($merchantObj->GetDebug())
  echo $request . "<br/><br/>";

// forms the requestUrl and assigns it to the merchantObj gatewayUrl member
// returns what was assigned to the gatewayUrl member for echoing if in debug mode
$requestUrl = $parserObj->FormRequestUrl($merchantObj, $customUri);

// this is used for debugging only. This would not be used in your integration, as DEBUG should be set to FALSE
if ($merchantObj->GetDebug())
  echo $requestUrl . "<br/><br/>";


// attempt sending of transaction
// $response is used in receipt page, do not change variable name
$response = $parserObj->SendTransaction($merchantObj, $request, $method);

// print response received from server if in debug mode
// this is used for debugging only. This would not be used in your integration, as DEBUG should be set to FALSE
if ($merchantObj->GetDebug()) {
  // replace the newline chars with html newlines
  $response = str_replace("\n", "<br/>", $response);
  echo $response . "<br/><br/>";
  die();
}


// the receipt page is included and displayed here.
// in your integration, you would most likely also want process the transaction response, and make appropriate updates
// you can see how to parse and retrieve the results and other fields in the transaction at the top of receipt.php
include "receipt.php";

?>