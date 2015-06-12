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

use Mozu\Api\Clients\Commerce\Catalog\Admin\DiscountClient;
use Mozu\Api\ApiContext;

use Mozu\Api\Headers;

/**
* Define and manage discounts to apply to products, product categories, or orders. The discounts can be a specified amount off the price, percentage off the price, or for free shipping. Create a coupon code that shoppers can use to redeem the discount.
*/
class DiscountResource {

		private $apiContext;
		private $dataViewMode;
		public function __construct(ApiContext $apiContext, $dataViewMode) 
	{
		$this->apiContext = $apiContext;
		$this->dataViewMode = $dataViewMode;
	}
	



	/**
	* Retrieves a list of discounts according to any specified filter criteria and sort options.
	*
	* @param string $filter A set of expressions that consist of a field, operator, and value and represent search parameter syntax when filtering results of a query. Valid operators include equals (eq), does not equal (ne), greater than (gt), less than (lt), greater than or equal to (ge), less than or equal to (le), starts with (sw), or contains (cont). For example - "filter=IsDisplayed+eq+true"
	* @param int $pageSize The number of results to display on each page when creating paged results from a query. The maximum value is 200.
	* @param string $responseFields Use this field to include those fields which are not included by default.
	* @param string $sortBy 
	* @param int $startIndex 
	* @return DiscountCollection 
	* @deprecated deprecated since version 1.17
	*/
	public function getDiscounts($startIndex =  null, $pageSize =  null, $sortBy =  null, $filter =  null, $responseFields =  null)
	{
		$mozuClient = DiscountClient::getDiscountsClient($this->dataViewMode, $startIndex, $pageSize, $sortBy, $filter, $responseFields);
		$mozuClient = $mozuClient->withContext($this->apiContext);
		$mozuClient->execute();
		return $mozuClient->getResult();

	}
	
/**
	* Retrieves a list of discounts according to any specified filter criteria and sort options.
	*
	* @param string $filter A set of expressions that consist of a field, operator, and value and represent search parameter syntax when filtering results of a query. Valid operators include equals (eq), does not equal (ne), greater than (gt), less than (lt), greater than or equal to (ge), less than or equal to (le), starts with (sw), or contains (cont). For example - "filter=IsDisplayed+eq+true"
	* @param int $pageSize The number of results to display on each page when creating paged results from a query. The maximum value is 200.
	* @param string $responseFields Use this field to include those fields which are not included by default.
	* @param string $sortBy 
	* @param int $startIndex 
	* @return Promise - use $promise->then(sucessfn, errorfn). successFn is passed Mozu\Api\MozuResult. errorFn is passed Mozu\Api\ApiException
	*/
	public function getDiscountsAsync($startIndex =  null, $pageSize =  null, $sortBy =  null, $filter =  null, $responseFields =  null)
	{
		$mozuClient = DiscountClient::getDiscountsClient($this->dataViewMode, $startIndex, $pageSize, $sortBy, $filter, $responseFields);
		$mozuClient = $mozuClient->withContext($this->apiContext);
		return $mozuClient->executeAsync();

	}
	
	/**
	* Retrieves the localized content specified for the specified discount.
	*
	* @param int $discountId Unique identifier of the discount. System-supplied and read only.
	* @param string $responseFields Use this field to include those fields which are not included by default.
	* @return DiscountLocalizedContent 
	* @deprecated deprecated since version 1.17
	*/
	public function getDiscountContent($discountId, $responseFields =  null)
	{
		$mozuClient = DiscountClient::getDiscountContentClient($this->dataViewMode, $discountId, $responseFields);
		$mozuClient = $mozuClient->withContext($this->apiContext);
		$mozuClient->execute();
		return $mozuClient->getResult();

	}
	
/**
	* Retrieves the localized content specified for the specified discount.
	*
	* @param int $discountId Unique identifier of the discount. System-supplied and read only.
	* @param string $responseFields Use this field to include those fields which are not included by default.
	* @return Promise - use $promise->then(sucessfn, errorfn). successFn is passed Mozu\Api\MozuResult. errorFn is passed Mozu\Api\ApiException
	*/
	public function getDiscountContentAsync($discountId, $responseFields =  null)
	{
		$mozuClient = DiscountClient::getDiscountContentClient($this->dataViewMode, $discountId, $responseFields);
		$mozuClient = $mozuClient->withContext($this->apiContext);
		return $mozuClient->executeAsync();

	}
	
