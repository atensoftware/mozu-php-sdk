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
use Mozu\Api\Urls\Commerce\OrderUrl;


/**
* Use the Orders resource to manage all components of order processing, payment, and fulfillment.
*/
class OrderClient {

	/**
	* Retrieves a list of orders according to any specified filter criteria and sort options.
	*
	* @param string $filter A set of filter expressions representing the search parameters for a query. This parameter is optional. Refer to [Sorting and Filtering](../../../../Developer/applications/sorting-filtering.htm) for a list of supported filters.
	* @param int $pageSize The number of results to display on each page when creating paged results from a query. The maximum value is 200.
	* @param string $q A list of order search terms (not phrases) to use in the query when searching across order number and the name or email of the billing contact. When entering, separate multiple search terms with a space character.
	* @param int $qLimit The maximum number of search results to return in the response. You can limit any range between 1-100.
	* @param string $responseFields Use this field to include those fields which are not included by default.
	* @param string $sortBy 
	* @param int $startIndex 
	* @return MozuClient
	*/
	public static function getOrdersClient($startIndex =  null, $pageSize =  null, $sortBy =  null, $filter =  null, $q =  null, $qLimit =  null, $responseFields =  null)
	{
		$url = OrderUrl::getOrdersUrl($filter, $pageSize, $q, $qLimit, $responseFields, $sortBy, $startIndex);
		$mozuClient = new MozuClient();
		$mozuClient->withResourceUrl($url);
		return $mozuClient;

	}
	
	/**
	* Retrieves the actions available to perform for an order based on its current status.
	*
	* @param string $orderId Unique identifier of the order.
	* @return MozuClient
	*/
	public static function getAvailableActionsClient($orderId)
	{
		$url = OrderUrl::getAvailableActionsUrl($orderId);
		$mozuClient = new MozuClient();
		$mozuClient->withResourceUrl($url);
		return $mozuClient;

	}
	
	/**
	* Retrieves an order for the purpose of splitting it into multiple taxable orders in order to fulfill the order in multiple locations.
	*
	* @param string $orderId Unique identifier of the order.
	* @return MozuClient
	*/
	public static function getTaxableOrdersClient($orderId)
	{
		$url = OrderUrl::getTaxableOrdersUrl($orderId);
		$mozuClient = new MozuClient();
		$mozuClient->withResourceUrl($url);
		return $mozuClient;

	}
	
	/**
	* Retrieves the details of an order specified by the order ID.
	*
	* @param bool $draft If true, retrieve the draft version of the order, which might include uncommitted changes to the order or its components.
	* @param string $orderId Unique identifier of the order.
	* @param string $responseFields Use this field to include those fields which are not included by default.
	* @return MozuClient
	*/
	public static function getOrderClient($orderId, $draft =  null, $responseFields =  null)
	{
		$url = OrderUrl::getOrderUrl($draft, $orderId, $responseFields);
		$mozuClient = new MozuClient();
		$mozuClient->withResourceUrl($url);
		return $mozuClient;

	}
	
	/**
	* Creates a new order from an existing cart when the customer chooses to proceed to checkout.
	*
	* @param string $cartId Identifier of the cart to delete.
	* @param string $responseFields Use this field to include those fields which are not included by default.
	* @return MozuClient
	*/
	public static function createOrderFromCartClient($cartId, $responseFields =  null)
	{
		$url = OrderUrl::createOrderFromCartUrl($cartId, $responseFields);
		$mozuClient = new MozuClient();
		$mozuClient->withResourceUrl($url);
		return $mozuClient;

	}
	
	/**
	* Creates a new order for no-cart quick-ordering scenarios.
	*
	* @param string $responseFields Use this field to include those fields which are not included by default.
	* @param Order $order Properties of an order, including its components.
	* @return MozuClient
	*/
	public static function createOrderClient($order, $responseFields =  null)
	{
		$url = OrderUrl::createOrderUrl($responseFields);
		$mozuClient = new MozuClient();
		$mozuClient->withResourceUrl($url)->withBody($order);
		return $mozuClient;

	}
	
	/**
	* Perform the specified action for an order. The actions you can perform depend on the current status of the order.
	*
	* @param string $orderId Unique identifier of the order.
	* @param string $responseFields Use this field to include those fields which are not included by default.
	* @param OrderAction $action The action to perform for the order.
	* @return MozuClient
	*/
	public static function performOrderActionClient($action, $orderId, $responseFields =  null)
	{
		$url = OrderUrl::performOrderActionUrl($orderId, $responseFields);
		$mozuClient = new MozuClient();
		$mozuClient->withResourceUrl($url)->withBody($action);
		return $mozuClient;

	}
	
	/**
	* commerce-orders Put ProcessDigitalWallet description DOCUMENT_HERE 
	*
	* @param string $digitalWalletType The type of digital wallet to be processed.
	* @param string $orderId Unique identifier of the order.
	* @param string $responseFields Filtering syntax appended to an API call to increase or decrease the amount of data returned inside a JSON object. This parameter should only be used to retrieve data. Attempting to update data using this parameter may cause data loss.
	* @param DigitalWallet $digitalWallet Mozu.CommerceRuntime.Contracts.Orders.DigitalWallet ApiType DOCUMENT_HERE 
	* @return MozuClient
	*/
	public static function processDigitalWalletClient($digitalWallet, $orderId, $digitalWalletType, $responseFields =  null)
	{
		$url = OrderUrl::processDigitalWalletUrl($digitalWalletType, $orderId, $responseFields);
		$mozuClient = new MozuClient();
		$mozuClient->withResourceUrl($url)->withBody($digitalWallet);
		return $mozuClient;

	}
	
