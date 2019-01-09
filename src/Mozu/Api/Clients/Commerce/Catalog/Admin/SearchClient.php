<?php


/**
* <auto-generated>
*     This code was generated by a Codezu.     
*
*     Changes to this file may cause incorrect behavior and will be lost if
*     the code is regenerated.
* </auto-generated>
*/

namespace Mozu\Api\Clients\Commerce\Catalog\Admin;

use Mozu\Api\MozuClient;
use Mozu\Api\Urls\Commerce\Catalog\Admin\SearchUrl;
use Mozu\Api\Headers;

use Mozu\Api\Contracts\ProductAdmin\SearchSettings;

/**
* 
*/
class SearchClient {

	/**
	* 
	*
	* @param string $responseFields 
	* @return MozuClient
	*/
	public static function getSettingsClient($responseFields =  null)
	{
		$url = SearchUrl::getSettingsUrl($responseFields);
		$mozuClient = new MozuClient();
		return $mozuClient->withResourceUrl($url);

	}
	
	/**
	* 
	*
	* @param string $responseFields 
	* @param SearchSettings $settings 
	* @return MozuClient
	*/
	public static function updateSettingsClient($settings, $responseFields =  null)
	{
		$url = SearchUrl::updateSettingsUrl($responseFields);
		$mozuClient = new MozuClient();
		return $mozuClient->withResourceUrl($url)->withBody($settings);

	}
	
	
}

?>
