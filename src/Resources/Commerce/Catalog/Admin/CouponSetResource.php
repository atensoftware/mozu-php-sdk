<?php


/**
* <auto-generated>
*     This code was generated by Codezu.     
*
*     Changes to this file may cause incorrect behavior and will be lost if
*     the code is regenerated.
* </auto-generated>
*/

namespace Mozu\Api\Resources\Commerce\Catalog\Admin;

use Mozu\Api\Clients\Commerce\Catalog\Admin\CouponSetClient;
use Mozu\Api\ApiContext;


/**
* Use the Coupon Sets resource to view and create coupon sets. You can use coupon sets to group multiple coupon codes together and associate them with one or more discounts. Use the  subresource to manage the coupon codes within manual coupon sets. Use the  subresource to mange the discounts assigned to coupon sets.
*/
class CouponSetResource {

		private $apiContext;
			
	public function __construct(ApiContext $apiContext) 
	{
		$this->apiContext = $apiContext;
	}

	



	/**
	* Retrieves a list of coupon sets in the catalog according to any specified filter criteria and sort options.
	*
	* @param string $filter A set of filter expressions representing the search parameters for a query. This parameter is optional. Refer to [Sorting and Filtering](../../../../Developer/api-guides/sorting-filtering.htm) for a list of supported filters.
	* @param bool $includeCounts Specifies whether to include the number of redeemed coupons, existing coupon codes, and assigned discounts in the response body.
	* @param int $pageSize When creating paged results from a query, this value indicates the zero-based offset in the complete result set where the returned entities begin. For example, with this parameter set to 25, to get the 51st through the 75th items, set startIndex to 50.
	* @param string $responseFields Filtering syntax appended to an API call to increase or decrease the amount of data returned inside a JSON object. This parameter should only be used to retrieve data. Attempting to update data using this parameter may cause data loss.
	* @param string $sortBy The element to sort the results by and the channel in which the results appear. Either ascending (a-z) or descending (z-a) channel. Optional. Refer to [Sorting and Filtering](../../../../Developer/api-guides/sorting-filtering.htm) for more information.
	* @param int $startIndex When creating paged results from a query, this value indicates the zero-based offset in the complete result set where the returned entities begin. For example, with pageSize set to 25, to get the 51st through the 75th items, set this parameter to 50.
	* @return CouponSetCollection 
	* @deprecated deprecated since version 1.17
	*/
	public function getCouponSets($startIndex =  null, $pageSize =  null, $sortBy =  null, $filter =  null, $includeCounts =  null, $responseFields =  null)
	{
		$mozuClient = CouponSetClient::getCouponSetsClient($startIndex, $pageSize, $sortBy, $filter, $includeCounts, $responseFields);
		$mozuClient = $mozuClient->withContext($this->apiContext);
		$mozuClient->execute();
		return $mozuClient->getResult();

	}
	
/**
	* Retrieves a list of coupon sets in the catalog according to any specified filter criteria and sort options.
	*
	* @param string $filter A set of filter expressions representing the search parameters for a query. This parameter is optional. Refer to [Sorting and Filtering](../../../../Developer/api-guides/sorting-filtering.htm) for a list of supported filters.
	* @param bool $includeCounts Specifies whether to include the number of redeemed coupons, existing coupon codes, and assigned discounts in the response body.
	* @param int $pageSize When creating paged results from a query, this value indicates the zero-based offset in the complete result set where the returned entities begin. For example, with this parameter set to 25, to get the 51st through the 75th items, set startIndex to 50.
	* @param string $responseFields Filtering syntax appended to an API call to increase or decrease the amount of data returned inside a JSON object. This parameter should only be used to retrieve data. Attempting to update data using this parameter may cause data loss.
	* @param string $sortBy The element to sort the results by and the channel in which the results appear. Either ascending (a-z) or descending (z-a) channel. Optional. Refer to [Sorting and Filtering](../../../../Developer/api-guides/sorting-filtering.htm) for more information.
	* @param int $startIndex When creating paged results from a query, this value indicates the zero-based offset in the complete result set where the returned entities begin. For example, with pageSize set to 25, to get the 51st through the 75th items, set this parameter to 50.
	* @return Promise - use $promise->then(sucessfn, errorfn). successFn is passed Mozu\Api\MozuResult. errorFn is passed Mozu\Api\ApiException
	*/
	public function getCouponSetsAsync($startIndex =  null, $pageSize =  null, $sortBy =  null, $filter =  null, $includeCounts =  null, $responseFields =  null)
	{
		$mozuClient = CouponSetClient::getCouponSetsClient($startIndex, $pageSize, $sortBy, $filter, $includeCounts, $responseFields);
		$mozuClient = $mozuClient->withContext($this->apiContext);
		return $mozuClient->executeAsync();

	}
	
