<?php

/*
* <auto-generated>
*     This code was generated by a Codezu.     
*
*     Changes to this file may cause incorrect behavior and will be lost if
*     the code is regenerated.
* </auto-generated>
*/


namespace Mozu\Api\Urls\Commerce\Catalog\Admin\Products;

use Mozu\Api\MozuUrl;
use Mozu\Api\UrlLocation;

class ProductPropertyUrl  {

	/**
		* Get Resource Url for GetProperties
		* @param string $productCode The unique, user-defined product code of a product, used throughout  to reference and associate to a product.
		* @return string Resource Url
	*/
	public static function getPropertiesUrl($productCode)
	{
		$url = "/api/commerce/catalog/admin/products/{productCode}/Properties";
		$mozuUrl = new MozuUrl($url, UrlLocation::TENANT_POD,"GET", false) ;
		$url = $mozuUrl->formatUrl("productCode", $productCode);
		return $mozuUrl;
	}
	
	/**
		* Get Resource Url for GetPropertyValueLocalizedContents
		* @param string $attributeFQN Fully qualified name for an attribute.
		* @param string $productCode The unique, user-defined product code of a product, used throughout  to reference and associate to a product.
		* @param string $value The value string to create.
		* @return string Resource Url
	*/
	public static function getPropertyValueLocalizedContentsUrl($attributeFQN, $productCode, $value)
	{
		$url = "/api/commerce/catalog/admin/products/{productCode}/Properties/{attributeFQN}/values/{value}/LocalizedContent";
		$mozuUrl = new MozuUrl($url, UrlLocation::TENANT_POD,"GET", false) ;
		$url = $mozuUrl->formatUrl("attributeFQN", $attributeFQN);
		$url = $mozuUrl->formatUrl("productCode", $productCode);
		$url = $mozuUrl->formatUrl("value", $value);
		return $mozuUrl;
	}
	
	/**
		* Get Resource Url for GetPropertyValueLocalizedContent
		* @param string $attributeFQN Fully qualified name for an attribute.
		* @param string $localeCode Language used for the entity. Currently, only "en-US" is supported.
		* @param string $productCode The unique, user-defined product code of a product, used throughout  to reference and associate to a product.
		* @param string $responseFields Use this field to include those fields which are not included by default.
		* @param string $value The value string to create.
		* @return string Resource Url
	*/
	public static function getPropertyValueLocalizedContentUrl($attributeFQN, $localeCode, $productCode, $responseFields, $value)
	{
		$url = "/api/commerce/catalog/admin/products/{productCode}/Properties/{attributeFQN}/values/{value}/LocalizedContent/{localeCode}?responseFields={responseFields}";
		$mozuUrl = new MozuUrl($url, UrlLocation::TENANT_POD,"GET", false) ;
		$url = $mozuUrl->formatUrl("attributeFQN", $attributeFQN);
		$url = $mozuUrl->formatUrl("localeCode", $localeCode);
		$url = $mozuUrl->formatUrl("productCode", $productCode);
		$url = $mozuUrl->formatUrl("responseFields", $responseFields);
		$url = $mozuUrl->formatUrl("value", $value);
		return $mozuUrl;
	}
	
	/**
		* Get Resource Url for GetProperty
		* @param string $attributeFQN The fully qualified name of the attribute, which is a user defined attribute identifier.
		* @param string $productCode Merchant-created code that uniquely identifies the product such as a SKU or item number. Once created, the product code is read-only.
		* @param string $responseFields Use this field to include those fields which are not included by default.
		* @return string Resource Url
	*/
	public static function getPropertyUrl($attributeFQN, $productCode, $responseFields)
	{
		$url = "/api/commerce/catalog/admin/products/{productCode}/Properties/{attributeFQN}?responseFields={responseFields}";
		$mozuUrl = new MozuUrl($url, UrlLocation::TENANT_POD,"GET", false) ;
		$url = $mozuUrl->formatUrl("attributeFQN", $attributeFQN);
		$url = $mozuUrl->formatUrl("productCode", $productCode);
		$url = $mozuUrl->formatUrl("responseFields", $responseFields);
		return $mozuUrl;
	}
	
	/**
		* Get Resource Url for AddPropertyValueLocalizedContent
		* @param string $attributeFQN Fully qualified name for an attribute.
		* @param string $productCode The unique, user-defined product code of a product, used throughout  to reference and associate to a product.
		* @param string $responseFields Use this field to include those fields which are not included by default.
		* @param string $value The value string to create.
		* @return string Resource Url
	*/
	public static function addPropertyValueLocalizedContentUrl($attributeFQN, $productCode, $responseFields, $value)
	{
		$url = "/api/commerce/catalog/admin/products/{productCode}/Properties/{attributeFQN}/values/{value}/LocalizedContent?responseFields={responseFields}";
		$mozuUrl = new MozuUrl($url, UrlLocation::TENANT_POD,"POST", false) ;
		$url = $mozuUrl->formatUrl("attributeFQN", $attributeFQN);
		$url = $mozuUrl->formatUrl("productCode", $productCode);
		$url = $mozuUrl->formatUrl("responseFields", $responseFields);
		$url = $mozuUrl->formatUrl("value", $value);
		return $mozuUrl;
	}
	
