<?php


/**
* <auto-generated>
*     This code was generated by Codezu.     
*
*     Changes to this file may cause incorrect behavior and will be lost if
*     the code is regenerated.
* </auto-generated>
*/

namespace Mozu\Api\Clients\Commerce\Wishlists;

use Mozu\Api\MozuClient;
use Mozu\Api\Urls\Commerce\Wishlists\WishlistItemUrl;

/**
* Use the Wish List Items subresource to manage items in a shopper wish list. The same product can be defined as an item in any number of wish lists for the customer account. Use the Wish Lists resource to manage shopper wish lists.
*/
class WishlistItemClient {

	/**
	* Retrieves the details of an item in a shopper wish list.
	*
	* @param string $responseFields Use this field to include those fields which are not included by default.
	* @param string $wishlistId Unique identifier of the wish list.
	* @param string $wishlistItemId Unique identifier of the item to remove from the shopper wish list.
	* @return MozuClient
	*/
	public static function getWishlistItemClient($wishlistId, $wishlistItemId, $responseFields =  null)
	{
		$url = WishlistItemUrl::getWishlistItemUrl($responseFields, $wishlistId, $wishlistItemId);
		$mozuClient = new MozuClient();
		$mozuClient->withResourceUrl($url);
		return $mozuClient;

	}
	
	/**
	* Retrieves a list of items in a shopper wish list according to any specified filter and sort criteria.
	*
	* @param string $filter A set of expressions that consist of a field, operator, and value and represent search parameter syntax when filtering results of a query. Valid operators include equals (eq), does not equal (ne), greater than (gt), less than (lt), greater than or equal to (ge), less than or equal to (le), starts with (sw), or contains (cont). For example - "filter=IsDisplayed+eq+true"
	* @param int $pageSize The number of results to display on each page when creating paged results from a query. The maximum value is 200.
	* @param string $responseFields Use this field to include those fields which are not included by default.
	* @param string $sortBy The property by which to sort results and whether the results appear in ascending (a-z) order, represented by ASC or in descending (z-a) order, represented by DESC. The sortBy parameter follows an available property. For example: "sortBy=productCode+asc"
	* @param int $startIndex When creating paged results from a query, this value indicates the zero-based offset in the complete result set where the returned entities begin. For example, with a PageSize of 25, to get the 51st through the 75th items, use startIndex=3.
	* @param string $wishlistId Unique identifier of the wish list.
	* @return MozuClient
	*/
	public static function getWishlistItemsClient($wishlistId, $startIndex =  null, $pageSize =  null, $sortBy =  null, $filter =  null, $responseFields =  null)
	{
		$url = WishlistItemUrl::getWishlistItemsUrl($filter, $pageSize, $responseFields, $sortBy, $startIndex, $wishlistId);
		$mozuClient = new MozuClient();
		$mozuClient->withResourceUrl($url);
		return $mozuClient;

	}
	
	/**
	* Retrieve a list of items in a customer wish list by supplying the wish list name.
	*
	* @param int $customerAccountId The unique identifier of the customer account for which to retrieve wish lists.
	* @param string $filter A set of expressions that consist of a field, operator, and value and represent search parameter syntax when filtering results of a query. Valid operators include equals (eq), does not equal (ne), greater than (gt), less than (lt), greater than or equal to (ge), less than or equal to (le), starts with (sw), or contains (cont). For example - "filter=IsDisplayed+eq+true"
	* @param int $pageSize The number of results to display on each page when creating paged results from a query. The maximum value is 200.
	* @param string $responseFields Use this field to include those fields which are not included by default.
	* @param string $sortBy The property by which to sort results and whether the results appear in ascending (a-z) order, represented by ASC or in descending (z-a) order, represented by DESC. The sortBy parameter follows an available property. For example: "sortBy=productCode+asc"
	* @param int $startIndex When creating paged results from a query, this value indicates the zero-based offset in the complete result set where the returned entities begin. For example, with a PageSize of 25, to get the 51st through the 75th items, use startIndex=3.
	* @param string $wishlistName The name of the wish list to retrieve.
	* @return MozuClient
	*/
	public static function getWishlistItemsByWishlistNameClient($customerAccountId, $wishlistName, $startIndex =  null, $pageSize =  null, $sortBy =  null, $filter =  null, $responseFields =  null)
	{
		$url = WishlistItemUrl::getWishlistItemsByWishlistNameUrl($customerAccountId, $filter, $pageSize, $responseFields, $sortBy, $startIndex, $wishlistName);
		$mozuClient = new MozuClient();
		$mozuClient->withResourceUrl($url);
		return $mozuClient;

	}
	
