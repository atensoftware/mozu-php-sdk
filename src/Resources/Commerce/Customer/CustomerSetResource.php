<?php


/**
* <auto-generated>
*     This code was generated by Codezu.     
*
*     Changes to this file may cause incorrect behavior and will be lost if
*     the code is regenerated.
* </auto-generated>
*/

namespace Mozu\Api\Resources\Commerce\Customer;

use Mozu\Api\Clients\Commerce\Customer\CustomerSetClient;
use Mozu\Api\ApiContext;


/**
* Use the Customer Sets resource to manage your customer sets. You can use customer sets to control the specific sites your customers can access using the same login credentials, as well as what customer My Account information is shared between sites.Refer to [Customer Sets](../../../guides/settings/customer-sets.htm) in the Guides section for more information.
*/
class CustomerSetResource {

		private $apiContext;
			
	public function __construct(ApiContext $apiContext) 
	{
		$this->apiContext = $apiContext;
	}

	



	/**
	* Retrieves a collection of customer sets according to any specified filter criteria.
	*
	* @param int $pageSize When creating paged results from a query, this value indicates the zero-based offset in the complete result set where the returned entities begin. For example, with this parameter set to 25, to get the 51st through the 75th items, set startIndex to 50.
	* @param string $responseFields Filtering syntax appended to an API call to increase or decrease the amount of data returned inside a JSON object. This parameter should only be used to retrieve data. Attempting to update data using this parameter may cause data loss.
	* @param string $sortBy The element to sort the results by and the channel in which the results appear. Either ascending (a-z) or descending (z-a) channel. Optional. Refer to [Sorting and Filtering](../../../../Developer/api-guides/sorting-filtering.htm) for more information.
	* @param int $startIndex When creating paged results from a query, this value indicates the zero-based offset in the complete result set where the returned entities begin. For example, with pageSize set to 25, to get the 51st through the 75th items, set this parameter to 50.
	* @return CustomerSetCollection 
	* @deprecated deprecated since version 1.17
	*/
	public function getCustomerSets($startIndex =  null, $pageSize =  null, $sortBy =  null, $responseFields =  null)
	{
		$mozuClient = CustomerSetClient::getCustomerSetsClient($startIndex, $pageSize, $sortBy, $responseFields);
		$mozuClient = $mozuClient->withContext($this->apiContext);
		$mozuClient->execute();
		return $mozuClient->getResult();

	}
	
/**
	* Retrieves a collection of customer sets according to any specified filter criteria.
	*
	* @param int $pageSize When creating paged results from a query, this value indicates the zero-based offset in the complete result set where the returned entities begin. For example, with this parameter set to 25, to get the 51st through the 75th items, set startIndex to 50.
	* @param string $responseFields Filtering syntax appended to an API call to increase or decrease the amount of data returned inside a JSON object. This parameter should only be used to retrieve data. Attempting to update data using this parameter may cause data loss.
	* @param string $sortBy The element to sort the results by and the channel in which the results appear. Either ascending (a-z) or descending (z-a) channel. Optional. Refer to [Sorting and Filtering](../../../../Developer/api-guides/sorting-filtering.htm) for more information.
	* @param int $startIndex When creating paged results from a query, this value indicates the zero-based offset in the complete result set where the returned entities begin. For example, with pageSize set to 25, to get the 51st through the 75th items, set this parameter to 50.
	* @return Promise - use $promise->then(sucessfn, errorfn). successFn is passed Mozu\Api\MozuResult. errorFn is passed Mozu\Api\ApiException
	*/
	public function getCustomerSetsAsync($startIndex =  null, $pageSize =  null, $sortBy =  null, $responseFields =  null)
	{
		$mozuClient = CustomerSetClient::getCustomerSetsClient($startIndex, $pageSize, $sortBy, $responseFields);
		$mozuClient = $mozuClient->withContext($this->apiContext);
		return $mozuClient->executeAsync();

	}
	
	/**
	* Retrieves the details of the specified customer set.
	*
	* @param string $code User-defined code that uniqely identifies the channel group.
	* @param string $responseFields Filtering syntax appended to an API call to increase or decrease the amount of data returned inside a JSON object. This parameter should only be used to retrieve data. Attempting to update data using this parameter may cause data loss.
	* @return CustomerSet 
	* @deprecated deprecated since version 1.17
	*/
	public function getCustomerSet($code, $responseFields =  null)
	{
		$mozuClient = CustomerSetClient::getCustomerSetClient($code, $responseFields);
		$mozuClient = $mozuClient->withContext($this->apiContext);
		$mozuClient->execute();
		return $mozuClient->getResult();

	}
	
/**
	* Retrieves the details of the specified customer set.
	*
	* @param string $code User-defined code that uniqely identifies the channel group.
	* @param string $responseFields Filtering syntax appended to an API call to increase or decrease the amount of data returned inside a JSON object. This parameter should only be used to retrieve data. Attempting to update data using this parameter may cause data loss.
	* @return Promise - use $promise->then(sucessfn, errorfn). successFn is passed Mozu\Api\MozuResult. errorFn is passed Mozu\Api\ApiException
	*/
	public function getCustomerSetAsync($code, $responseFields =  null)
	{
		$mozuClient = CustomerSetClient::getCustomerSetClient($code, $responseFields);
		$mozuClient = $mozuClient->withContext($this->apiContext);
		return $mozuClient->executeAsync();

	}
	
	
}

?>

