<?php

/*
* <auto-generated>
*     This code was generated by a Codezu.     
*
*     Changes to this file may cause incorrect behavior and will be lost if
*     the code is regenerated.
* </auto-generated>
*/


namespace Mozu\Api\Urls\Commerce\Catalog\Storefront;

use Mozu\Api\MozuUrl;
use Mozu\Api\UrlLocation;

class CategoryUrl  {

	/**
		* Get Resource Url for GetCategories
		* @param string $filter A set of expressions that consist of a field, operator, and value and represent search parameter syntax when filtering results of a query. You can filter product category search results by any of its properties, including its position in the category hierarchy. Valid operators include equals (eq), does not equal (ne), greater than (gt), less than (lt), greater than or equal to (ge), less than or equal to (le), starts with (sw), or contains (cont). For example - "filter=IsDisplayed+eq+true"
		* @param int $pageSize The number of results to display on each page when creating paged results from a query. The maximum value is 200.
		* @param string $responseFields 
		* @param string $sortBy 
		* @param int $startIndex 
		* @return string Resource Url
	*/
	public static function getCategoriesUrl($filter, $pageSize, $responseFields, $sortBy, $startIndex)
	{
		$url = "/api/commerce/catalog/storefront/categories/?filter={filter}&startIndex={startIndex}&pageSize={pageSize}&sortBy={sortBy}&responseFields={responseFields}";
		$mozuUrl = new MozuUrl($url, UrlLocation::TENANT_POD,"GET", false);
		$mozuUrl->formatUrl("filter", $filter)
				->formatUrl("pageSize", $pageSize)
				->formatUrl("responseFields", $responseFields)
				->formatUrl("sortBy", $sortBy)
				->formatUrl("startIndex", $startIndex);

		return $mozuUrl;
	}
	
	/**
		* Get Resource Url for GetCategory
		* @param bool $allowInactive If true, allow inactive categories to be retrieved in the category list response. If false, the categories retrieved will not include ones marked inactive.
		* @param int $categoryId Unique identifier for the storefront container used to organize products.
		* @param string $responseFields 
		* @return string Resource Url
	*/
	public static function getCategoryUrl($allowInactive, $categoryId, $responseFields)
	{
		$url = "/api/commerce/catalog/storefront/categories/{categoryId}?allowInactive={allowInactive}&responseFields={responseFields}";
		$mozuUrl = new MozuUrl($url, UrlLocation::TENANT_POD,"GET", false);
		$mozuUrl->formatUrl("allowInactive", $allowInactive)
				->formatUrl("categoryId", $categoryId)
				->formatUrl("responseFields", $responseFields);

		return $mozuUrl;
	}
	
	/**
		* Get Resource Url for GetCategoryTree
		* @param string $responseFields 
		* @return string Resource Url
	*/
	public static function getCategoryTreeUrl($responseFields)
	{
		$url = "/api/commerce/catalog/storefront/categories/tree?responseFields={responseFields}";
		$mozuUrl = new MozuUrl($url, UrlLocation::TENANT_POD,"GET", false);
		$mozuUrl->formatUrl("responseFields", $responseFields);

		return $mozuUrl;
	}
	
}

?>