	/**
	* Retrieves the details of a single coupon set. Use the couponSetCode parameter to specify the coupon set. Use the includeCounts parameter to specify whether to include the number of redeemed coupons, existing coupon codes, and assigned discounts.
	*
	* @param string $couponSetCode The unique identifier of the coupon set.
	* @param bool $includeCounts Specifies whether to include the number of redeemed coupons, existing coupon codes, and assigned discounts in the response body.
	* @param string $responseFields Filtering syntax appended to an API call to increase or decrease the amount of data returned inside a JSON object. This parameter should only be used to retrieve data. Attempting to update data using this parameter may cause data loss.
	* @return CouponSet 
	* @deprecated deprecated since version 1.17
	*/
	public function getCouponSet($couponSetCode, $includeCounts =  null, $responseFields =  null)
	{
		$mozuClient = CouponSetClient::getCouponSetClient($couponSetCode, $includeCounts, $responseFields);
		$mozuClient = $mozuClient->withContext($this->apiContext);
		$mozuClient->execute();
		return $mozuClient->getResult();

	}
	
/**
	* Retrieves the details of a single coupon set. Use the couponSetCode parameter to specify the coupon set. Use the includeCounts parameter to specify whether to include the number of redeemed coupons, existing coupon codes, and assigned discounts.
	*
	* @param string $couponSetCode The unique identifier of the coupon set.
	* @param bool $includeCounts Specifies whether to include the number of redeemed coupons, existing coupon codes, and assigned discounts in the response body.
	* @param string $responseFields Filtering syntax appended to an API call to increase or decrease the amount of data returned inside a JSON object. This parameter should only be used to retrieve data. Attempting to update data using this parameter may cause data loss.
	* @return Promise - use $promise->then(sucessfn, errorfn). successFn is passed Mozu\Api\MozuResult. errorFn is passed Mozu\Api\ApiException
	*/
	public function getCouponSetAsync($couponSetCode, $includeCounts =  null, $responseFields =  null)
	{
		$mozuClient = CouponSetClient::getCouponSetClient($couponSetCode, $includeCounts, $responseFields);
		$mozuClient = $mozuClient->withContext($this->apiContext);
		return $mozuClient->executeAsync();

	}
	
	/**
	* Returns a unique, random four character code to use for the couponSetCode.
	*
	* @param string $responseFields Filtering syntax appended to an API call to increase or decrease the amount of data returned inside a JSON object. This parameter should only be used to retrieve data. Attempting to update data using this parameter may cause data loss.
	* @return string 
	* @deprecated deprecated since version 1.17
	*/
	public function getUniqueCouponSetCode($responseFields =  null)
	{
		$mozuClient = CouponSetClient::getUniqueCouponSetCodeClient($responseFields);
		$mozuClient = $mozuClient->withContext($this->apiContext);
		$mozuClient->execute();
		return $mozuClient->getResult();

	}
	
/**
	* Returns a unique, random four character code to use for the couponSetCode.
	*
	* @param string $responseFields Filtering syntax appended to an API call to increase or decrease the amount of data returned inside a JSON object. This parameter should only be used to retrieve data. Attempting to update data using this parameter may cause data loss.
	* @return Promise - use $promise->then(sucessfn, errorfn). successFn is passed Mozu\Api\MozuResult. errorFn is passed Mozu\Api\ApiException
	*/
	public function getUniqueCouponSetCodeAsync($responseFields =  null)
	{
		$mozuClient = CouponSetClient::getUniqueCouponSetCodeClient($responseFields);
		$mozuClient = $mozuClient->withContext($this->apiContext);
		return $mozuClient->executeAsync();

	}
	
	/**
	* Adds a single coupon set to the catalog.
	*
	* @param string $responseFields Filtering syntax appended to an API call to increase or decrease the amount of data returned inside a JSON object. This parameter should only be used to retrieve data. Attempting to update data using this parameter may cause data loss.
	* @param CouponSet $couponSet The details of the new coupon set.
	* @return CouponSet 
	* @deprecated deprecated since version 1.17
	*/
	public function addCouponSet($couponSet, $responseFields =  null)
	{
		$mozuClient = CouponSetClient::addCouponSetClient($couponSet, $responseFields);
		$mozuClient = $mozuClient->withContext($this->apiContext);
		$mozuClient->execute();
		return $mozuClient->getResult();

	}
	
/**
	* Adds a single coupon set to the catalog.
	*
	* @param string $responseFields Filtering syntax appended to an API call to increase or decrease the amount of data returned inside a JSON object. This parameter should only be used to retrieve data. Attempting to update data using this parameter may cause data loss.
	* @return Promise - use $promise->then(sucessfn, errorfn). successFn is passed Mozu\Api\MozuResult. errorFn is passed Mozu\Api\ApiException
	*/
	public function addCouponSetAsync($couponSet, $responseFields =  null)
	{
		$mozuClient = CouponSetClient::addCouponSetClient($couponSet, $responseFields);
		$mozuClient = $mozuClient->withContext($this->apiContext);
		return $mozuClient->executeAsync();

	}
	
