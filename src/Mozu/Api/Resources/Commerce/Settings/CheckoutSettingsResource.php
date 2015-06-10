<?php


/**
* <auto-generated>
*     This code was generated by Codezu.     
*
*     Changes to this file may cause incorrect behavior and will be lost if
*     the code is regenerated.
* </auto-generated>
*/

namespace Mozu\Api\Resources\Commerce\Settings;

use Mozu\Api\Clients\Commerce\Settings\CheckoutSettingsClient;
use Mozu\Api\ApiContext;

/**
* Use the Checkout Settings resource to specify the site-wide settings that define checkout and order processing behavior. This resource includes subresources for payment settings, customer checkout settings, and order processing settings.
*/
class CheckoutSettingsResource {

	private $apiContext;
		
	public function __construct(ApiContext $apiContext) 
	{
		$this->apiContext = $apiContext;
	}

	



	/**
	* Retrieves all checkout settings defined for the site including payment settings (payment gateway ID and credentials), shopper checkout settings (login requirement or guest mode and custom attributes), and order processing settings (when payment is authorized and captured plus any custom attributes).
	*
	* @param string $responseFields Use this field to include those fields which are not included by default.
	* @return CheckoutSettings 
	*/
	public function getCheckoutSettings($responseFields =  null)
	{
		$mozuClient = CheckoutSettingsClient::getCheckoutSettingsClient($responseFields);
		$mozuClient = $mozuClient->withContext($this->apiContext);
		$mozuClient->execute();
		return $mozuClient->getResult();

	}
	
	
}

?>

