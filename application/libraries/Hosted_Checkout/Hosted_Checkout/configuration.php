<?php

$configArray = array();

/*
 Set all your configuration here

 If you want to have multiple configuration sets, copy and paste
 the configuration lines and create a new array with a different variable name
 this array can then be parsed into the Merchant constructor from process.php
 
 The debug configuration setting is useful for printing requests and responses
 If you're receiving an error or unexpected output, set this flag to TRUE
 The debug output will help indicate the cause of the problem
 
 Please comment the proxy settings if you do not wish to use a proxy
 
*/

// If using a proxy server, uncomment the following proxy settings

// If no authentication is required, only uncomment proxyServer
// Server name or IP address and port number of your proxy server
//$configArray["proxyServer"] = "server:port";

// Username and password for proxy server authentication
//$configArray["proxyAuth"] = "username:password";

// The below value should not be changed
//$configArray["proxyCurlOption"] = CURLOPT_PROXYAUTH;

// The CURL Proxy type. Currently supported values: CURLAUTH_NTLM and CURLAUTH_BASIC 
//$configArray["proxyCurlValue"] = CURLAUTH_NTLM;


// If using certificate validation, modify the following configuration settings

// alternate trusted certificate file
// leave as "" if you do not have a certificate path
//$configArray["certificatePath"] = "C:/ca-cert-bundle.crt";

// possible values:
// FALSE = disable verification
// TRUE = enable verification
$configArray["certificateVerifyPeer"] = FALSE;

// possible values:
// 0 = do not check/verify hostname
// 1 = check for existence of hostname in certificate
// 2 = verify request hostname matches certificate hostname
$configArray["certificateVerifyHost"] = 0;


// Base URL of the Payment Gateway. Do not include the version.
$configArray["gatewayUrl"] = "https://test-gateway.mastercard.com/api/nvp";

// Merchant ID supplied by your payments provider
$configArray["merchantId"] = "MID_VALUE";

// API username in the format below where Merchant ID is the same as above
$configArray["apiUsername"] = "Merchant.MID_VALUE";

// API password which can be configured in Merchant Administration
$configArray["password"] = "MERCHANT_API_PASSWORD";

// The debug setting controls displaying the raw content of the request and 
// response for a transaction.
// In production you should ensure this is set to FALSE as to not display/use
// this debugging information
$configArray["debug"] = FALSE;

// Version number of the API being used for your integration
// this is the default value if it isn't being specified in process.php
$configArray["version"] = "40";

/* 	
 This class holds all the merchant related variables and proxy 
 configuration settings	
*/
class Merchant {
	private $proxyServer = "";
	private $proxyAuth = "";
	private $proxyCurlOption = 0;
	private $proxyCurlValue = 0;	
	
	private $certificatePath = "";
	private $certificateVerifyPeer = FALSE;	
	private $certificateVerifyHost = 0;

	private $gatewayUrl = "";
	private $debug = FALSE;
	private $version = "";
	private $merchantId = "";
	private $password = "";
	private $apiUsername = "";
	
	/*
	 The constructor takes a config array. The structure of this array is defined 
	 at the top of this page.
	*/
	function __construct($configArray) {
		if (array_key_exists("proxyServer", $configArray))
			$this->proxyServer = $configArray["proxyServer"];
		
		if (array_key_exists("proxyAuth", $configArray))
			$this->proxyAuth = $configArray["proxyAuth"];
			
		if (array_key_exists("proxyCurlOption", $configArray))
			$this->proxyCurlOption = $configArray["proxyCurlOption"];
		
		if (array_key_exists("proxyCurlValue", $configArray))
			$this->proxyCurlValue = $configArray["proxyCurlValue"];
			
		if (array_key_exists("certificatePath", $configArray))
			$this->certificatePath = $configArray["certificatePath"];
			
		if (array_key_exists("certificateVerifyPeer", $configArray))
			$this->certificateVerifyPeer = $configArray["certificateVerifyPeer"];
			
		if (array_key_exists("certificateVerifyHost", $configArray))
			$this->certificateVerifyHost = $configArray["certificateVerifyHost"];
		
		if (array_key_exists("gatewayUrl", $configArray))
			$this->gatewayUrl = $configArray["gatewayUrl"];
		
		if (array_key_exists("debug", $configArray))	
			$this->debug = $configArray["debug"];
			
		if (array_key_exists("version", $configArray))
			$this->version = $configArray["version"];
			
		if (array_key_exists("merchantId", $configArray))	
			$this->merchantId = $configArray["merchantId"];
		
		if (array_key_exists("password", $configArray))
			$this->password = $configArray["password"];
			
		if (array_key_exists("apiUsername", $configArray))
			$this->apiUsername = $configArray["apiUsername"];	
	}
	
	// Get methods to return a specific value
	public function GetProxyServer() { return $this->proxyServer; }
	public function GetProxyAuth() { return $this->proxyAuth; }
	public function GetProxyCurlOption() { return $this->proxyCurlOption; }
	public function GetProxyCurlValue() { return $this->proxyCurlValue; }
	public function GetCertificatePath() { return $this->certificatePath; }
	public function GetCertificateVerifyPeer() { return $this->certificateVerifyPeer; }
	public function GetCertificateVerifyHost() { return $this->certificateVerifyHost; }
	public function GetGatewayUrl() { return $this->gatewayUrl; }
	public function GetDebug() { return $this->debug; }
	public function GetVersion() { return $this->version; }	
	public function GetMerchantId() { return $this->merchantId; }
	public function GetPassword() { return $this->password; }
	public function GetApiUsername() { return $this->apiUsername; }
	
	// Set methods to set a value
	public function SetProxyServer($newProxyServer) { $this->proxyServer = $newProxyServer; }
	public function SetProxyAuth($newProxyAuth) { $this->proxyAuth = $newProxyAuth; }
	public function SetProxyCurlOption($newCurlOption) { $this->proxyCurlOption = $newCurlOption; }
	public function SetProxyCurlValue($newCurlValue) { $this->proxyCurlValue = $newCurlValue; }
	public function SetCertificatePath($newCertificatePath) { $this->certificatePath = $newCertificatePath; }
	public function SetCertificateVerifyPeer($newVerifyHostPeer) { $this->certificateVerifyPeer = $newVerifyHostPeer; }
	public function SetCertificateVerifyHost($newVerifyHostValue) { $this->certificateVerifyHost = $newVerifyHostValue; }
	public function SetGatewayUrl($newGatewayUrl) { $this->gatewayUrl = $newGatewayUrl; }
	public function SetDebug($debugBool) { $this->debug = $debugBool; }
	public function SetVersion($newVersion) { $this->version = $newVersion; }
	public function SetMerchantId($merchantId) {$this->merchantId = $merchantId; }
	public function SetPassword($password) { $this->password = $password; }
	public function SetApiUsername($apiUsername) { $this->apiUsername = $apiUsername; }
}

?>