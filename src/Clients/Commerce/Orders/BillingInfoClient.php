<?php


/**
* <auto-generated>
*     This code was generated by Codezu.     
*
*     Changes to this file may cause incorrect behavior and will be lost if
*     the code is regenerated.
* </auto-generated>
*/

namespace Mozu\Api\Clients\Commerce\Orders;

use Mozu\Api\MozuClient;
use Mozu\Api\Urls\Commerce\Orders\BillingInfoUrl;


/**
* Use the Billing Info subresource to manage the billing information stored for an order.
*/
class BillingInfoClient {

	/**
	* Retrieves the billing information associated with an order.
	*
	* @param bool $draft If true, retrieve the draft version of the order, which might include uncommitted changes to the order or its components.
	* @param string $orderId Unique identifier of the order.
	* @param string $responseFields Use this field to include those fields which are not included by default.
	* @return MozuClient
	*/
	public static function getBillingInfoClient($orderId, $draft =  null, $responseFields =  null)
	{
		$url = BillingInfoUrl::getBillingInfoUrl($draft, $orderId, $responseFields);
		$mozuClient = new MozuClient();
		$mozuClient->withResourceUrl($url);
		return $mozuClient;

	}
	
	/**
	* Updates the billing information supplied for an order.
	*
	* @param string $orderId Unique identifier of the order.
	* @param string $responseFields Use this field to include those fields which are not included by default.
	* @param string $updateMode Specifies whether to update the original order, update the order in draft mode, or update the order in draft mode and then commit the changes to the original. Draft mode enables users to make incremental order changes before committing the changes to the original order. Valid values are "ApplyToOriginal," "ApplyToDraft," or "ApplyAndCommit."
	* @param string $version System-supplied integer that represents the current version of the order, which prevents users from unintentionally overriding changes to the order. When a user performs an operation for a defined order, the system validates that the version of the updated order matches the version of the order on the server. After the operation completes successfully, the system increments the version number by one.
	* @param BillingInfo $billingInfo Properties of the billing information entered for an order during checkout.
	* @return MozuClient
	*/
	public static function setBillingInfoClient($billingInfo, $orderId, $updateMode =  null, $version =  null, $responseFields =  null)
	{
		$url = BillingInfoUrl::setBillingInfoUrl($orderId, $responseFields, $updateMode, $version);
		$mozuClient = new MozuClient();
		$mozuClient->withResourceUrl($url)->withBody($billingInfo);
		return $mozuClient;

	}
	
	
}

?>

