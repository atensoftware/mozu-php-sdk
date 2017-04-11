<?php


/**
* <auto-generated>
*     This code was generated by Codezu.     
*
*     Changes to this file may cause incorrect behavior and will be lost if
*     the code is regenerated.
* </auto-generated>
*/

namespace Mozu\Api\Resources\Commerce\Carts;

use Mozu\Api\Clients\Commerce\Carts\ExtendedPropertyClient;
use Mozu\Api\ApiContext;


/**
* Use the Cart Extended Properties subresource to store an arbitrary number of cart extended properties such as tracking strings, marketing sources, affiliates, sales personnel/data, and so on, on a per cart basis. Each cart may have none, one, or more than one entry in the extended properties collection, and all values in the extended properties collection are represented as strings. When you create an order from a cart, all extended properties are retained from the cart and copied to the order. Refer to the subresource for more information about order extended properties.
*/
class ExtendedPropertyResource {

		private $apiContext;
			
	public function __construct(ApiContext $apiContext) 
	{
		$this->apiContext = $apiContext;
	}

	



	/**
	* Retrieves a list of cart extended properties specified in the request.
	*
	* @return array|ExtendedProperty 
	* @deprecated deprecated since version 1.17
	*/
	public function getExtendedProperties()
	{
		$mozuClient = ExtendedPropertyClient::getExtendedPropertiesClient();
		$mozuClient = $mozuClient->withContext($this->apiContext);
		$mozuClient->execute();
		return $mozuClient->getResult();

	}
	
/**
	* Retrieves a list of cart extended properties specified in the request.
	*
	* @return Promise - use $promise->then(sucessfn, errorfn). successFn is passed Mozu\Api\MozuResult. errorFn is passed Mozu\Api\ApiException
	*/
	public function getExtendedPropertiesAsync()
	{
		$mozuClient = ExtendedPropertyClient::getExtendedPropertiesClient();
		$mozuClient = $mozuClient->withContext($this->apiContext);
		return $mozuClient->executeAsync();

	}
	
	/**
	* Adds one or more specified extended properties to the carts extended properties collection.
	*
	* @param array|ExtendedProperty $extendedProperties The details of the new extended property.
	* @return array|ExtendedProperty 
	* @deprecated deprecated since version 1.17
	*/
	public function addExtendedProperties($extendedProperties)
	{
		$mozuClient = ExtendedPropertyClient::addExtendedPropertiesClient($extendedProperties);
		$mozuClient = $mozuClient->withContext($this->apiContext);
		$mozuClient->execute();
		return $mozuClient->getResult();

	}
	
/**
	* Adds one or more specified extended properties to the carts extended properties collection.
	*
	* @return Promise - use $promise->then(sucessfn, errorfn). successFn is passed Mozu\Api\MozuResult. errorFn is passed Mozu\Api\ApiException
	*/
	public function addExtendedPropertiesAsync($extendedProperties)
	{
		$mozuClient = ExtendedPropertyClient::addExtendedPropertiesClient($extendedProperties);
		$mozuClient = $mozuClient->withContext($this->apiContext);
		return $mozuClient->executeAsync();

	}
	
	/**
	* Updates one or more details of the extended property specified in the request.
	*
	* @param string $key Key used for metadata defined for objects, including extensible attributes, custom attributes associated with a shipping provider, and search synonyms definitions. This content may be user-defined depending on the object and usage.
	* @param string $responseFields Filtering syntax appended to an API call to increase or decrease the amount of data returned inside a JSON object. This parameter should only be used to retrieve data. Attempting to update data using this parameter may cause data loss.
	* @param bool $upsert Any set of key value pairs to be stored in the extended properties of a cart.
	* @param ExtendedProperty $extendedProperty The details of the updated extended property.
	* @return ExtendedProperty 
	* @deprecated deprecated since version 1.17
	*/
	public function updateExtendedProperty($extendedProperty, $key, $upsert =  null, $responseFields =  null)
	{
		$mozuClient = ExtendedPropertyClient::updateExtendedPropertyClient($extendedProperty, $key, $upsert, $responseFields);
		$mozuClient = $mozuClient->withContext($this->apiContext);
		$mozuClient->execute();
		return $mozuClient->getResult();

	}
	
/**
	* Updates one or more details of the extended property specified in the request.
	*
	* @param string $key Key used for metadata defined for objects, including extensible attributes, custom attributes associated with a shipping provider, and search synonyms definitions. This content may be user-defined depending on the object and usage.
	* @param string $responseFields Filtering syntax appended to an API call to increase or decrease the amount of data returned inside a JSON object. This parameter should only be used to retrieve data. Attempting to update data using this parameter may cause data loss.
	* @param bool $upsert Any set of key value pairs to be stored in the extended properties of a cart.
	* @return Promise - use $promise->then(sucessfn, errorfn). successFn is passed Mozu\Api\MozuResult. errorFn is passed Mozu\Api\ApiException
	*/
	public function updateExtendedPropertyAsync($extendedProperty, $key, $upsert =  null, $responseFields =  null)
	{
		$mozuClient = ExtendedPropertyClient::updateExtendedPropertyClient($extendedProperty, $key, $upsert, $responseFields);
		$mozuClient = $mozuClient->withContext($this->apiContext);
		return $mozuClient->executeAsync();

	}
	
