<?php

/*
* <auto-generated>
*     This code was generated by a Codezu.     
*
*     Changes to this file may cause incorrect behavior and will be lost if
*     the code is regenerated.
* </auto-generated>
*/


namespace Mozu\Api\Urls\Commerce\Admin;

use Mozu\Api\MozuUrl;
use Mozu\Api\UrlLocation;

class LocationTypeUrl  {

	/**
		* Get Resource Url for GetLocationTypes
		* @return string Resource Url
	*/
	public static function getLocationTypesUrl()
	{
		$url = "/api/commerce/admin/locationtypes/";
		$mozuUrl = new MozuUrl($url, UrlLocation::TENANT_POD,"GET", false) ;
		return $mozuUrl;
	}
	
	/**
		* Get Resource Url for GetLocationType
		* @param string $locationTypeCode The user-defined code that identifies the location type.
		* @param string $responseFields Use this field to include those fields which are not included by default.
		* @return string Resource Url
	*/
	public static function getLocationTypeUrl($locationTypeCode, $responseFields)
	{
		$url = "/api/commerce/admin/locationtypes/{locationTypeCode}?responseFields={responseFields}";
		$mozuUrl = new MozuUrl($url, UrlLocation::TENANT_POD,"GET", false) ;
		$url = $mozuUrl->formatUrl("locationTypeCode", $locationTypeCode);
		$url = $mozuUrl->formatUrl("responseFields", $responseFields);
		return $mozuUrl;
	}
	
	/**
		* Get Resource Url for AddLocationType
		* @param string $responseFields Use this field to include those fields which are not included by default.
		* @return string Resource Url
	*/
	public static function addLocationTypeUrl($responseFields)
	{
		$url = "/api/commerce/admin/locationtypes/?responseFields={responseFields}";
		$mozuUrl = new MozuUrl($url, UrlLocation::TENANT_POD,"POST", false) ;
		$url = $mozuUrl->formatUrl("responseFields", $responseFields);
		return $mozuUrl;
	}
	
	/**
		* Get Resource Url for UpdateLocationType
		* @param string $locationTypeCode The user-defined code that identifies the location type.
		* @param string $responseFields Use this field to include those fields which are not included by default.
		* @return string Resource Url
	*/
	public static function updateLocationTypeUrl($locationTypeCode, $responseFields)
	{
		$url = "/api/commerce/admin/locationtypes/{locationTypeCode}?responseFields={responseFields}";
		$mozuUrl = new MozuUrl($url, UrlLocation::TENANT_POD,"PUT", false) ;
		$url = $mozuUrl->formatUrl("locationTypeCode", $locationTypeCode);
		$url = $mozuUrl->formatUrl("responseFields", $responseFields);
		return $mozuUrl;
	}
	
	/**
		* Get Resource Url for DeleteLocationType
		* @param string $locationTypeCode The user-defined code that identifies the location type.
		* @return string Resource Url
	*/
	public static function deleteLocationTypeUrl($locationTypeCode)
	{
		$url = "/api/commerce/admin/locationtypes/{locationTypeCode}";
		$mozuUrl = new MozuUrl($url, UrlLocation::TENANT_POD,"DELETE", false) ;
		$url = $mozuUrl->formatUrl("locationTypeCode", $locationTypeCode);
		return $mozuUrl;
	}
	
}

?>