	/**
		* Get Resource Url for AddProperty
		* @param string $productCode The unique, user-defined product code of a product, used throughout  to reference and associate to a product.
		* @param string $responseFields Use this field to include those fields which are not included by default.
		* @return string Resource Url
	*/
	public static function addPropertyUrl($productCode, $responseFields)
	{
		$url = "/api/commerce/catalog/admin/products/{productCode}/Properties?responseFields={responseFields}";
		$mozuUrl = new MozuUrl($url, UrlLocation::TENANT_POD,"POST", false) ;
		$url = $mozuUrl->formatUrl("productCode", $productCode);
		$url = $mozuUrl->formatUrl("responseFields", $responseFields);
		return $mozuUrl;
	}
	
	/**
		* Get Resource Url for UpdatePropertyValueLocalizedContents
		* @param string $attributeFQN Fully qualified name for an attribute.
		* @param string $productCode The unique, user-defined product code of a product, used throughout  to reference and associate to a product.
		* @param string $value The value string to create.
		* @return string Resource Url
	*/
	public static function updatePropertyValueLocalizedContentsUrl($attributeFQN, $productCode, $value)
	{
		$url = "/api/commerce/catalog/admin/products/{productCode}/Properties/{attributeFQN}/values/{value}/LocalizedContent";
		$mozuUrl = new MozuUrl($url, UrlLocation::TENANT_POD,"PUT", false) ;
		$url = $mozuUrl->formatUrl("attributeFQN", $attributeFQN);
		$url = $mozuUrl->formatUrl("productCode", $productCode);
		$url = $mozuUrl->formatUrl("value", $value);
		return $mozuUrl;
	}
	
	/**
		* Get Resource Url for UpdatePropertyValueLocalizedContent
		* @param string $attributeFQN Fully qualified name for an attribute.
		* @param string $localeCode Language used for the entity. Currently, only "en-US" is supported.
		* @param string $productCode The unique, user-defined product code of a product, used throughout  to reference and associate to a product.
		* @param string $responseFields Use this field to include those fields which are not included by default.
		* @param string $value The value string to create.
		* @return string Resource Url
	*/
	public static function updatePropertyValueLocalizedContentUrl($attributeFQN, $localeCode, $productCode, $responseFields, $value)
	{
		$url = "/api/commerce/catalog/admin/products/{productCode}/Properties/{attributeFQN}/values/{value}/LocalizedContent/{localeCode}?responseFields={responseFields}";
		$mozuUrl = new MozuUrl($url, UrlLocation::TENANT_POD,"PUT", false) ;
		$url = $mozuUrl->formatUrl("attributeFQN", $attributeFQN);
		$url = $mozuUrl->formatUrl("localeCode", $localeCode);
		$url = $mozuUrl->formatUrl("productCode", $productCode);
		$url = $mozuUrl->formatUrl("responseFields", $responseFields);
		$url = $mozuUrl->formatUrl("value", $value);
		return $mozuUrl;
	}
	
	/**
		* Get Resource Url for UpdateProperty
		* @param string $attributeFQN The fully qualified name of the attribute, which is a user defined attribute identifier.
		* @param string $productCode The unique, user-defined product code of a product, used throughout  to reference and associate to a product.
		* @param string $responseFields Use this field to include those fields which are not included by default.
		* @return string Resource Url
	*/
	public static function updatePropertyUrl($attributeFQN, $productCode, $responseFields)
	{
		$url = "/api/commerce/catalog/admin/products/{productCode}/Properties/{attributeFQN}?responseFields={responseFields}";
		$mozuUrl = new MozuUrl($url, UrlLocation::TENANT_POD,"PUT", false) ;
		$url = $mozuUrl->formatUrl("attributeFQN", $attributeFQN);
		$url = $mozuUrl->formatUrl("productCode", $productCode);
		$url = $mozuUrl->formatUrl("responseFields", $responseFields);
		return $mozuUrl;
	}
	
	/**
		* Get Resource Url for DeleteProperty
		* @param string $attributeFQN The fully qualified name of the attribute, which is a user defined attribute identifier.
		* @param string $productCode The unique, user-defined product code of a product, used throughout  to reference and associate to a product.
		* @return string Resource Url
	*/
	public static function deletePropertyUrl($attributeFQN, $productCode)
	{
		$url = "/api/commerce/catalog/admin/products/{productCode}/Properties/{attributeFQN}";
		$mozuUrl = new MozuUrl($url, UrlLocation::TENANT_POD,"DELETE", false) ;
		$url = $mozuUrl->formatUrl("attributeFQN", $attributeFQN);
		$url = $mozuUrl->formatUrl("productCode", $productCode);
		return $mozuUrl;
	}
	
	/**
		* Get Resource Url for DeletePropertyValueLocalizedContent
		* @param string $attributeFQN Fully qualified name for an attribute.
		* @param string $localeCode Language used for the entity. Currently, only "en-US" is supported.
		* @param string $productCode The unique, user-defined product code of a product, used throughout  to reference and associate to a product.
		* @param string $value The value string to create.
		* @return string Resource Url
	*/
	public static function deletePropertyValueLocalizedContentUrl($attributeFQN, $localeCode, $productCode, $value)
	{
		$url = "/api/commerce/catalog/admin/products/{productCode}/Properties/{attributeFQN}/values/{value}/LocalizedContent/{localeCode}";
		$mozuUrl = new MozuUrl($url, UrlLocation::TENANT_POD,"DELETE", false) ;
		$url = $mozuUrl->formatUrl("attributeFQN", $attributeFQN);
		$url = $mozuUrl->formatUrl("localeCode", $localeCode);
		$url = $mozuUrl->formatUrl("productCode", $productCode);
		$url = $mozuUrl->formatUrl("value", $value);
		return $mozuUrl;
	}
	
}

?>