	/**
	* Retrieves the details of a single discount.
	*
	* @param int $discountId Unique identifier of the discount. System-supplied and read only.
	* @param string $responseFields Use this field to include those fields which are not included by default.
	* @return Discount 
	* @deprecated deprecated since version 1.17
	*/
	public function getDiscount($discountId, $responseFields =  null)
	{
		$mozuClient = DiscountClient::getDiscountClient($this->dataViewMode, $discountId, $responseFields);
		$mozuClient = $mozuClient->withContext($this->apiContext);
		$mozuClient->execute();
		return $mozuClient->getResult();

	}
	
/**
	* Retrieves the details of a single discount.
	*
	* @param int $discountId Unique identifier of the discount. System-supplied and read only.
	* @param string $responseFields Use this field to include those fields which are not included by default.
	* @return Promise - use $promise->then(sucessfn, errorfn). successFn is passed Mozu\Api\MozuResult. errorFn is passed Mozu\Api\ApiException
	*/
	public function getDiscountAsync($discountId, $responseFields =  null)
	{
		$mozuClient = DiscountClient::getDiscountClient($this->dataViewMode, $discountId, $responseFields);
		$mozuClient = $mozuClient->withContext($this->apiContext);
		return $mozuClient->executeAsync();

	}
	
	/**
	* Generates a random code for a coupon.
	*
	* @param string $responseFields Use this field to include those fields which are not included by default.
	* @return string 
	* @deprecated deprecated since version 1.17
	*/
	public function generateRandomCoupon($responseFields =  null)
	{
		$mozuClient = DiscountClient::generateRandomCouponClient($responseFields);
		$mozuClient = $mozuClient->withContext($this->apiContext);
		$mozuClient->execute();
		return $mozuClient->getResult();

	}
	
/**
	* Generates a random code for a coupon.
	*
	* @param string $responseFields Use this field to include those fields which are not included by default.
	* @return Promise - use $promise->then(sucessfn, errorfn). successFn is passed Mozu\Api\MozuResult. errorFn is passed Mozu\Api\ApiException
	*/
	public function generateRandomCouponAsync($responseFields =  null)
	{
		$mozuClient = DiscountClient::generateRandomCouponClient($responseFields);
		$mozuClient = $mozuClient->withContext($this->apiContext);
		return $mozuClient->executeAsync();

	}
	
	/**
	* Creates a new discount or coupon to apply to a product, category, order, or shipping.
	*
	* @param string $responseFields Use this field to include those fields which are not included by default.
	* @param Discount $discount Name of the discount added and applied to a shopping cart and order for a shopper's purchase. 
	* @return Discount 
	* @deprecated deprecated since version 1.17
	*/
	public function createDiscount($discount, $responseFields =  null)
	{
		$mozuClient = DiscountClient::createDiscountClient($discount, $responseFields);
		$mozuClient = $mozuClient->withContext($this->apiContext);
		$mozuClient->execute();
		return $mozuClient->getResult();

	}
	
/**
	* Creates a new discount or coupon to apply to a product, category, order, or shipping.
	*
	* @param string $responseFields Use this field to include those fields which are not included by default.
	* @return Promise - use $promise->then(sucessfn, errorfn). successFn is passed Mozu\Api\MozuResult. errorFn is passed Mozu\Api\ApiException
	*/
	public function createDiscountAsync($discount, $responseFields =  null)
	{
		$mozuClient = DiscountClient::createDiscountClient($discount, $responseFields);
		$mozuClient = $mozuClient->withContext($this->apiContext);
		return $mozuClient->executeAsync();

	}
	
