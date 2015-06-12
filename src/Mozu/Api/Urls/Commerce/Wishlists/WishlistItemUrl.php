<?php

/*
* <auto-generated>
*     This code was generated by a Codezu.     
*
*     Changes to this file may cause incorrect behavior and will be lost if
*     the code is regenerated.
* </auto-generated>
*/


namespace Mozu\Api\Urls\Commerce\Wishlists;

use Mozu\Api\MozuUrl;
use Mozu\Api\UrlLocation;

class WishlistItemUrl  {

	/**
		* Get Resource Url for GetWishlistItem
		* @param string $responseFields Use this field to include those fields which are not included by default.
		* @param string $wishlistId Unique identifier of the wish list.
		* @param string $wishlistItemId Unique identifier of the item to remove from the shopper wish list.
		* @return string Resource Url
	*/
	public static function getWishlistItemUrl($responseFields, $wishlistId, $wishlistItemId)
	{
		$url = "/api/commerce/wishlists/{wishlistId}/items/{wishlistItemId}?responseFields={responseFields}";
		$mozuUrl = new MozuUrl($url, UrlLocation::TENANT_POD,"GET", false) ;
		$url = $mozuUrl->formatUrl("responseFields", $responseFields);
		$url = $mozuUrl->formatUrl("wishlistId", $wishlistId);
		$url = $mozuUrl->formatUrl("wishlistItemId", $wishlistItemId);
		return $mozuUrl;
	}
	
	/**
		* Get Resource Url for GetWishlistItems
		* @param string $filter A set of expressions that consist of a field, operator, and value and represent search parameter syntax when filtering results of a query. Valid operators include equals (eq), does not equal (ne), greater than (gt), less than (lt), greater than or equal to (ge), less than or equal to (le), starts with (sw), or contains (cont). For example - "filter=IsDisplayed+eq+true"
		* @param int $pageSize The number of results to display on each page when creating paged results from a query. The maximum value is 200.
		* @param string $responseFields Use this field to include those fields which are not included by default.
		* @param string $sortBy The property by which to sort results and whether the results appear in ascending (a-z) order, represented by ASC or in descending (z-a) order, represented by DESC. The sortBy parameter follows an available property. For example: "sortBy=productCode+asc"
		* @param int $startIndex When creating paged results from a query, this value indicates the zero-based offset in the complete result set where the returned entities begin. For example, with a PageSize of 25, to get the 51st through the 75th items, use startIndex=3.
		* @param string $wishlistId Unique identifier of the wish list.
		* @return string Resource Url
	*/
	public static function getWishlistItemsUrl($filter, $pageSize, $responseFields, $sortBy, $startIndex, $wishlistId)
	{
		$url = "/api/commerce/wishlists/{wishlistId}/items?startIndex={startIndex}&pageSize={pageSize}&sortBy={sortBy}&filter={filter}&responseFields={responseFields}";
		$mozuUrl = new MozuUrl($url, UrlLocation::TENANT_POD,"GET", false) ;
		$url = $mozuUrl->formatUrl("filter", $filter);
		$url = $mozuUrl->formatUrl("pageSize", $pageSize);
		$url = $mozuUrl->formatUrl("responseFields", $responseFields);
		$url = $mozuUrl->formatUrl("sortBy", $sortBy);
		$url = $mozuUrl->formatUrl("startIndex", $startIndex);
		$url = $mozuUrl->formatUrl("wishlistId", $wishlistId);
		return $mozuUrl;
	}
	
	/**
		* Get Resource Url for GetWishlistItemsByWishlistName
		* @param int $customerAccountId The unique identifier of the customer account for which to retrieve wish lists.
		* @param string $filter A set of expressions that consist of a field, operator, and value and represent search parameter syntax when filtering results of a query. Valid operators include equals (eq), does not equal (ne), greater than (gt), less than (lt), greater than or equal to (ge), less than or equal to (le), starts with (sw), or contains (cont). For example - "filter=IsDisplayed+eq+true"
		* @param int $pageSize The number of results to display on each page when creating paged results from a query. The maximum value is 200.
		* @param string $responseFields Use this field to include those fields which are not included by default.
		* @param string $sortBy The property by which to sort results and whether the results appear in ascending (a-z) order, represented by ASC or in descending (z-a) order, represented by DESC. The sortBy parameter follows an available property. For example: "sortBy=productCode+asc"
		* @param int $startIndex When creating paged results from a query, this value indicates the zero-based offset in the complete result set where the returned entities begin. For example, with a PageSize of 25, to get the 51st through the 75th items, use startIndex=3.
		* @param string $wishlistName The name of the wish list to retrieve.
		* @return string Resource Url
	*/
	public static function getWishlistItemsByWishlistNameUrl($customerAccountId, $filter, $pageSize, $responseFields, $sortBy, $startIndex, $wishlistName)
	{
		$url = "/api/commerce/wishlists/customers/{customerAccountId}/{wishlistName}/items?startIndex={startIndex}&pageSize={pageSize}&sortBy={sortBy}&filter={filter}&responseFields={responseFields}";
		$mozuUrl = new MozuUrl($url, UrlLocation::TENANT_POD,"GET", false) ;
		$url = $mozuUrl->formatUrl("customerAccountId", $customerAccountId);
		$url = $mozuUrl->formatUrl("filter", $filter);
		$url = $mozuUrl->formatUrl("pageSize", $pageSize);
		$url = $mozuUrl->formatUrl("responseFields", $responseFields);
		$url = $mozuUrl->formatUrl("sortBy", $sortBy);
		$url = $mozuUrl->formatUrl("startIndex", $startIndex);
		$url = $mozuUrl->formatUrl("wishlistName", $wishlistName);
		return $mozuUrl;
	}
	
