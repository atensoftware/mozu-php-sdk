<?php


/**
* <auto-generated>
*     This code was generated by Codezu.     
*
*     Changes to this file may cause incorrect behavior and will be lost if
*     the code is regenerated.
* </auto-generated>
*/

namespace Mozu\Api\Clients\Commerce\Catalog\Admin;

use Mozu\Api\MozuClient;
use Mozu\Api\Urls\Commerce\Catalog\Admin\DiscountUrl;

/**
* Define and manage discounts to apply to products, product categories, or orders. The discounts can be a specified amount off the price, percentage off the price, or for free shipping. Create a coupon code that shoppers can use to redeem the discount.
*/
class DiscountClient {

	/**
	* Retrieves a list of discounts according to any specified filter criteria and sort options.
	*
	* @param string $filter A set of expressions that consist of a field, operator, and value and represent search parameter syntax when filtering results of a query. Valid operators include equals (eq), does not equal (ne), greater than (gt), less than (lt), greater than or equal to (ge), less than or equal to (le), starts with (sw), or contains (cont). For example - "filter=IsDisplayed+eq+true"
	* @param int $pageSize The number of results to display on each page when creating paged results from a query. The maximum value is 200.
	* @param string $responseFields Use this field to include those fields which are not included by default.
	* @param string $sortBy 
	* @param int $startIndex 
	* @return MozuClient
	*/
	public static function getDiscountsClient($dataViewMode, $startIndex =  null, $pageSize =  null, $sortBy =  null, $filter =  null, $responseFields =  null)
	{
		$url = DiscountUrl::getDiscountsUrl($filter, $pageSize, $responseFields, $sortBy, $startIndex);
		$mozuClient = new MozuClient();
		$mozuClient->withResourceUrl($url)->withHeader(Headers::X_VOL_DATAVIEW_MODE ,$dataViewMode);
		return $mozuClient;

	}
	
	/**
	* Retrieves the localized content specified for the specified discount.
	*
	* @param int $discountId Unique identifier of the discount. System-supplied and read only.
	* @param string $responseFields Use this field to include those fields which are not included by default.
	* @return MozuClient
	*/
	public static function getDiscountContentClient($dataViewMode, $discountId, $responseFields =  null)
	{
		$url = DiscountUrl::getDiscountContentUrl($discountId, $responseFields);
		$mozuClient = new MozuClient();
		$mozuClient->withResourceUrl($url)->withHeader(Headers::X_VOL_DATAVIEW_MODE ,$dataViewMode);
		return $mozuClient;

	}
	
	/**
	* Retrieves the details of a single discount.
	*
	* @param int $discountId Unique identifier of the discount. System-supplied and read only.
	* @param string $responseFields Use this field to include those fields which are not included by default.
	* @return MozuClient
	*/
	public static function getDiscountClient($dataViewMode, $discountId, $responseFields =  null)
	{
		$url = DiscountUrl::getDiscountUrl($discountId, $responseFields);
		$mozuClient = new MozuClient();
		$mozuClient->withResourceUrl($url)->withHeader(Headers::X_VOL_DATAVIEW_MODE ,$dataViewMode);
		return $mozuClient;

	}
	
	/**
	* Generates a random code for a coupon.
	*
	* @param string $responseFields Use this field to include those fields which are not included by default.
	* @return MozuClient
	*/
	public static function generateRandomCouponClient($responseFields =  null)
	{
		$url = DiscountUrl::generateRandomCouponUrl($responseFields);
		$mozuClient = new MozuClient();
		$mozuClient->withResourceUrl($url);
		return $mozuClient;

	}
	
	/**
	* Creates a new discount or coupon to apply to a product, category, order, or shipping.
	*
	* @param string $responseFields Use this field to include those fields which are not included by default.
	* @param Discount $discount Name of the discount added and applied to a shopping cart and order for a shopper's purchase. 
	* @return MozuClient
	*/
	public static function createDiscountClient($discount, $responseFields =  null)
	{
		$url = DiscountUrl::createDiscountUrl($responseFields);
		$mozuClient = new MozuClient();
		$mozuClient->withResourceUrl($url)->withBody($discount);
		return $mozuClient;

	}
	
	/**
	* Updates the localizable content for the specified discount or rename the discount without modifying its other properties.
	*
	* @param int $discountId Unique identifier of the discount. System-supplied and read only.
	* @param string $responseFields Use this field to include those fields which are not included by default.
	* @param DiscountLocalizedContent $content The container for the language-specific name of the discount. A container exists for each supported language (LocaleCode). This parameter enables you to display the discount name in multiple languages yet manage it as a single discount internally.
	* @return MozuClient
	*/
	public static function updateDiscountContentClient($content, $discountId, $responseFields =  null)
	{
		$url = DiscountUrl::updateDiscountContentUrl($discountId, $responseFields);
		$mozuClient = new MozuClient();
		$mozuClient->withResourceUrl($url)->withBody($content);
		return $mozuClient;

	}
	
	/**
	* Updates one or more properties of a defined discount.
	*
	* @param int $discountId Unique identifier of the discount. System-supplied and read only.
	* @param string $responseFields Use this field to include those fields which are not included by default.
	* @param Discount $discount Name of the discount added and applied to a shopping cart and order for a shopper's purchase. 
	* @return MozuClient
	*/
	public static function updateDiscountClient($discount, $discountId, $responseFields =  null)
	{
		$url = DiscountUrl::updateDiscountUrl($discountId, $responseFields);
		$mozuClient = new MozuClient();
		$mozuClient->withResourceUrl($url)->withBody($discount);
		return $mozuClient;

	}
	
	/**
	* Deletes a discount specified by its discount ID.
	*
	* @param int $discountId Unique identifier of the discount. System-supplied and read only.
	*/
	public static function deleteDiscountClient($discountId)
	{
		$url = DiscountUrl::deleteDiscountUrl($discountId);
		$mozuClient = new MozuClient();
		$mozuClient->withResourceUrl($url);
		return $mozuClient;

	}
	
	
}

?>

