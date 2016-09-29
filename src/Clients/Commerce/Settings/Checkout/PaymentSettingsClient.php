<?php


/**
* <auto-generated>
*     This code was generated by Codezu.     
*
*     Changes to this file may cause incorrect behavior and will be lost if
*     the code is regenerated.
* </auto-generated>
*/

namespace Mozu\Api\Clients\Commerce\Settings\Checkout;

use Mozu\Api\MozuClient;
use Mozu\Api\Urls\Commerce\Settings\Checkout\PaymentSettingsUrl;


/**
* Use the Payment Settings resource to specify settings when creating payments for order checkout on the site.
*/
class PaymentSettingsClient {

	/**
	* Retrieves the schema and definition along with the actual instance values of the third-party payment service workflow configured for the corresponding fully qualified name.
	*
	* @param string $fullyQualifiedName Fully qualified name of the attribute for the third-party payment workflow.
	* @param string $responseFields Filtering syntax appended to an API call to increase or decrease the amount of data returned inside a JSON object. This parameter should only be used to retrieve data. Attempting to update data using this parameter may cause data loss.
	* @return MozuClient
	*/
	public static function getThirdPartyPaymentWorkflowWithValuesClient($fullyQualifiedName, $responseFields =  null)
	{
		$url = PaymentSettingsUrl::getThirdPartyPaymentWorkflowWithValuesUrl($fullyQualifiedName, $responseFields);
		$mozuClient = new MozuClient();
		$mozuClient->withResourceUrl($url);
		return $mozuClient;

	}
	
	/**
	* Retrieves the schema and definition of all third-party payment service workflows configured for the site.
	*
	* @return MozuClient
	*/
	public static function getThirdPartyPaymentWorkflowsClient()
	{
		$url = PaymentSettingsUrl::getThirdPartyPaymentWorkflowsUrl();
		$mozuClient = new MozuClient();
		$mozuClient->withResourceUrl($url);
		return $mozuClient;

	}
	
	/**
	* Adds a third-party payment workflow to the site. A third-party payment workflow is a definition of a process by which a third-party payment provider (such as Amazon Payments or PayPal Express) interacts with the Mozu platform.
	*
	* @param ExternalPaymentWorkflowDefinition $definition Properties of an external payment processing workflow defined for the site. At this time, only PayPal Express is supported.
	*/
	public static function addThirdPartyPaymentWorkflowClient($definition)
	{
		$url = PaymentSettingsUrl::addThirdPartyPaymentWorkflowUrl();
		$mozuClient = new MozuClient();
		$mozuClient->withResourceUrl($url)->withBody($definition);
		return $mozuClient;

	}
	
	/**
	* Deletes a third-party payment workflow. A third-party payment workflow is a definition of a process by which a third-party payment provider (such as Amazon Payments or PayPal Express) interacts with the Mozu platform. 
	*
	* @param string $fullyQualifiedName Fully qualified name of the attribute for the third-party payment workflow.
	*/
	public static function deleteThirdPartyPaymentWorkflowClient($fullyQualifiedName)
	{
		$url = PaymentSettingsUrl::deleteThirdPartyPaymentWorkflowUrl($fullyQualifiedName);
		$mozuClient = new MozuClient();
		$mozuClient->withResourceUrl($url);
		return $mozuClient;

	}
	
	
}

?>