	/**
		* Get Resource Url for AddItemToWishlist
		* @param string $responseFields Use this field to include those fields which are not included by default.
		* @param string $wishlistId Unique identifier of the wish list.
		* @return string Resource Url
	*/
	public static function addItemToWishlistUrl($responseFields, $wishlistId)
	{
		$url = "/api/commerce/wishlists/{wishlistId}/items?responseFields={responseFields}";
		$mozuUrl = new MozuUrl($url, UrlLocation::TENANT_POD,"POST", false) ;
		$url = $mozuUrl->formatUrl("responseFields", $responseFields);
		$url = $mozuUrl->formatUrl("wishlistId", $wishlistId);
		return $mozuUrl;
	}
	
	/**
		* Get Resource Url for UpdateWishlistItemQuantity
		* @param int $quantity The number of cart items in the shopper's active cart.
		* @param string $responseFields Use this field to include those fields which are not included by default.
		* @param string $wishlistId Unique identifier of the wish list.
		* @param string $wishlistItemId Unique identifier of the item to remove from the shopper wish list.
		* @return string Resource Url
	*/
	public static function updateWishlistItemQuantityUrl($quantity, $responseFields, $wishlistId, $wishlistItemId)
	{
		$url = "/api/commerce/wishlists/{wishlistId}/items/{wishlistItemId}/{quantity}?responseFields={responseFields}";
		$mozuUrl = new MozuUrl($url, UrlLocation::TENANT_POD,"PUT", false) ;
		$url = $mozuUrl->formatUrl("quantity", $quantity);
		$url = $mozuUrl->formatUrl("responseFields", $responseFields);
		$url = $mozuUrl->formatUrl("wishlistId", $wishlistId);
		$url = $mozuUrl->formatUrl("wishlistItemId", $wishlistItemId);
		return $mozuUrl;
	}
	
	/**
		* Get Resource Url for UpdateWishlistItem
		* @param string $responseFields Use this field to include those fields which are not included by default.
		* @param string $wishlistId Unique identifier of the wish list.
		* @param string $wishlistItemId Unique identifier of the item to remove from the shopper wish list.
		* @return string Resource Url
	*/
	public static function updateWishlistItemUrl($responseFields, $wishlistId, $wishlistItemId)
	{
		$url = "/api/commerce/wishlists/{wishlistId}/items/{wishlistItemId}?responseFields={responseFields}";
		$mozuUrl = new MozuUrl($url, UrlLocation::TENANT_POD,"PUT", false) ;
		$url = $mozuUrl->formatUrl("responseFields", $responseFields);
		$url = $mozuUrl->formatUrl("wishlistId", $wishlistId);
		$url = $mozuUrl->formatUrl("wishlistItemId", $wishlistItemId);
		return $mozuUrl;
	}
	
	/**
		* Get Resource Url for RemoveAllWishlistItems
		* @param string $wishlistId Unique identifier of the wish list.
		* @return string Resource Url
	*/
	public static function removeAllWishlistItemsUrl($wishlistId)
	{
		$url = "/api/commerce/wishlists/{wishlistId}/items";
		$mozuUrl = new MozuUrl($url, UrlLocation::TENANT_POD,"DELETE", false) ;
		$url = $mozuUrl->formatUrl("wishlistId", $wishlistId);
		return $mozuUrl;
	}
	
	/**
		* Get Resource Url for DeleteWishlistItem
		* @param string $wishlistId Unique identifier of the wish list.
		* @param string $wishlistItemId Unique identifier of the item to remove from the shopper wish list.
		* @return string Resource Url
	*/
	public static function deleteWishlistItemUrl($wishlistId, $wishlistItemId)
	{
		$url = "/api/commerce/wishlists/{wishlistId}/items/{wishlistItemId}";
		$mozuUrl = new MozuUrl($url, UrlLocation::TENANT_POD,"DELETE", false) ;
		$url = $mozuUrl->formatUrl("wishlistId", $wishlistId);
		$url = $mozuUrl->formatUrl("wishlistItemId", $wishlistItemId);
		return $mozuUrl;
	}
	
}

?>

