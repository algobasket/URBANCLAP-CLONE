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

 use MasterCard\Core\Model\BaseObject;
 use MasterCard\Core\Model\RequestMap;
 use MasterCard\Core\Model\OperationMetadata;
 use MasterCard\Core\Model\OperationConfig;


/**
 * 
 */
class CardMapping extends BaseObject {



	protected static function getOperationConfig($operationUUID) {
		switch ($operationUUID) {
			case "a93b11d5-af61-4889-bf46-d2653a047b0e":
				return new OperationConfig("/moneysend/v3/mapping/card", "create", array(), array());
			case "3ea6ccdb-33b4-409f-b590-16ac045ffc09":
				return new OperationConfig("/moneysend/v3/mapping/card/{mappingId}", "delete", array(), array());
			case "f43fa1e7-2771-449e-adb2-8f210343cfc7":
				return new OperationConfig("/moneysend/v3/mapping/subscriber", "update", array(), array());
			case "1c2e8966-df7a-4224-8530-53ae42b8cf0c":
				return new OperationConfig("/moneysend/v3/mapping/card", "update", array(), array());
			case "d6792511-d83b-4311-a272-09951b2a7735":
				return new OperationConfig("/moneysend/v3/mapping/card/{mappingId}", "update", array(), array());
			
			default:
				throw new \Exception("Invalid operationUUID supplied: $operationUUID");
		}
	}

	protected static function getOperationMetadata() {
		$config = ResourceConfig::getInstance();
		return new OperationMetadata($config->getVersion(), $config->getHost(), $config->getContext());
	}


   /**
	* Creates object of type CardMapping
	*
	* @param Map map, containing the required parameters to create a new object
	* @return CardMapping of the response of created instance.
	*/
	public static function create($map)
	{
		return self::execute("a93b11d5-af61-4889-bf46-d2653a047b0e", new CardMapping($map));
	}








   /**
	* Delete object of type CardMapping by id
	*
	* @param String id
	*
	* @throws ApiException - which encapsulates the http status code and the error return by the server
	*
	* @return CardMapping of the response.
	*/
	public static function deleteById($id, $requestMap = null)
	{
		$map = new RequestMap();
		if (!empty($id)) {
			$map->set("id", $id);
		}
		if (!empty($requestMap)) {
			$map->setAll($requestMap);
		}
		return self::execute("3ea6ccdb-33b4-409f-b590-16ac045ffc09", new CardMapping($map));
	}

   /**
	* Delete this object of type CardMapping
	*
	* @throws ApiException - which encapsulates the http status code and the error return by the server
	*
	* @return CardMapping of the response.
	*/
	public function delete()
	{
		return self::execute("3ea6ccdb-33b4-409f-b590-16ac045ffc09", $this);
	}



	/**
	 * Updates an object of type CardMapping
	 *
	 * @throws ApiException - which encapsulates the http status code and the error return by the server
	 *
	 * @return CardMapping of the response
	 */
	public function deleteSubscriberID()  {
		return self::execute("f43fa1e7-2771-449e-adb2-8f210343cfc7",$this);
	}





	/**
	 * Updates an object of type CardMapping
	 *
	 * @throws ApiException - which encapsulates the http status code and the error return by the server
	 *
	 * @return CardMapping of the response
	 */
	public function read()  {
		return self::execute("1c2e8966-df7a-4224-8530-53ae42b8cf0c",$this);
	}





	/**
	 * Updates an object of type CardMapping
	 *
	 * @throws ApiException - which encapsulates the http status code and the error return by the server
	 *
	 * @return CardMapping of the response
	 */
	public function update()  {
		return self::execute("d6792511-d83b-4311-a272-09951b2a7735",$this);
	}






}