	/**
	* Validates the couponSetCode and tests it for uniqueness.
	*
	* @param string $code User-defined code that uniqely identifies the channel group.
	* @deprecated deprecated since version 1.17
	*/
	public function validateUniqueCouponSetCode($code)
	{
		$mozuClient = CouponSetClient::validateUniqueCouponSetCodeClient($code);
		$mozuClient = $mozuClient->withContext($this->apiContext);
		$mozuClient->execute();

	}
	
/**
	* Validates the couponSetCode and tests it for uniqueness.
	*
	* @param string $code User-defined code that uniqely identifies the channel group.
	* @return Promise - use $promise->then(sucessfn, errorfn). successFn is passed Mozu\Api\MozuResult. errorFn is passed Mozu\Api\ApiException
	*/
	public function validateUniqueCouponSetCodeAsync($code)
	{
		$mozuClient = CouponSetClient::validateUniqueCouponSetCodeClient($code);
		$mozuClient = $mozuClient->withContext($this->apiContext);
		return $mozuClient->executeAsync();

	}
	
	/**
	* Updates one or more properties of a coupon set in the catalog.
	*
	* @param string $couponSetCode The unique identifier of the coupon set.
	* @param string $responseFields Filtering syntax appended to an API call to increase or decrease the amount of data returned inside a JSON object. This parameter should only be used to retrieve data. Attempting to update data using this parameter may cause data loss.
	* @param CouponSet $couponSet The details of the updated coupon set.
	* @return CouponSet 
	* @deprecated deprecated since version 1.17
	*/
	public function updateCouponSet($couponSet, $couponSetCode, $responseFields =  null)
	{
		$mozuClient = CouponSetClient::updateCouponSetClient($couponSet, $couponSetCode, $responseFields);
		$mozuClient = $mozuClient->withContext($this->apiContext);
		$mozuClient->execute();
		return $mozuClient->getResult();

	}
	
/**
	* Updates one or more properties of a coupon set in the catalog.
	*
	* @param string $couponSetCode The unique identifier of the coupon set.
	* @param string $responseFields Filtering syntax appended to an API call to increase or decrease the amount of data returned inside a JSON object. This parameter should only be used to retrieve data. Attempting to update data using this parameter may cause data loss.
	* @return Promise - use $promise->then(sucessfn, errorfn). successFn is passed Mozu\Api\MozuResult. errorFn is passed Mozu\Api\ApiException
	*/
	public function updateCouponSetAsync($couponSet, $couponSetCode, $responseFields =  null)
	{
		$mozuClient = CouponSetClient::updateCouponSetClient($couponSet, $couponSetCode, $responseFields);
		$mozuClient = $mozuClient->withContext($this->apiContext);
		return $mozuClient->executeAsync();

	}
	
	/**
	* Deletes a specified coupon set from the catalog. Use the couponSetCode parameter to specify the coupon set to delete.
	*
	* @param string $couponSetCode The unique identifier of the coupon set.
	* @deprecated deprecated since version 1.17
	*/
	public function deleteCouponSet($couponSetCode)
	{
		$mozuClient = CouponSetClient::deleteCouponSetClient($couponSetCode);
		$mozuClient = $mozuClient->withContext($this->apiContext);
		$mozuClient->execute();

	}
	
/**
	* Deletes a specified coupon set from the catalog. Use the couponSetCode parameter to specify the coupon set to delete.
	*
	* @param string $couponSetCode The unique identifier of the coupon set.
	* @return Promise - use $promise->then(sucessfn, errorfn). successFn is passed Mozu\Api\MozuResult. errorFn is passed Mozu\Api\ApiException
	*/
	public function deleteCouponSetAsync($couponSetCode)
	{
		$mozuClient = CouponSetClient::deleteCouponSetClient($couponSetCode);
		$mozuClient = $mozuClient->withContext($this->apiContext);
		return $mozuClient->executeAsync();

	}
	
	
}

?>
