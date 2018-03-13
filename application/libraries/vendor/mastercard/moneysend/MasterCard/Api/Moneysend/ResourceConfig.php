<?php
/*
 * Copyright 2016 MasterCard International.
 *
 * Redistribution and use in source and binary forms, with or without modification, are
 * permitted provided that the following conditions are met:
 *
 * Redistributions of source code must retain the above copyright notice, this list of
 * conditions and the following disclaimer.
 * Redistributions in binary form must reproduce the above copyright notice, this list of
 * conditions and the following disclaimer in the documentation and/or other materials
 * provided with the distribution.
 * Neither the name of the MasterCard International Incorporated nor the names of its
 * contributors may be used to endorse or promote products derived from this software
 * without specific prior written permission.
 * THIS SOFTWARE IS PROVIDED BY THE COPYRIGHT HOLDERS AND CONTRIBUTORS "AS IS" AND ANY
 * EXPRESS OR IMPLIED WARRANTIES, INCLUDING, BUT NOT LIMITED TO, THE IMPLIED WARRANTIES
 * OF MERCHANTABILITY AND FITNESS FOR A PARTICULAR PURPOSE ARE DISCLAIMED. IN NO EVENT
 * SHALL THE COPYRIGHT HOLDER OR CONTRIBUTORS BE LIABLE FOR ANY DIRECT, INDIRECT,
 * INCIDENTAL, SPECIAL, EXEMPLARY, OR CONSEQUENTIAL DAMAGES (INCLUDING, BUT NOT LIMITED
 * TO, PROCUREMENT OF SUBSTITUTE GOODS OR SERVICES; LOSS OF USE, DATA, OR PROFITS;
 * OR BUSINESS INTERRUPTION) HOWEVER CAUSED AND ON ANY THEORY OF LIABILITY, WHETHER
 * IN CONTRACT, STRICT LIABILITY, OR TORT (INCLUDING NEGLIGENCE OR OTHERWISE) ARISING
 * IN ANY WAY OUT OF THE USE OF THIS SOFTWARE, EVEN IF ADVISED OF THE POSSIBILITY OF
 * SUCH DAMAGE.
 *
 */

 namespace MasterCard\Api\Moneysend;

 use MasterCard\Core\ApiConfig;
 use MasterCard\Core\Model\Environment;

class ResourceConfig {
	private $override = null;
	private $host = null;
	private $context = null;
	private static $instance = null;


	private function __construct() {

	}


	public static function getInstance()
	{
		if ( is_null( self::$instance ) )
		{
			self::$instance = new self();
			$environment = ApiConfig::getEnvironment();
			self::$instance->setEnvironment($environment);
			ApiConfig::registerResourceConfig(self::$instance);
		}
		return self::$instance;
	}


	public function getContext() {
		return $this->context;
	}

	public function getHost() {
		return  ($this->override!= null) ? $this->override : $this->host;
	}

	public function getVersion() {
		return "1.0.2";
	}


	public function setEnvironment($environment) {
		if (array_key_exists($environment, Environment::$MAPPING)) {
			$configArray = Environment::$MAPPING[$environment];
			$this->host = $configArray[0];
			$this->context = $configArray[1];
		} else {
			throw new \RuntimeException("Environment: $environment not found for sdk: ".get_class());
		}
	}


    public function setCustomEnvironment($host, $context) {
        $this->host = $host;
        $this->context = $context;
    }
}