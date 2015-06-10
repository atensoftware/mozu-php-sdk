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
use Mozu\Api\Urls\Commerce\CartUrl;

/**
* Use this resource to manage storefront shopping carts as shoppers add and remove items for purchase. Each time a shopper's cart is modified, the Carts resource updates the estimated total with any applicable discounts.
*/
class CartClient {

	/**
	* Retrieves the cart specified in the request.
	*
	* @param string $cartId Identifier of the cart to delete.
	* @param string $responseFields Use this field to include those fields which are not included by default.
	* @return MozuClient
	*/
	public static function getCartClient($cartId, $responseFields =  null)
	{
		$url = CartUrl::getCartUrl($cartId, $responseFields);
		$mozuClient = new MozuClient();
		$mozuClient->withResourceUrl($url);
		return $mozuClient;

	}
	
	/**
	* Retrieves a cart's contents for the current shopper. If the shopper does not have an active cart on the site, the service creates one.
	*
	* @param string $responseFields Use this field to include those fields which are not included by default.
	* @return MozuClient
	*/
	public static function getOrCreateCartClient($responseFields =  null)
	{
		$url = CartUrl::getOrCreateCartUrl($responseFields);
		$mozuClient = new MozuClient();
		$mozuClient->withResourceUrl($url);
		return $mozuClient;

	}
	
	/**
	* Retrieves summary information associated with the cart of the current shopper, including the number of items, the current total, and whether the cart has expired. All anonymous idle carts that do not proceed to checkout expire after 14 days.
	*
	* @param string $responseFields Use this field to include those fields which are not included by default.
	* @return MozuClient
	*/
	public static function getCartSummaryClient($responseFields =  null)
	{
		$url = CartUrl::getCartSummaryUrl($responseFields);
		$mozuClient = new MozuClient();
		$mozuClient->withResourceUrl($url);
		return $mozuClient;

	}
	
	/**
	* Retrieves summary information associated with the cart of user specified in the request, including the number of items in the cart, the current total, and whether the cart has expired. All anonymous idle carts that do not proceed to checkout expire after 14 days.
	*
	* @param string $responseFields Use this field to include those fields which are not included by default.
	* @param string $userId Unique identifier of the user whose tenant scopes you want to retrieve.
	* @return MozuClient
	*/
	public static function getUserCartSummaryClient($userId, $responseFields =  null)
	{
		$url = CartUrl::getUserCartSummaryUrl($responseFields, $userId);
		$mozuClient = new MozuClient();
		$mozuClient->withResourceUrl($url);
		return $mozuClient;

	}
	
	/**
	* Retrieves the cart of the user specified in the request.
	*
	* @param string $responseFields Use this field to include those fields which are not included by default.
	* @param string $userId Unique identifier of the user whose tenant scopes you want to retrieve.
	* @return MozuClient
	*/
	public static function getUserCartClient($userId, $responseFields =  null)
	{
		$url = CartUrl::getUserCartUrl($responseFields, $userId);
		$mozuClient = new MozuClient();
		$mozuClient->withResourceUrl($url);
		return $mozuClient;

	}
	
	/**
	* Update the current shopper's cart.
	*
	* @param string $responseFields Use this field to include those fields which are not included by default.
	* @param Cart $cart Properties of a shopping cart.
	* @return MozuClient
	*/
	public static function updateCartClient($cart, $responseFields =  null)
	{
		$url = CartUrl::updateCartUrl($responseFields);
		$mozuClient = new MozuClient();
		$mozuClient->withResourceUrl($url)->withBody($cart);
		return $mozuClient;

	}
	
	/**
	* Deletes the cart specified in the request.
	*
	* @param string $cartId Identifier of the cart to delete.
	*/
	public static function deleteCartClient($cartId)
	{
		$url = CartUrl::deleteCartUrl($cartId);
		$mozuClient = new MozuClient();
		$mozuClient->withResourceUrl($url);
		return $mozuClient;

	}
	
	/**
	* Deletes the cart of the currently active shopper.
	*
	*/
	public static function deleteCurrentCartClient()
	{
		$url = CartUrl::deleteCurrentCartUrl();
		$mozuClient = new MozuClient();
		$mozuClient->withResourceUrl($url);
		return $mozuClient;

	}
	
	
}

?>

