<?php

/*
* <auto-generated>
*     This code was generated by a Codezu.     
*
*     Changes to this file may cause incorrect behavior and will be lost if
*     the code is regenerated.
* </auto-generated>
*/


namespace Mozu\Api\Urls\Commerce\Returns;

use Mozu\Api\MozuUrl;
use Mozu\Api\UrlLocation;

class PackageUrl  {

	/**
		* Get Resource Url for GetPackageLabel
		* @param string $packageId Unique identifier of the package for which to retrieve the label.
		* @param bool $returnAsBase64Png Specifies whether to return the RMA label image as Base64-encoded PNG image instead of as a byte array encoded in the original image format. The default is .
		* @param string $returnId Unique identifier of the return whose items you want to get.
		* @return string Resource Url
	*/
	public static function getPackageLabelUrl($packageId, $returnAsBase64Png, $returnId)
	{
		$url = "/api/commerce/returns/{returnId}/packages/{packageId}/label?returnAsBase64Png={returnAsBase64Png}";
		$mozuUrl = new MozuUrl($url, UrlLocation::TENANT_POD,"GET", false) ;
		$url = $mozuUrl->formatUrl("packageId", $packageId);
		$url = $mozuUrl->formatUrl("returnAsBase64Png", $returnAsBase64Png);
		$url = $mozuUrl->formatUrl("returnId", $returnId);
		return $mozuUrl;
	}
	
	/**
		* Get Resource Url for GetPackage
		* @param string $packageId Unique identifier of the package for which to retrieve the label.
		* @param string $responseFields Use this field to include those fields which are not included by default.
		* @param string $returnId Unique identifier of the return whose items you want to get.
		* @return string Resource Url
	*/
	public static function getPackageUrl($packageId, $responseFields, $returnId)
	{
		$url = "/api/commerce/returns/{returnId}/packages/{packageId}?responseFields={responseFields}";
		$mozuUrl = new MozuUrl($url, UrlLocation::TENANT_POD,"GET", false) ;
		$url = $mozuUrl->formatUrl("packageId", $packageId);
		$url = $mozuUrl->formatUrl("responseFields", $responseFields);
		$url = $mozuUrl->formatUrl("returnId", $returnId);
		return $mozuUrl;
	}
	
	/**
		* Get Resource Url for CreatePackage
		* @param string $responseFields Use this field to include those fields which are not included by default.
		* @param string $returnId Unique identifier of the return whose items you want to get.
		* @return string Resource Url
	*/
	public static function createPackageUrl($responseFields, $returnId)
	{
		$url = "/api/commerce/returns/{returnId}/packages?responseFields={responseFields}";
		$mozuUrl = new MozuUrl($url, UrlLocation::TENANT_POD,"POST", false) ;
		$url = $mozuUrl->formatUrl("responseFields", $responseFields);
		$url = $mozuUrl->formatUrl("returnId", $returnId);
		return $mozuUrl;
	}
	
	/**
		* Get Resource Url for UpdatePackage
		* @param string $packageId Unique identifier of the package for which to retrieve the label.
		* @param string $responseFields Use this field to include those fields which are not included by default.
		* @param string $returnId Unique identifier of the return whose items you want to get.
		* @return string Resource Url
	*/
	public static function updatePackageUrl($packageId, $responseFields, $returnId)
	{
		$url = "/api/commerce/returns/{returnId}/packages/{packageId}?responseFields={responseFields}";
		$mozuUrl = new MozuUrl($url, UrlLocation::TENANT_POD,"PUT", false) ;
		$url = $mozuUrl->formatUrl("packageId", $packageId);
		$url = $mozuUrl->formatUrl("responseFields", $responseFields);
		$url = $mozuUrl->formatUrl("returnId", $returnId);
		return $mozuUrl;
	}
	
	/**
		* Get Resource Url for DeletePackage
		* @param string $packageId Unique identifier of the package for which to retrieve the label.
		* @param string $returnId Unique identifier of the return whose items you want to get.
		* @return string Resource Url
	*/
	public static function deletePackageUrl($packageId, $returnId)
	{
		$url = "/api/commerce/returns/{returnId}/packages/{packageId}";
		$mozuUrl = new MozuUrl($url, UrlLocation::TENANT_POD,"DELETE", false) ;
		$url = $mozuUrl->formatUrl("packageId", $packageId);
		$url = $mozuUrl->formatUrl("returnId", $returnId);
		return $mozuUrl;
	}
	
}

?>