	/**
	* Adds a product in a site's catalog as an item in a shopper wish list.
	*
	* @param string $responseFields Use this field to include those fields which are not included by default.
	* @param string $wishlistId Unique identifier of the wish list.
	* @param WishlistItem $wishlistItem Properties of an item in a shopper wish list.
	* @return MozuClient
	*/
	public static function addItemToWishlistClient($wishlistItem, $wishlistId, $responseFields =  null)
	{
		$url = WishlistItemUrl::addItemToWishlistUrl($responseFields, $wishlistId);
		$mozuClient = new MozuClient();
		$mozuClient->withResourceUrl($url)->withBody($wishlistItem);
		return $mozuClient;

	}
	
	/**
	* Updates the quantity of an item in a shopper wish list.
	*
	* @param int $quantity The number of cart items in the shopper's active cart.
	* @param string $responseFields Use this field to include those fields which are not included by default.
	* @param string $wishlistId Unique identifier of the wish list.
	* @param string $wishlistItemId Unique identifier of the item to remove from the shopper wish list.
	* @return MozuClient
	*/
	public static function updateWishlistItemQuantityClient($wishlistId, $wishlistItemId, $quantity, $responseFields =  null)
	{
		$url = WishlistItemUrl::updateWishlistItemQuantityUrl($quantity, $responseFields, $wishlistId, $wishlistItemId);
		$mozuClient = new MozuClient();
		$mozuClient->withResourceUrl($url);
		return $mozuClient;

	}
	
	/**
	* Updates the details of an item in a shopper wish list.
	*
	* @param string $responseFields Use this field to include those fields which are not included by default.
	* @param string $wishlistId Unique identifier of the wish list.
	* @param string $wishlistItemId Unique identifier of the item to remove from the shopper wish list.
	* @param WishlistItem $wishlistItem Properties of an item in a shopper wish list.
	* @return MozuClient
	*/
	public static function updateWishlistItemClient($wishlistItem, $wishlistId, $wishlistItemId, $responseFields =  null)
	{
		$url = WishlistItemUrl::updateWishlistItemUrl($responseFields, $wishlistId, $wishlistItemId);
		$mozuClient = new MozuClient();
		$mozuClient->withResourceUrl($url)->withBody($wishlistItem);
		return $mozuClient;

	}
	
	/**
	* Removes all items associated with a shopper wish list.
	*
	* @param string $wishlistId Unique identifier of the wish list.
	* @return MozuClient
	*/
	public static function removeAllWishlistItemsClient($wishlistId)
	{
		$url = WishlistItemUrl::removeAllWishlistItemsUrl($wishlistId);
		$mozuClient = new MozuClient();
		$mozuClient->withResourceUrl($url);
		return $mozuClient;

	}
	
	/**
	* Removes an item from the wish list specified in the request.
	*
	* @param string $wishlistId Unique identifier of the wish list.
	* @param string $wishlistItemId Unique identifier of the item to remove from the shopper wish list.
	*/
	public static function deleteWishlistItemClient($wishlistId, $wishlistItemId)
	{
		$url = WishlistItemUrl::deleteWishlistItemUrl($wishlistId, $wishlistItemId);
		$mozuClient = new MozuClient();
		$mozuClient->withResourceUrl($url);
		return $mozuClient;

	}
	
	
}

?>

