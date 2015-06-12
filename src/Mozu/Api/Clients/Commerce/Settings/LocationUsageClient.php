<?php


/**
* <auto-generated>
*     This code was generated by Codezu.     
*
*     Changes to this file may cause incorrect behavior and will be lost if
*     the code is regenerated.
* </auto-generated>
*/

namespace Mozu\Api\Clients\Commerce\Settings;

use Mozu\Api\MozuClient;
use Mozu\Api\Urls\Commerce\Settings\LocationUsageUrl;


/**
* Use the Location Usages resource to define the locations and location types that interact with the specified site. The system creates three default location usage types for each site after provisioning a new tenant - one for direct ship (DS), one for in-store pickup (SP), and one for store finder (storeFinder). Each site can only use a single location for the direct ship location usage type, and the location must support the direct ship fulfillment type (DS). For the in-store pickup location usage type, each site can use one or more location types. The location service identifies all locations of the specified type that support the in-store pickup fulfillment type (SP). For the store finder location usage type, each site can use one or more location types. The location service identifies all locations of the type. Locations configured for the store finder type do not typically maintain inventory. You cannot create additional location usage types at this time.
*/
class LocationUsageClient {

	/**
	* Retrieves the configured site location usages for the location usage code specified in the request.
	*
	* @param string $responseFields Use this field to include those fields which are not included by default.
	* @return MozuClient
	*/
	public static function getLocationUsagesClient($responseFields =  null)
	{
		$url = LocationUsageUrl::getLocationUsagesUrl($responseFields);
		$mozuClient = new MozuClient();
		$mozuClient->withResourceUrl($url);
		return $mozuClient;

	}
	
	/**
	* Retrieves the location usages for the site specified in the request header.
	*
	* @param string $code User-defined code that uniqely identifies the channel group.
	* @param string $responseFields Use this field to include those fields which are not included by default.
	* @return MozuClient
	*/
	public static function getLocationUsageClient($code, $responseFields =  null)
	{
		$url = LocationUsageUrl::getLocationUsageUrl($code, $responseFields);
		$mozuClient = new MozuClient();
		$mozuClient->withResourceUrl($url);
		return $mozuClient;

	}
	
	/**
	* Updates the location usage for the site based on the location usage code specified in the request.
	*
	* @param string $code User-defined code that uniqely identifies the channel group.
	* @param string $responseFields Use this field to include those fields which are not included by default.
	* @param LocationUsage $usage Configuration properties of a location usage type for a specified site. The direct ship location usage type consists of a single location that represents location that supports direct ship (DS) fulfillment. The in-store pickup location usage type consists of a list of location types that represent locations that support in-store pickup (SP) fulfillment. The store finder location usage type consists of a list of location codes, location types, or both.
	* @return MozuClient
	*/
	public static function updateLocationUsageClient($usage, $code, $responseFields =  null)
	{
		$url = LocationUsageUrl::updateLocationUsageUrl($code, $responseFields);
		$mozuClient = new MozuClient();
		$mozuClient->withResourceUrl($url)->withBody($usage);
		return $mozuClient;

	}
	
	
}

?>

