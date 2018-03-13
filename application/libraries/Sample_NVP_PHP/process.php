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

// Unset HTML submit button so it isn't sent in POST request
if (array_key_exists("submit", $_POST))
	unset($_POST["submit"]);

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
$request = $parserObj->ParseRequest($merchantObj, $_POST);

// if no post received from HTML page (parseRequest returns "" upon receiving an empty $_POST)
if ($request == "")
	die();

// print the request pre-send to server if in debug mode
// this is used for debugging only. This would not be used in your integration, as DEBUG should be set to FALSE
if ($merchantObj->GetDebug())
	echo $request . "<br/><br/>";

// forms the requestUrl and assigns it to the merchantObj gatewayUrl member
// returns what was assigned to the gatewayUrl member for echoing if in debug mode
$requestUrl = $parserObj->FormRequestUrl($merchantObj);

// this is used for debugging only. This would not be used in your integration, as DEBUG should be set to FALSE
if ($merchantObj->GetDebug())
	echo $requestUrl . "<br/><br/>";
	
// attempt transaction
// $response is used in receipt page, do not change variable name
$response = $parserObj->SendTransaction($merchantObj, $request);

// print response received from server if in debug mode
// this is used for debugging only. This would not be used in your integration, as DEBUG should be set to FALSE
if ($merchantObj->GetDebug()) {
	// replace the newline chars with html newlines
	$response = str_replace("\n", "<br/>", $response);
	echo $response . "<br/><br/>";
	die();
}

include "receipt.php";

?>