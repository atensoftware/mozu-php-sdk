<?php


/**
* <auto-generated>
*     This code was generated by Codezu.     
*
*     Changes to this file may cause incorrect behavior and will be lost if
*     the code is regenerated.
* </auto-generated>
*/

namespace Mozu\Api\Clients\Commerce;

use Mozu\Api\MozuClient;
use Mozu\Api\Urls\Commerce\WishlistUrl;

/**
* Use the Wish Lists resource to manage the shopper wish lists of products associated with a customer account. Although customer accounts are managed at the tenant level, the system stores shopper wish lists at the site level. This enables the same customer to have wish lists for each of a merchant's sites. Use the Wish List Items resource to manage items in a wish list.
*/
class WishlistClient {

	/**
	* Retrieves a list of shopper wish lists according to any filter and sort criteria.
	*
	* @param string $filter A set of expressions that consist of a field, operator, and value and represent search parameter syntax when filtering results of a query. Valid operators include equals (eq), does not equal (ne), greater than (gt), less than (lt), greater than or equal to (ge), less than or equal to (le), starts with (sw), or contains (cont). For example - "filter=IsDisplayed+eq+true"
	* @param int $pageSize The number of results to display on each page when creating paged results from a query. The maximum value is 200.
	* @param string $q A list of order search terms (not phrases) to use in the query when searching across order number and the name or email of the billing contact. When entering, separate multiple search terms with a space character.
	* @param int $qLimit The maximum number of search results to return in the response. You can limit any range between 1-100.
	* @param string $responseFields Use this field to include those fields which are not included by default.
	* @param string $sortBy The property by which to sort results and whether the results appear in ascending (a-z) order, represented by ASC or in descending (z-a) order, represented by DESC. The sortBy parameter follows an available property. For example: "sortBy=productCode+asc"
	* @param int $startIndex When creating paged results from a query, this value indicates the zero-based offset in the complete result set where the returned entities begin. For example, with a PageSize of 25, to get the 51st through the 75th items, use startIndex=3.
	* @return MozuClient
	*/
	public static function getWishlistsClient($startIndex =  null, $pageSize =  null, $sortBy =  null, $filter =  null, $q =  null, $qLimit =  null, $responseFields =  null)
	{
		$url = WishlistUrl::getWishlistsUrl($filter, $pageSize, $q, $qLimit, $responseFields, $sortBy, $startIndex);
		$mozuClient = new MozuClient();
		$mozuClient->withResourceUrl($url);
		return $mozuClient;

	}
	
	/**
	* Retrieves the details of the shopper wish list specified in the request.
	*
	* @param string $responseFields Use this field to include those fields which are not included by default.
	* @param string $wishlistId Unique identifier of the wish list.
	* @return MozuClient
	*/
	public static function getWishlistClient($wishlistId, $responseFields =  null)
	{
		$url = WishlistUrl::getWishlistUrl($responseFields, $wishlistId);
		$mozuClient = new MozuClient();
		$mozuClient->withResourceUrl($url);
		return $mozuClient;

	}
	
	/**
	* Retrieves the details of a wish list by supplying the wish list name.
	*
	* @param int $customerAccountId The unique identifier of the customer account for which to retrieve wish lists.
	* @param string $responseFields Use this field to include those fields which are not included by default.
	* @param string $wishlistName The name of the wish list to retrieve.
	* @return MozuClient
	*/
	public static function getWishlistByNameClient($customerAccountId, $wishlistName, $responseFields =  null)
	{
		$url = WishlistUrl::getWishlistByNameUrl($customerAccountId, $responseFields, $wishlistName);
		$mozuClient = new MozuClient();
		$mozuClient->withResourceUrl($url);
		return $mozuClient;

	}
	
	/**
	* Creates a new shopper wish list for the associated customer account. Although customer accounts are maintained at the tenant level, the system stores wish lists at the site level. Newly created wish lists do not have any items.
	*
	* @param string $responseFields Use this field to include those fields which are not included by default.
	* @param Wishlist $wishlist Properties of a shopper wish list defined for a site, associated with a customer account.
	* @return MozuClient
	*/
	public static function createWishlistClient($wishlist, $responseFields =  null)
	{
		$url = WishlistUrl::createWishlistUrl($responseFields);
		$mozuClient = new MozuClient();
		$mozuClient->withResourceUrl($url)->withBody($wishlist);
		return $mozuClient;

	}
	
	/**
	* Updates one or more properties of a shopper wish list defined for a customer account.
	*
	* @param string $responseFields Use this field to include those fields which are not included by default.
	* @param string $wishlistId Unique identifier of the wish list.
	* @param Wishlist $wishlist Properties of a shopper wish list defined for a site, associated with a customer account.
	* @return MozuClient
	*/
	public static function updateWishlistClient($wishlist, $wishlistId, $responseFields =  null)
	{
		$url = WishlistUrl::updateWishlistUrl($responseFields, $wishlistId);
		$mozuClient = new MozuClient();
		$mozuClient->withResourceUrl($url)->withBody($wishlist);
		return $mozuClient;

	}
	
	/**
	* Deletes the shopper wish list specified in the request and all items associated with it.
	*
	* @param string $wishlistId Unique identifier of the wish list.
	*/
	public static function deleteWishlistClient($wishlistId)
	{
		$url = WishlistUrl::deleteWishlistUrl($wishlistId);
		$mozuClient = new MozuClient();
		$mozuClient->withResourceUrl($url);
		return $mozuClient;

	}
	
	
}

?>