	/**
	* Update the properties of a discount applied to an order.
	*
	* @param int $discountId discountId parameter description DOCUMENT_HERE 
	* @param string $orderId Unique identifier of the order.
	* @param string $responseFields Use this field to include those fields which are not included by default.
	* @param string $updateMode Specifies whether to update the original order, update the order in draft mode, or update the order in draft mode and then commit the changes to the original. Draft mode enables users to make incremental order changes before committing the changes to the original order. Valid values are "ApplyToOriginal," "ApplyToDraft," or "ApplyAndCommit."
	* @param string $version System-supplied integer that represents the current version of the order, which prevents users from unintentionally overriding changes to the order. When a user performs an operation for a defined order, the system validates that the version of the updated order matches the version of the order on the server. After the operation completes successfully, the system increments the version number by one.
	* @param AppliedDiscount $discount Properties of all applied discounts for an associated cart, order, or product. 
	* @return MozuClient
	*/
	public static function updateOrderDiscountClient($discount, $orderId, $discountId, $updateMode =  null, $version =  null, $responseFields =  null)
	{
		$url = OrderUrl::updateOrderDiscountUrl($discountId, $orderId, $responseFields, $updateMode, $version);
		$mozuClient = new MozuClient();
		$mozuClient->withResourceUrl($url)->withBody($discount);
		return $mozuClient;

	}
	
	/**
	* Deletes the current draft version of the order, which also deletes any uncommitted changes made to the order in draft mode.
	*
	* @param string $orderId Unique identifier of the order.
	* @param string $version Determines whether or not to check versioning of items for concurrency purposes.
	*/
	public static function deleteOrderDraftClient($orderId, $version =  null)
	{
		$url = OrderUrl::deleteOrderDraftUrl($orderId, $version);
		$mozuClient = new MozuClient();
		$mozuClient->withResourceUrl($url);
		return $mozuClient;

	}
	
	/**
	* commerce-orders Put ResendOrderConfirmationEmail description DOCUMENT_HERE 
	*
	* @param string $orderId Unique identifier of the order.
	* @param OrderAction $action The action to perform for the order.
	*/
	public static function resendOrderConfirmationEmailClient($action, $orderId)
	{
		$url = OrderUrl::resendOrderConfirmationEmailUrl($orderId);
		$mozuClient = new MozuClient();
		$mozuClient->withResourceUrl($url)->withBody($action);
		return $mozuClient;

	}
	
	/**
	* Changes the pricelist associated with an order. The desired price list code should be specified on the ApiContext.
	*
	* @param string $orderId Unique identifier of the order.
	* @param string $responseFields Filtering syntax appended to an API call to increase or decrease the amount of data returned inside a JSON object. This parameter should only be used to retrieve data. Attempting to update data using this parameter may cause data loss.
	* @param string $updateMode Specifies whether to update the original order, update the order in draft mode, or update the order in draft mode and then commit the changes to the original. Draft mode enables users to make incremental order changes before committing the changes to the original order. Valid values are "ApplyToOriginal," "ApplyToDraft," or "ApplyAndCommit."
	* @param string $version Determines whether or not to check versioning of items for concurrency purposes.
	* @param string $priceListCode The unique price list code.
	* @return MozuClient
	*/
	public static function changeOrderPriceListClient($priceListCode, $orderId, $updateMode =  null, $version =  null, $responseFields =  null)
	{
		$url = OrderUrl::changeOrderPriceListUrl($orderId, $responseFields, $updateMode, $version);
		$mozuClient = new MozuClient();
		$mozuClient->withResourceUrl($url)->withBody($priceListCode);
		return $mozuClient;

	}
	
	/**
	* Updates the user ID of the shopper who placed the order to the current user.
	*
	* @param string $orderId Unique identifier of the order.
	* @param string $responseFields Use this field to include those fields which are not included by default.
	* @return MozuClient
	*/
	public static function changeOrderUserIdClient($orderId, $responseFields =  null)
	{
		$url = OrderUrl::changeOrderUserIdUrl($orderId, $responseFields);
		$mozuClient = new MozuClient();
		$mozuClient->withResourceUrl($url);
		return $mozuClient;

	}
	
	/**
	* Updates the specified order when additional order information, such as shipping or billing information, is modified during the checkout process.
	*
	* @param string $orderId Unique identifier of the order.
	* @param string $responseFields Use this field to include those fields which are not included by default.
	* @param string $updateMode Specifies whether to update the original order, update the order in draft mode, or update the order in draft mode and then commit the changes to the original. Draft mode enables users to make incremental order changes before committing the changes to the original order. Valid values are "ApplyToOriginal," "ApplyToDraft," or "ApplyAndCommit."
	* @param string $version System-supplied integer that represents the current version of the order, which prevents users from unintentionally overriding changes to the order. When a user performs an operation for a defined order, the system validates that the version of the updated order matches the version of the order on the server. After the operation completes successfully, the system increments the version number by one.
	* @param Order $order Properties of an order, including its components.
	* @return MozuClient
	*/
	public static function updateOrderClient($order, $orderId, $updateMode =  null, $version =  null, $responseFields =  null)
	{
		$url = OrderUrl::updateOrderUrl($orderId, $responseFields, $updateMode, $version);
		$mozuClient = new MozuClient();
		$mozuClient->withResourceUrl($url)->withBody($order);
		return $mozuClient;

	}
	
	
}

?>

