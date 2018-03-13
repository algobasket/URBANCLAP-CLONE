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
  public function SendTransaction($merchantObj, $request, $method) {
    // The below sets the HTTP operation type
    if ($method == "GET") {
      curl_setopt($this->curlObj, CURLOPT_HTTPGET, 1);
    }
    else if ($method == "POST") {
      // NOTE: POST operations are currently not supported in this version
      // [Snippet] howToPost - start
      curl_setopt($this->curlObj, CURLOPT_POST, 1);
      // [Snippet] howToPost - end
      curl_setopt($this->curlObj, CURLOPT_POSTFIELDS, $request);
      // [Snippet] howToSetHeaders - start
      curl_setopt($this->curlObj, CURLOPT_HTTPHEADER, array("Content-Length: " . strlen($request)));
      curl_setopt($this->curlObj, CURLOPT_HTTPHEADER, array("Content-Type: Application/json;charset=UTF-8"));
      // [Snippet] howToSetHeaders - end
    }
    else if ($method == "PUT") {
      // [Snippet] howToPut - start
      curl_setopt($this->curlObj, CURLOPT_CUSTOMREQUEST, "PUT");
      // [Snippet] howToPut - end
      curl_setopt($this->curlObj, CURLOPT_POSTFIELDS, $request);
      curl_setopt($this->curlObj, CURLOPT_HTTPHEADER, array("Content-Length: " . strlen($request)));
      curl_setopt($this->curlObj, CURLOPT_HTTPHEADER, array("Content-Type: Application/json;charset=UTF-8"));
    }

		// [Snippet] howToSetURL - start
    // call the function below to construct the URL for sending the transaction
    curl_setopt($this->curlObj, CURLOPT_URL, $merchantObj->GetGatewayUrl());
		// [Snippet] howToSetURL - end

    // [Snippet] howToSetCredentials - start
    // set the API Password in the header authentication field.
    curl_setopt($this->curlObj, CURLOPT_USERPWD, $merchantObj->GetApiUsername() . ":" . $merchantObj->GetPassword());
    // [Snippet] howToSetCredentials - end

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
      if (array_key_exists("request_header", $requestHeaders))
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
    // If proxy server is defined, set cURL options
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
  // Formats the target URL for sending the transaction, based on the version
  // and merchant ID stored in config, as well as any custom values passed
  // to it, i.e. order and transaction ID's
  //
  // Assign it to the gatewayUrl member in the merchantObj object
  public function FormRequestUrl($merchantObj, $customUri) {
    $gatewayUrl = $merchantObj->GetGatewayUrl();
    $gatewayUrl .= "/version/" . $merchantObj->GetVersion();
    $gatewayUrl .= "/merchant/" . $merchantObj->GetMerchantId();
    $gatewayUrl .= $customUri;
    $merchantObj->SetGatewayUrl($gatewayUrl);
    return $gatewayUrl;
  }
  // [Snippet] howToConfigureURL - end

	// [Snippet] howToConvertFormData - start
  // Takes a multidimensional associative array
  //
  // Recursive function to unset empty arrays from a
  // multidimensional array up to the highest level
  public function RemoveEmptyValues($array) {
    foreach ($array as $i => $value) {
      // If member is an array
      if (is_array($array[$i])) {
        // if array has no members, unset array
        if (count($array[$i]) == 0)
          unset($array[$i]);
        // if array has members, recurse and pass in the array
        // recursive function will then loop through all members of this array
        else {
          // overwrite old array with new structure
          $array[$i] = $this->RemoveEmptyValues($array[$i]);
          // if array is empty unset it
          if (count($array[$i]) == 0)
            unset($array[$i]);
        }
      }
      // if member not an array
      else {
        // if member variable is empty, unset it
        if ($array[$i] == "")
          unset($array[$i]);
      }
    }
    return $array;
  }

  
  // Creates the JSON encoded transaction body from an associative array
  // Remember to make it check if the array member is empty, then remove it from json if it is
  public function ParseRequest($formData) {
    $request = "";
    if (count($formData) == 0)
      return "";
    $formData = $this->RemoveEmptyValues($formData);
    $request = json_encode($formData);
    return $request;
  }
  // [Snippet] howToConvertFormData - end
}

?>