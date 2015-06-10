<?php


/**
* <auto-generated>
*     This code was generated by Codezu.     
*
*     Changes to this file may cause incorrect behavior and will be lost if
*     the code is regenerated.
* </auto-generated>
*/

namespace Mozu\Api\Clients\Commerce\Carts;

use Mozu\Api\MozuClient;
use Mozu\Api\Urls\Commerce\Carts\CartItemUrl;

/**
* Use the Cart Items subresource to manage a collection of items in an active shopping cart.
*/
class CartItemClient {

	/**
	* Retrieves a particular cart item by providing the cart item ID.
	*
	* @param string $cartItemId Identifier of the cart item to delete.
	* @param string $responseFields Use this field to include those fields which are not included by default.
	* @return MozuClient
	*/
	public static function getCartItemClient($cartItemId, $responseFields =  null)
	{
		$url = CartItemUrl::getCartItemUrl($cartItemId, $responseFields);
		$mozuClient = new MozuClient();
		$mozuClient->withResourceUrl($url);
		return $mozuClient;

	}
	
	/**
	* Retrieves a list of cart items including the total number of items in the cart.
	*
	* @param string $responseFields Use this field to include those fields which are not included by default.
	* @return MozuClient
	*/
	public static function getCartItemsClient($responseFields =  null)
	{
		$url = CartItemUrl::getCartItemsUrl($responseFields);
		$mozuClient = new MozuClient();
		$mozuClient->withResourceUrl($url);
		return $mozuClient;

	}
	
	/**
	* Adds a product to the current shopper's cart.
	*
	* @param string $responseFields Use this field to include those fields which are not included by default.
	* @param CartItem $cartItem Properties of an item added to an active shopping cart.
	* @return MozuClient
	*/
	public static function addItemToCartClient($cartItem, $responseFields =  null)
	{
		$url = CartItemUrl::addItemToCartUrl($responseFields);
		$mozuClient = new MozuClient();
		$mozuClient->withResourceUrl($url)->withBody($cartItem);
		return $mozuClient;

	}
	
	/**
	* Update the quantity of an individual cart item in the cart of the current shopper.
	*
	* @param string $cartItemId Identifier of the cart item to delete.
	* @param int $quantity The number of cart items in the shopper's active cart.
	* @param string $responseFields Use this field to include those fields which are not included by default.
	* @return MozuClient
	*/
	public static function updateCartItemQuantityClient($cartItemId, $quantity, $responseFields =  null)
	{
		$url = CartItemUrl::updateCartItemQuantityUrl($cartItemId, $quantity, $responseFields);
		$mozuClient = new MozuClient();
		$mozuClient->withResourceUrl($url);
		return $mozuClient;

	}
	
	/**
	* Update the product or product quantity of an item in the current shopper's cart.
	*
	* @param string $cartItemId Identifier of the cart item to delete.
	* @param string $responseFields Use this field to include those fields which are not included by default.
	* @param CartItem $cartItem Properties of an item added to an active shopping cart.
	* @return MozuClient
	*/
	public static function updateCartItemClient($cartItem, $cartItemId, $responseFields =  null)
	{
		$url = CartItemUrl::updateCartItemUrl($cartItemId, $responseFields);
		$mozuClient = new MozuClient();
		$mozuClient->withResourceUrl($url)->withBody($cartItem);
		return $mozuClient;

	}
	
	/**
	* Removes all items in the current shopper's active cart.
	*
	* @return MozuClient
	*/
	public static function removeAllCartItemsClient()
	{
		$url = CartItemUrl::removeAllCartItemsUrl();
		$mozuClient = new MozuClient();
		$mozuClient->withResourceUrl($url);
		return $mozuClient;

	}
	
	/**
	* Deletes a specific cart item by providing the cart item ID.
	*
	* @param string $cartItemId Identifier of the cart item to delete.
	*/
	public static function deleteCartItemClient($cartItemId)
	{
		$url = CartItemUrl::deleteCartItemUrl($cartItemId);
		$mozuClient = new MozuClient();
		$mozuClient->withResourceUrl($url);
		return $mozuClient;

	}
	
	
}

?>

