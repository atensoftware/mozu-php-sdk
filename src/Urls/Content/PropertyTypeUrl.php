<?php

/*
* <auto-generated>
*     This code was generated by a Codezu.     
*
*     Changes to this file may cause incorrect behavior and will be lost if
*     the code is regenerated.
* </auto-generated>
*/


namespace Mozu\Api\Urls\Content;

use Mozu\Api\MozuUrl;
use Mozu\Api\UrlLocation;

class PropertyTypeUrl  {

	/**
		* Get Resource Url for GetPropertyTypes
		* @param int $pageSize The number of results to display on each page when creating paged results from a query. The maximum value is 200.
		* @param string $responseFields Use this field to include those fields which are not included by default.
		* @param int $startIndex When creating paged results from a query, this value indicates the zero-based offset in the complete result set where the returned entities begin. For example, with a PageSize of 25, to get the 51st through the 75th items, use startIndex=3.
		* @return string Resource Url
	*/
	public static function getPropertyTypesUrl($pageSize, $responseFields, $startIndex)
	{
		$url = "/api/content/propertytypes/?pageSize={pageSize}&startIndex={startIndex}&responseFields={responseFields}";
		$mozuUrl = new MozuUrl($url, UrlLocation::TENANT_POD,"GET", false) ;
		$url = $mozuUrl->formatUrl("pageSize", $pageSize);
		$url = $mozuUrl->formatUrl("responseFields", $responseFields);
		$url = $mozuUrl->formatUrl("startIndex", $startIndex);
		return $mozuUrl;
	}
	
	/**
		* Get Resource Url for GetPropertyType
		* @param string $propertyTypeName The name of the property type.
		* @param string $responseFields Use this field to include those fields which are not included by default.
		* @return string Resource Url
	*/
	public static function getPropertyTypeUrl($propertyTypeName, $responseFields)
	{
		$url = "/api/content/propertytypes/{propertyTypeName}?responseFields={responseFields}";
		$mozuUrl = new MozuUrl($url, UrlLocation::TENANT_POD,"GET", false) ;
		$url = $mozuUrl->formatUrl("propertyTypeName", $propertyTypeName);
		$url = $mozuUrl->formatUrl("responseFields", $responseFields);
		return $mozuUrl;
	}
	
	/**
		* Get Resource Url for CreatePropertyType
		* @param string $responseFields Use this field to include those fields which are not included by default.
		* @return string Resource Url
	*/
	public static function createPropertyTypeUrl($responseFields)
	{
		$url = "/api/content/propertytypes/?responseFields={responseFields}";
		$mozuUrl = new MozuUrl($url, UrlLocation::TENANT_POD,"POST", false) ;
		$url = $mozuUrl->formatUrl("responseFields", $responseFields);
		return $mozuUrl;
	}
	
	/**
		* Get Resource Url for UpdatePropertyType
		* @param string $propertyTypeName The name of the property type.
		* @param string $responseFields Use this field to include those fields which are not included by default.
		* @return string Resource Url
	*/
	public static function updatePropertyTypeUrl($propertyTypeName, $responseFields)
	{
		$url = "/api/content/propertytypes/{propertyTypeName}?responseFields={responseFields}";
		$mozuUrl = new MozuUrl($url, UrlLocation::TENANT_POD,"PUT", false) ;
		$url = $mozuUrl->formatUrl("propertyTypeName", $propertyTypeName);
		$url = $mozuUrl->formatUrl("responseFields", $responseFields);
		return $mozuUrl;
	}
	
	/**
		* Get Resource Url for DeletePropertyType
		* @param string $propertyTypeName The name of the property type.
		* @return string Resource Url
	*/
	public static function deletePropertyTypeUrl($propertyTypeName)
	{
		$url = "/api/content/propertytypes/{propertyTypeName}";
		$mozuUrl = new MozuUrl($url, UrlLocation::TENANT_POD,"DELETE", false) ;
		$url = $mozuUrl->formatUrl("propertyTypeName", $propertyTypeName);
		return $mozuUrl;
	}
	
}

?>

