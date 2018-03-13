<?php

class Connection {
  protected $curlObj;

  function __construct($merchantObj) {
    // initialise cURL object/options
    $this->curlObj = curl_init();

    // configure cURL proxy options by calling this function
    $this->ConfigureCurlProxy($merchantObj);

    // configure cURL certificate verification settings by calling this function
    $this->ConfigureCurlCerts($merchantObj);
  }

  function __destruct() {
    // free cURL resources/session
    curl_close($this->curlObj);
  }

  // Send transaction to payment server
  public function SendTransaction($merchantObj, $request) {
    // [Snippet] howToPost - start
    curl_setopt($this->curlObj, CURLOPT_POSTFIELDS, $request);
    // [Snippet] howToPost - end

    // [Snippet] howToSetURL - start
    curl_setopt($this->curlObj, CURLOPT_URL, $merchantObj->GetGatewayUrl());
		// [Snippet] howToSetURL - end

    // [Snippet] howToSetHeaders - start
    // set the content length HTTP header
    curl_setopt($this->curlObj, CURLOPT_HTTPHEADER, array("Content-Length: " . strlen($request)));

    // set the charset to UTF-8 (requirement of payment server)
    curl_setopt($this->curlObj, CURLOPT_HTTPHEADER, array("Content-Type: application/x-www-form-urlencoded;charset=UTF-8"));
    // [Snippet] howToSetHeaders - end

    // tells cURL to return the result if successful, of FALSE if the operation failed
    curl_setopt($this->curlObj, CURLOPT_RETURNTRANSFER, TRUE);

    // this is used for debugging only. This would not be used in your integration, as DEBUG should be set to FALSE
    if ($merchantObj->GetDebug()) {
      curl_setopt($this->curlObj, CURLOPT_HEADER, TRUE);
      curl_setopt($this->curlObj, CURLINFO_HEADER_OUT, TRUE);
    }

    // [Snippet] executeSendTransaction - start
    // send the transaction
    $response = curl_exec($this->curlObj);
    // [Snippet] executeSendTransaction - end

    // this is used for debugging only. This would not be used in your integration, as DEBUG should be set to FALSE
    if ($merchantObj->GetDebug()) {
      $requestHeaders = curl_getinfo($this->curlObj);
      $response = $requestHeaders["request_header"] . $response;
    }

    // assigns the cURL error to response if something went wrong so the caller can echo the error
    if (curl_error($this->curlObj))
      $response = "cURL Error: " . curl_errno($this->curlObj) . " - " . curl_error($this->curlObj);

    // respond with the transaction result, or a cURL error message if it failed
    return $response;
  }

  // [Snippet] howToConfigureProxy - start
  // Check if proxy config is defined, if so configure cURL object to tunnel through
  protected function ConfigureCurlProxy($merchantObj) {
    // If proxy server is defined, set cURL option
    if ($merchantObj->GetProxyServer() != "") {
      curl_setopt($this->curlObj, CURLOPT_PROXY, $merchantObj->GetProxyServer());
      curl_setopt($this->curlObj, $merchantObj->GetProxyCurlOption(), $merchantObj->GetProxyCurlValue());
    }

    // If proxy authentication is defined, set cURL option
    if ($merchantObj->GetProxyAuth() != "")
      curl_setopt($this->curlObj, CURLOPT_PROXYUSERPWD, $merchantObj->GetProxyAuth());
  }
  // [Snippet] howToConfigureProxy - end

  // [Snippet] howToConfigureSslCert - start
  // configure the certificate verification related settings on the cURL object
  protected function ConfigureCurlCerts($merchantObj) {
    // if user has given a path to a certificate bundle, set cURL object to check against them
    if ($merchantObj->GetCertificatePath() != "")
      curl_setopt($this->curlObj, CURLOPT_CAINFO, $merchantObj->GetCertificatePath());

    curl_setopt($this->curlObj, CURLOPT_SSL_VERIFYPEER, $merchantObj->GetCertificateVerifyPeer());
    curl_setopt($this->curlObj, CURLOPT_SSL_VERIFYHOST, $merchantObj->GetCertificateVerifyHost());
  }
  // [Snippet] howToConfigureSslCert - end

}



class Parser extends Connection {
  function __construct($merchantObj) {
    // call parent ctor to init members
    parent::__construct($merchantObj);
  }

  function __destruct() {
    // call parent dtor to free resources
    parent::__destruct();
  }

	// [Snippet] howToConfigureURL - start
  // Modify gateway URL to set the version
  // Assign it to the gatewayUrl member in the merchantObj object
  public function FormRequestUrl($merchantObj) {
    $gatewayUrl = $merchantObj->GetGatewayUrl();
    $gatewayUrl .= "/version/" . $merchantObj->GetVersion();

    $merchantObj->SetGatewayUrl($gatewayUrl);
    return $gatewayUrl;
  }
  // [Snippet] howToConfigureURL - end

  // [Snippet] howToConvertFormData - start
  // Form NVP formatted request and append merchantId, apiPassword & apiUsername
  public function ParseRequest($merchantObj, $formData) {
    $request = "";

    if (count($formData) == 0)
      return "";

    foreach ($formData as $fieldName => $fieldValue) {
      if (strlen($fieldValue) > 0 && $fieldName != "merchant" && $fieldName != "apiPassword" && $fieldName != "apiUsername") {
        // replace underscores in the fieldnames with decimals
        for ($i = 0; $i < strlen($fieldName); $i++) {
          if ($fieldName[$i] == '_')
            $fieldName[$i] = '.';
        }
        $request .= $fieldName . "=" . urlencode($fieldValue) . "&";
      }
    }

    // [Snippet] howToSetCredentials - start
    // For NVP, authentication details are passed in the body as Name-Value-Pairs, just like any other data field
    $request .= "merchant=" . urlencode($merchantObj->GetMerchantId()) . "&";
    $request .= "apiPassword=" . urlencode($merchantObj->GetPassword()) . "&";
    $request .= "apiUsername=" . urlencode($merchantObj->GetApiUsername());
    // [Snippet] howToSetCredentials - end

    return $request;
  }
  // [Snippet] howToConvertFormData - end
}

?>