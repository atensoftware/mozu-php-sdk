<?php


/**
* <auto-generated>
*     This code was generated by Codezu.     
*
*     Changes to this file may cause incorrect behavior and will be lost if
*     the code is regenerated.
* </auto-generated>
*/

namespace Mozu\Api\Clients\Platform;

use Mozu\Api\MozuClient;
use Mozu\Api\Urls\Platform\TenantExtensionsUrl;


/**
* Use the Extensions resource to manage Arc.js configuration settings. These are the same settings you can configure through  in the Action Management JSON Editor.
*/
class TenantExtensionsClient {

	/**
	* Retrieves the Arc.js configuration settings for a site.
	*
	* @param string $responseFields Filtering syntax appended to an API call to increase or decrease the amount of data returned inside a JSON object. This parameter should only be used to retrieve data. Attempting to update data using this parameter may cause data loss.
	* @return MozuClient
	*/
	public static function getExtensionsClient($responseFields =  null)
	{
		$url = TenantExtensionsUrl::getExtensionsUrl($responseFields);
		$mozuClient = new MozuClient();
		$mozuClient->withResourceUrl($url);
		return $mozuClient;

	}
	
	/**
	* Updates the Arc.js configuration settings for a site.
	*
	* @param string $responseFields Filtering syntax appended to an API call to increase or decrease the amount of data returned inside a JSON object. This parameter should only be used to retrieve data. Attempting to update data using this parameter may cause data loss.
	* @param TenantExtensions $extensions The updated details of the Arc.js configuration settings.
	* @return MozuClient
	*/
	public static function updateExtensionsClient($extensions, $responseFields =  null)
	{
		$url = TenantExtensionsUrl::updateExtensionsUrl($responseFields);
		$mozuClient = new MozuClient();
		$mozuClient->withResourceUrl($url)->withBody($extensions);
		return $mozuClient;

	}
	
	
}

?>