	/**
	* Updates one or more details of the extended properties specified in the request.
	*
	* @param bool $upsert Any set of key value pairs to be stored in the extended properties of a cart.
	* @param array|ExtendedProperty $extendedProperties The details of the updated extended properties.
	* @return array|ExtendedProperty 
	* @deprecated deprecated since version 1.17
	*/
	public function updateExtendedProperties($extendedProperties, $upsert =  null)
	{
		$mozuClient = ExtendedPropertyClient::updateExtendedPropertiesClient($extendedProperties, $upsert);
		$mozuClient = $mozuClient->withContext($this->apiContext);
		$mozuClient->execute();
		return $mozuClient->getResult();

	}
	
/**
	* Updates one or more details of the extended properties specified in the request.
	*
	* @param bool $upsert Any set of key value pairs to be stored in the extended properties of a cart.
	* @return Promise - use $promise->then(sucessfn, errorfn). successFn is passed Mozu\Api\MozuResult. errorFn is passed Mozu\Api\ApiException
	*/
	public function updateExtendedPropertiesAsync($extendedProperties, $upsert =  null)
	{
		$mozuClient = ExtendedPropertyClient::updateExtendedPropertiesClient($extendedProperties, $upsert);
		$mozuClient = $mozuClient->withContext($this->apiContext);
		return $mozuClient->executeAsync();

	}
	
	/**
	* Deletes the extended properties cart extended properties collection.
	*
	* @param array|string $keys 
	* @deprecated deprecated since version 1.17
	*/
	public function deleteExtendedProperties($keys)
	{
		$mozuClient = ExtendedPropertyClient::deleteExtendedPropertiesClient($keys);
		$mozuClient = $mozuClient->withContext($this->apiContext);
		$mozuClient->execute();

	}
	
/**
	* Deletes the extended properties cart extended properties collection.
	*
	* @return Promise - use $promise->then(sucessfn, errorfn). successFn is passed Mozu\Api\MozuResult. errorFn is passed Mozu\Api\ApiException
	*/
	public function deleteExtendedPropertiesAsync($keys)
	{
		$mozuClient = ExtendedPropertyClient::deleteExtendedPropertiesClient($keys);
		$mozuClient = $mozuClient->withContext($this->apiContext);
		return $mozuClient->executeAsync();

	}
	
	/**
	* Deletes a specific extended property from the cart extended property collection.
	*
	* @param string $key 
	* @deprecated deprecated since version 1.17
	*/
	public function deleteExtendedProperty($key)
	{
		$mozuClient = ExtendedPropertyClient::deleteExtendedPropertyClient($key);
		$mozuClient = $mozuClient->withContext($this->apiContext);
		$mozuClient->execute();

	}
	
/**
	* Deletes a specific extended property from the cart extended property collection.
	*
	* @param string $key 
	* @return Promise - use $promise->then(sucessfn, errorfn). successFn is passed Mozu\Api\MozuResult. errorFn is passed Mozu\Api\ApiException
	*/
	public function deleteExtendedPropertyAsync($key)
	{
		$mozuClient = ExtendedPropertyClient::deleteExtendedPropertyClient($key);
		$mozuClient = $mozuClient->withContext($this->apiContext);
		return $mozuClient->executeAsync();

	}
	
	
}

?>

