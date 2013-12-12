<?php

/*
* <auto-generated>
*     This code was generated by a tool.     
*
*     Changes to this file may cause incorrect behavior and will be lost if
*     the code is regenerated.
* </auto-generated>
*/


namespace Mozu\Api\Urls\Commerce\Settings\General;

use Mozu\Api\MozuUrl;
use Mozu\Api\UrlLocation;

class TaxableTerritoryUrl  {

	/**
		* Get Resource Url for GetTaxableTerritories
		* @return string Resource Url
	*/
	public static function getTaxableTerritoriesUrl()
	{
		$url = "/api/commerce/settings/general/taxableterritories";
		$mozuUrl = new MozuUrl($url, UrlLocation::TENANT_POD,"GET", false) ;
		return $mozuUrl;
	}
	
	/**
		* Get Resource Url for AddTaxableTerritory
		* @return string Resource Url
	*/
	public static function addTaxableTerritoryUrl()
	{
		$url = "/api/commerce/settings/general/taxableterritories";
		$mozuUrl = new MozuUrl($url, UrlLocation::TENANT_POD,"POST", false) ;
		return $mozuUrl;
	}
	
	/**
		* Get Resource Url for UpdateTaxableTerritories
		* @return string Resource Url
	*/
	public static function updateTaxableTerritoriesUrl()
	{
		$url = "/api/commerce/settings/general/taxableterritories";
		$mozuUrl = new MozuUrl($url, UrlLocation::TENANT_POD,"PUT", false) ;
		return $mozuUrl;
	}
	
}

?>
