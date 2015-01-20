<?php


/**
* <auto-generated>
*     This code was generated by a Codezu.     
*
*     Changes to this file may cause incorrect behavior and will be lost if
*     the code is regenerated.
* </auto-generated>
*/

namespace Mozu\Api\Resources\Commerce\Settings;

use Mozu\Api\MozuClient;
use Mozu\Api\Clients\Commerce\Settings\SiteShippingSettingsClient;
use Mozu\Api\ApiContext;
use Mozu\Api\DataViewMode;
use Mozu\Api\Headers;

/**
* Use the shipping subresource to manage settings for the site shipping information, such as origin address information, carrier shipping methods, shipping rate providers, and regions available for shipping.
*/
class SiteShippingSettingsResource {

		private $apiContext;
	public function __construct(ApiContext $apiContext) 
	{
		$this->apiContext = $apiContext;
	}

	/**
	* Retrieves a list of the shipping settings configured for a site.
	*
	* @param string $responseFields Use this field to include those fields which are not included by default.
	* @return SiteShippingSettings 
	*/
	public function getSiteShippingSettings($responseFields =  null)
	{
		$mozuClient = SiteShippingSettingsClient::getSiteShippingSettingsClient($responseFields);
		$mozuClient = $mozuClient->withContext($this->apiContext);
		$mozuClient->execute();
		return $mozuClient->getResult();

	}
	
	
}

?>
