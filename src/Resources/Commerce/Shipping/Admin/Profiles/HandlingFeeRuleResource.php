<?php


/**
* <auto-generated>
*     This code was generated by Codezu.     
*
*     Changes to this file may cause incorrect behavior and will be lost if
*     the code is regenerated.
* </auto-generated>
*/

namespace Mozu\Api\Resources\Commerce\Shipping\Admin\Profiles;

use Mozu\Api\Clients\Commerce\Shipping\Admin\Profiles\HandlingFeeRuleClient;
use Mozu\Api\ApiContext;

use Mozu\Api\Headers;

/**
* Use the ProductHandlingFeeRules sub-resource to manage your product handling fee rules that are associated with a specific shipping profile.
*/
class HandlingFeeRuleResource {

		private $apiContext;
		private $dataViewMode;
		public function __construct(ApiContext $apiContext, $dataViewMode) 
	{
		$this->apiContext = $apiContext;
		$this->dataViewMode = $dataViewMode;
	}
	



	/**
	* Retrieves the details of the specified product handling fee rule.
	*
	* @param string $id Unique identifier of the customer segment to retrieve.
	* @param string $profilecode The unique, user-defined code of the profile with which the product handling fee rule is associated.
	* @param string $responseFields Filtering syntax appended to an API call to increase or decrease the amount of data returned inside a JSON object. This parameter should only be used to retrieve data. Attempting to update data using this parameter may cause data loss.
	* @return HandlingFeeRule 
	* @deprecated deprecated since version 1.17
	*/
	public function getProductHandlingFeeRule($profilecode, $id, $responseFields =  null)
	{
		$mozuClient = HandlingFeeRuleClient::getProductHandlingFeeRuleClient($this->dataViewMode, $profilecode, $id, $responseFields);
		$mozuClient = $mozuClient->withContext($this->apiContext);
		$mozuClient->execute();
		return $mozuClient->getResult();

	}
	
/**
	* Retrieves the details of the specified product handling fee rule.
	*
	* @param string $id Unique identifier of the customer segment to retrieve.
	* @param string $profilecode The unique, user-defined code of the profile with which the product handling fee rule is associated.
	* @param string $responseFields Filtering syntax appended to an API call to increase or decrease the amount of data returned inside a JSON object. This parameter should only be used to retrieve data. Attempting to update data using this parameter may cause data loss.
	* @return Promise - use $promise->then(sucessfn, errorfn). successFn is passed Mozu\Api\MozuResult. errorFn is passed Mozu\Api\ApiException
	*/
	public function getProductHandlingFeeRuleAsync($profilecode, $id, $responseFields =  null)
	{
		$mozuClient = HandlingFeeRuleClient::getProductHandlingFeeRuleClient($this->dataViewMode, $profilecode, $id, $responseFields);
		$mozuClient = $mozuClient->withContext($this->apiContext);
		return $mozuClient->executeAsync();

	}
	
	/**
	* Retrieves a list of product handling fee rules and their details.
	*
	* @param string $profilecode The unique, user-defined code of the profile with which the product handling fee rule is associated.
	* @param string $responseFields Filtering syntax appended to an API call to increase or decrease the amount of data returned inside a JSON object. This parameter should only be used to retrieve data. Attempting to update data using this parameter may cause data loss.
	* @return HandlingFeeRuleCollection 
	* @deprecated deprecated since version 1.17
	*/
	public function getProductHandlingFeeRules($profilecode, $responseFields =  null)
	{
		$mozuClient = HandlingFeeRuleClient::getProductHandlingFeeRulesClient($this->dataViewMode, $profilecode, $responseFields);
		$mozuClient = $mozuClient->withContext($this->apiContext);
		$mozuClient->execute();
		return $mozuClient->getResult();

	}
	
/**
	* Retrieves a list of product handling fee rules and their details.
	*
	* @param string $profilecode The unique, user-defined code of the profile with which the product handling fee rule is associated.
	* @param string $responseFields Filtering syntax appended to an API call to increase or decrease the amount of data returned inside a JSON object. This parameter should only be used to retrieve data. Attempting to update data using this parameter may cause data loss.
	* @return Promise - use $promise->then(sucessfn, errorfn). successFn is passed Mozu\Api\MozuResult. errorFn is passed Mozu\Api\ApiException
	*/
	public function getProductHandlingFeeRulesAsync($profilecode, $responseFields =  null)
	{
		$mozuClient = HandlingFeeRuleClient::getProductHandlingFeeRulesClient($this->dataViewMode, $profilecode, $responseFields);
		$mozuClient = $mozuClient->withContext($this->apiContext);
		return $mozuClient->executeAsync();

	}
	