	/**
	* Updates the localizable content for the specified discount or rename the discount without modifying its other properties.
	*
	* @param int $discountId Unique identifier of the discount. System-supplied and read only.
	* @param string $responseFields Use this field to include those fields which are not included by default.
	* @param DiscountLocalizedContent $content The container for the language-specific name of the discount. A container exists for each supported language (LocaleCode). This parameter enables you to display the discount name in multiple languages yet manage it as a single discount internally.
	* @return DiscountLocalizedContent 
	* @deprecated deprecated since version 1.17
	*/
	public function updateDiscountContent($content, $discountId, $responseFields =  null)
	{
		$mozuClient = DiscountClient::updateDiscountContentClient($content, $discountId, $responseFields);
		$mozuClient = $mozuClient->withContext($this->apiContext);
		$mozuClient->execute();
		return $mozuClient->getResult();

	}
	
/**
	* Updates the localizable content for the specified discount or rename the discount without modifying its other properties.
	*
	* @param int $discountId Unique identifier of the discount. System-supplied and read only.
	* @param string $responseFields Use this field to include those fields which are not included by default.
	* @return Promise - use $promise->then(sucessfn, errorfn). successFn is passed Mozu\Api\MozuResult. errorFn is passed Mozu\Api\ApiException
	*/
	public function updateDiscountContentAsync($content, $discountId, $responseFields =  null)
	{
		$mozuClient = DiscountClient::updateDiscountContentClient($content, $discountId, $responseFields);
		$mozuClient = $mozuClient->withContext($this->apiContext);
		return $mozuClient->executeAsync();

	}
	
	/**
	* Updates one or more properties of a defined discount.
	*
	* @param int $discountId Unique identifier of the discount. System-supplied and read only.
	* @param string $responseFields Use this field to include those fields which are not included by default.
	* @param Discount $discount Name of the discount added and applied to a shopping cart and order for a shopper's purchase. 
	* @return Discount 
	* @deprecated deprecated since version 1.17
	*/
	public function updateDiscount($discount, $discountId, $responseFields =  null)
	{
		$mozuClient = DiscountClient::updateDiscountClient($discount, $discountId, $responseFields);
		$mozuClient = $mozuClient->withContext($this->apiContext);
		$mozuClient->execute();
		return $mozuClient->getResult();

	}
	
/**
	* Updates one or more properties of a defined discount.
	*
	* @param int $discountId Unique identifier of the discount. System-supplied and read only.
	* @param string $responseFields Use this field to include those fields which are not included by default.
	* @return Promise - use $promise->then(sucessfn, errorfn). successFn is passed Mozu\Api\MozuResult. errorFn is passed Mozu\Api\ApiException
	*/
	public function updateDiscountAsync($discount, $discountId, $responseFields =  null)
	{
		$mozuClient = DiscountClient::updateDiscountClient($discount, $discountId, $responseFields);
		$mozuClient = $mozuClient->withContext($this->apiContext);
		return $mozuClient->executeAsync();

	}
	
	/**
	* Deletes a discount specified by its discount ID.
	*
	* @param int $discountId Unique identifier of the discount. System-supplied and read only.
	* @deprecated deprecated since version 1.17
	*/
	public function deleteDiscount($discountId)
	{
		$mozuClient = DiscountClient::deleteDiscountClient($discountId);
		$mozuClient = $mozuClient->withContext($this->apiContext);
		$mozuClient->execute();

	}
	
/**
	* Deletes a discount specified by its discount ID.
	*
	* @param int $discountId Unique identifier of the discount. System-supplied and read only.
	* @return Promise - use $promise->then(sucessfn, errorfn). successFn is passed Mozu\Api\MozuResult. errorFn is passed Mozu\Api\ApiException
	*/
	public function deleteDiscountAsync($discountId)
	{
		$mozuClient = DiscountClient::deleteDiscountClient($discountId);
		$mozuClient = $mozuClient->withContext($this->apiContext);
		return $mozuClient->executeAsync();

	}
	
	
}

?>

