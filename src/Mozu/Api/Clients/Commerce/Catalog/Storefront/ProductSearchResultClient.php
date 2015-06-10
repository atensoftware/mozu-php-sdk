<?php


/**
* <auto-generated>
*     This code was generated by Codezu.     
*
*     Changes to this file may cause incorrect behavior and will be lost if
*     the code is regenerated.
* </auto-generated>
*/

namespace Mozu\Api\Clients\Commerce\Catalog\Storefront;

use Mozu\Api\MozuClient;
use Mozu\Api\Urls\Commerce\Catalog\Storefront\ProductSearchResultUrl;

/**
* Use the Product Search resource to provide dynamic search results to shoppers as they browse and search for products on the web storefront, and to suggest possible search terms as the shopper enters text.
*/
class ProductSearchResultClient {

	/**
	* Searches the categories displayed on the web storefront for products or product options that the shopper types in a search query.
	*
	* @param string $facet Individually list the facet fields you want to display in a web storefront product search.
	* @param string $facetFieldRangeQuery Display a range facet not specified in a template in a web storefront product search by listing the facet field and the range to display.
	* @param string $facetHierDepth If filtering using category facets in a hierarchy, the number of category hierarchy levels to return for the facet. This option is only available for category facets.
	* @param string $facetHierPrefix If filtering using category facets in a hierarchy, the parent categories you want to skip in the storefront product search. This parameter is only available for category facets.
	* @param string $facetHierValue If filtering using category facets in a hierarchy, the category in the hierarchy to begin faceting on. This parameter is only available for category facets.
	* @param string $facetPageSize The number of facet values to return for one or more facets.
	* @param string $facetSettings Settings reserved for future facet search functionality on a web storefront product search.
	* @param string $facetStartIndex When paging through multiple facets, the startIndex value for each facet.
	* @param string $facetTemplate The facet template to use on the storefront. A template displays all facets associated with the template on the web storefront product search. Currently, only category-level facet templates are available.
	* @param string $facetTemplateSubset Display a subset of the facets defined in the template specified in facetTemplate parameter.
	* @param string $facetValueFilter The facet values to apply to the filter.
	* @param string $filter A set of filter expressions representing the search parameters for a query: eq=equals, ne=not equals, gt=greater than, lt = less than or equals, gt = greater than or equals, lt = less than or equals, sw = starts with, or cont = contains. Optional.
	* @param int $pageSize The number of results to display on each page when creating paged results from a query. The maximum value is 200.
	* @param string $query A query entered for searches and facet range.
	* @param string $responseFields Use this field to include those fields which are not included by default.
	* @param string $searchSettings 
	* @param string $sortBy 
	* @param int $startIndex 
	* @return MozuClient
	*/
	public static function searchClient($query =  null, $filter =  null, $facetTemplate =  null, $facetTemplateSubset =  null, $facet =  null, $facetFieldRangeQuery =  null, $facetHierPrefix =  null, $facetHierValue =  null, $facetHierDepth =  null, $facetStartIndex =  null, $facetPageSize =  null, $facetSettings =  null, $facetValueFilter =  null, $sortBy =  null, $pageSize =  null, $startIndex =  null, $searchSettings =  null, $responseFields =  null)
	{
		$url = ProductSearchResultUrl::searchUrl($facet, $facetFieldRangeQuery, $facetHierDepth, $facetHierPrefix, $facetHierValue, $facetPageSize, $facetSettings, $facetStartIndex, $facetTemplate, $facetTemplateSubset, $facetValueFilter, $filter, $pageSize, $query, $responseFields, $searchSettings, $sortBy, $startIndex);
		$mozuClient = new MozuClient();
		$mozuClient->withResourceUrl($url);
		return $mozuClient;

	}
	
	/**
	* Suggests possible search terms as the shopper enters search text.
	*
	* @param string $groups 
	* @param int $pageSize The number of results to display on each page when creating paged results from a query. The maximum value is 200.
	* @param string $query A query entered for searches and facet range.
	* @param string $responseFields Use this field to include those fields which are not included by default.
	* @return MozuClient
	*/
	public static function suggestClient($query =  null, $groups =  null, $pageSize =  null, $responseFields =  null)
	{
		$url = ProductSearchResultUrl::suggestUrl($groups, $pageSize, $query, $responseFields);
		$mozuClient = new MozuClient();
		$mozuClient->withResourceUrl($url);
		return $mozuClient;

	}
	
	
}

?>