	/**
	* Creates a new product handling fee rule.
	*
	* @param string $profilecode The unique, user-defined code of the profile with which the product handling fee rule is associated.
	* @param string $responseFields Filtering syntax appended to an API call to increase or decrease the amount of data returned inside a JSON object. This parameter should only be used to retrieve data. Attempting to update data using this parameter may cause data loss.
	* @param HandlingFeeRule $rule The details of the new product handling fee rule.
	* @return HandlingFeeRule 
	* @deprecated deprecated since version 1.17
	*/
	public function createProductHandlingFeeRule($rule, $profilecode, $responseFields =  null)
	{
		$mozuClient = HandlingFeeRuleClient::createProductHandlingFeeRuleClient($rule, $profilecode, $responseFields);
		$mozuClient = $mozuClient->withContext($this->apiContext);
		$mozuClient->execute();
		return $mozuClient->getResult();

	}
	
/**
	* Creates a new product handling fee rule.
	*
	* @param string $profilecode The unique, user-defined code of the profile with which the product handling fee rule is associated.
	* @param string $responseFields Filtering syntax appended to an API call to increase or decrease the amount of data returned inside a JSON object. This parameter should only be used to retrieve data. Attempting to update data using this parameter may cause data loss.
	* @return Promise - use $promise->then(sucessfn, errorfn). successFn is passed Mozu\Api\MozuResult. errorFn is passed Mozu\Api\ApiException
	*/
	public function createProductHandlingFeeRuleAsync($rule, $profilecode, $responseFields =  null)
	{
		$mozuClient = HandlingFeeRuleClient::createProductHandlingFeeRuleClient($rule, $profilecode, $responseFields);
		$mozuClient = $mozuClient->withContext($this->apiContext);
		return $mozuClient->executeAsync();

	}
	
	/**
	* Updates the details of the specified product handling fee rule.
	*
	* @param string $id Unique identifier of the customer segment to retrieve.
	* @param string $profilecode The unique, user-defined code of the profile with which the product handling fee rule is associated.
	* @param string $responseFields Filtering syntax appended to an API call to increase or decrease the amount of data returned inside a JSON object. This parameter should only be used to retrieve data. Attempting to update data using this parameter may cause data loss.
	* @param HandlingFeeRule $rule The updated details of the product handling fee rule.
	* @return HandlingFeeRule 
	* @deprecated deprecated since version 1.17
	*/
	public function updateProductHandlingFeeRule($rule, $profilecode, $id, $responseFields =  null)
	{
		$mozuClient = HandlingFeeRuleClient::updateProductHandlingFeeRuleClient($this->dataViewMode, $rule, $profilecode, $id, $responseFields);
		$mozuClient = $mozuClient->withContext($this->apiContext);
		$mozuClient->execute();
		return $mozuClient->getResult();

	}
	
/**
	* Updates the details of the specified product handling fee rule.
	*
	* @param string $id Unique identifier of the customer segment to retrieve.
	* @param string $profilecode The unique, user-defined code of the profile with which the product handling fee rule is associated.
	* @param string $responseFields Filtering syntax appended to an API call to increase or decrease the amount of data returned inside a JSON object. This parameter should only be used to retrieve data. Attempting to update data using this parameter may cause data loss.
	* @return Promise - use $promise->then(sucessfn, errorfn). successFn is passed Mozu\Api\MozuResult. errorFn is passed Mozu\Api\ApiException
	*/
	public function updateProductHandlingFeeRuleAsync($rule, $profilecode, $id, $responseFields =  null)
	{
		$mozuClient = HandlingFeeRuleClient::updateProductHandlingFeeRuleClient($this->dataViewMode, $rule, $profilecode, $id, $responseFields);
		$mozuClient = $mozuClient->withContext($this->apiContext);
		return $mozuClient->executeAsync();

	}
	
	/**
	* Deletes the specified product handling fee rule.
	*
	* @param string $id Unique identifier of the customer segment to retrieve.
	* @param string $profilecode The unique, user-defined code of the profile with which the product handling fee rule is associated.
	* @deprecated deprecated since version 1.17
	*/
	public function deleteProductHandlingFeeRule($profilecode, $id)
	{
		$mozuClient = HandlingFeeRuleClient::deleteProductHandlingFeeRuleClient($this->dataViewMode, $profilecode, $id);
		$mozuClient = $mozuClient->withContext($this->apiContext);
		$mozuClient->execute();

	}
	
/**
	* Deletes the specified product handling fee rule.
	*
	* @param string $id Unique identifier of the customer segment to retrieve.
	* @param string $profilecode The unique, user-defined code of the profile with which the product handling fee rule is associated.
	* @return Promise - use $promise->then(sucessfn, errorfn). successFn is passed Mozu\Api\MozuResult. errorFn is passed Mozu\Api\ApiException
	*/
	public function deleteProductHandlingFeeRuleAsync($profilecode, $id)
	{
		$mozuClient = HandlingFeeRuleClient::deleteProductHandlingFeeRuleClient($this->dataViewMode, $profilecode, $id);
		$mozuClient = $mozuClient->withContext($this->apiContext);
		return $mozuClient->executeAsync();

	}
	
	
}

?>

