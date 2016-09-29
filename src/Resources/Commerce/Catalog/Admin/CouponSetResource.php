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
* Use the Coupon Sets resource to view and create coupon sets. You can use coupon sets to group multiple coupon codes together and associate them with one or more discounts.
*/
class CouponSetResource {

		private $apiContext;
			
	public function __construct(ApiContext $apiContext) 
	{
		$this->apiContext = $apiContext;
	}

	



	/**
	* Retrieves a list of coupon sets according to any specified filter criteria and sort options.
	*
	* @param string $filter A set of filter expressions representing the search parameters for a query. This parameter is optional. Refer to [Sorting and Filtering](../../../../Developer/applications/sorting-filtering.htm) for a list of supported filters.
	* @param bool $includeCounts Specifies whether to include the number of redeemed coupons, existing coupon codes, and assigned discounts in the response body.
	* @param int $pageSize When creating paged results from a query, this value indicates the zero-based offset in the complete result set where the returned entities begin. For example, with this parameter set to 25, to get the 51st through the 75th items, set startIndex to 50.
	* @param string $responseFields Filtering syntax appended to an API call to increase or decrease the amount of data returned inside a JSON object. This parameter should only be used to retrieve data. Attempting to update data using this parameter may cause data loss.
	* @param string $sortBy The element to sort the results by and the channel in which the results appear. Either ascending (a-z) or descending (z-a) channel. Optional. Refer to [Sorting and Filtering](../../../../Developer/applications/sorting-filtering.htm) for more information.
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
	* Retrieves a list of coupon sets according to any specified filter criteria and sort options.
	*
	* @param string $filter A set of filter expressions representing the search parameters for a query. This parameter is optional. Refer to [Sorting and Filtering](../../../../Developer/applications/sorting-filtering.htm) for a list of supported filters.
	* @param bool $includeCounts Specifies whether to include the number of redeemed coupons, existing coupon codes, and assigned discounts in the response body.
	* @param int $pageSize When creating paged results from a query, this value indicates the zero-based offset in the complete result set where the returned entities begin. For example, with this parameter set to 25, to get the 51st through the 75th items, set startIndex to 50.
	* @param string $responseFields Filtering syntax appended to an API call to increase or decrease the amount of data returned inside a JSON object. This parameter should only be used to retrieve data. Attempting to update data using this parameter may cause data loss.
	* @param string $sortBy The element to sort the results by and the channel in which the results appear. Either ascending (a-z) or descending (z-a) channel. Optional. Refer to [Sorting and Filtering](../../../../Developer/applications/sorting-filtering.htm) for more information.
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
	* Returns a single
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
	* Returns a single
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
	* Returns a random, unique four character coupon set code.
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
	* Returns a random, unique four character coupon set code.
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
	* Adds a new coupon set.
	*
	* @param string $responseFields Filtering syntax appended to an API call to increase or decrease the amount of data returned inside a JSON object. This parameter should only be used to retrieve data. Attempting to update data using this parameter may cause data loss.
	* @param CouponSet $couponSet Mozu.ProductAdmin.Contracts.CouponSet ApiType DOCUMENT_HERE 
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
	* Adds a new coupon set.
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
	* Validates the coupon set code and tests it for uniqueness.
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
	* Validates the coupon set code and tests it for uniqueness.
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
	* Update a representation. You can not update the Code or ID once the set is created.
	*
	* @param string $couponSetCode The unique identifier of the coupon set.
	* @param string $responseFields Filtering syntax appended to an API call to increase or decrease the amount of data returned inside a JSON object. This parameter should only be used to retrieve data. Attempting to update data using this parameter may cause data loss.
	* @param CouponSet $couponSet Mozu.ProductAdmin.Contracts.CouponSet ApiType DOCUMENT_HERE 
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
	* Update a representation. You can not update the Code or ID once the set is created.
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
	* admin-couponsets Delete DeleteCouponSet description DOCUMENT_HERE 
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
	* admin-couponsets Delete DeleteCouponSet description DOCUMENT_HERE 
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

