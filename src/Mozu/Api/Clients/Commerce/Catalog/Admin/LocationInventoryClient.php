<?php


/**
* <auto-generated>
*     This code was generated by Codezu.     
*
*     Changes to this file may cause incorrect behavior and will be lost if
*     the code is regenerated.
* </auto-generated>
*/

namespace Mozu\Api\Clients\Commerce\Catalog\Admin;

use Mozu\Api\MozuClient;
use Mozu\Api\Urls\Commerce\Catalog\Admin\LocationInventoryUrl;

/**
* Use the Location Inventory resource to manage the level of active product inventory maintained at each defined location, at the location level.
*/
class LocationInventoryClient {

	/**
	* Retrieves the details of a product's active inventory at the location specified in the request.
	*
	* @param string $locationCode The unique, user-defined code that identifies a location. 
	* @param string $productCode Merchant-created code that uniquely identifies the product such as a SKU or item number. Once created, the product code is read-only.
	* @param string $responseFields Use this field to include those fields which are not included by default.
	* @return MozuClient
	*/
	public static function getLocationInventoryClient($dataViewMode, $locationCode, $productCode, $responseFields =  null)
	{
		$url = LocationInventoryUrl::getLocationInventoryUrl($locationCode, $productCode, $responseFields);
		$mozuClient = new MozuClient();
		$mozuClient->withResourceUrl($url)->withHeader(Headers::X_VOL_DATAVIEW_MODE ,$dataViewMode);
		return $mozuClient;

	}
	
	/**
	* Retrieves a list of all product inventory definitions for the location code specified in the request.
	*
	* @param string $filter A set of expressions that consist of a field, operator, and value and represent search parameter syntax when filtering results of a query. Valid operators include equals (eq), does not equal (ne), greater than (gt), less than (lt), greater than or equal to (ge), less than or equal to (le), starts with (sw), or contains (cont). For example - "filter=IsDisplayed+eq+true"
	* @param string $locationCode The unique, user-defined code that identifies a location. 
	* @param int $pageSize The number of results to display on each page when creating paged results from a query. The maximum value is 200.
	* @param string $responseFields Use this field to include those fields which are not included by default.
	* @param string $sortBy The property by which to sort results and whether the results appear in ascending (a-z) order, represented by ASC or in descending (z-a) order, represented by DESC. The sortBy parameter follows an available property. For example: "sortBy=productCode+asc"
	* @param int $startIndex When creating paged results from a query, this value indicates the zero-based offset in the complete result set where the returned entities begin. For example, with a PageSize of 25, to get the 51st through the 75th items, use startIndex=3.
	* @return MozuClient
	*/
	public static function getLocationInventoriesClient($dataViewMode, $locationCode, $startIndex =  null, $pageSize =  null, $sortBy =  null, $filter =  null, $responseFields =  null)
	{
		$url = LocationInventoryUrl::getLocationInventoriesUrl($filter, $locationCode, $pageSize, $responseFields, $sortBy, $startIndex);
		$mozuClient = new MozuClient();
		$mozuClient->withResourceUrl($url)->withHeader(Headers::X_VOL_DATAVIEW_MODE ,$dataViewMode);
		return $mozuClient;

	}
	
	/**
	* Creates an array of product inventory definitions for the location specified in the request. When adding a new inventory definition, you must specify the productCode and stockOnHand value in each array you define. All other properties are system-supplied and read only.
	*
	* @param string $locationCode The unique, user-defined code that identifies a location. 
	* @param bool $performUpserts Query string parameter lets the service perform an update for a new or existing record. When run, the update occurs without throwing a conflict exception that the record exists. If true, the updates completes regardless of the record currently existing. By default, if no value is specified, the service assumes this value is false.
	* @param array|LocationInventory $locationInventoryList Properties of an inventory definition that defines the level of inventory for a specific product at a given location.
	* @return MozuClient
	*/
	public static function addLocationInventoryClient($dataViewMode, $locationInventoryList, $locationCode, $performUpserts =  null)
	{
		$url = LocationInventoryUrl::addLocationInventoryUrl($locationCode, $performUpserts);
		$mozuClient = new MozuClient();
		$mozuClient->withResourceUrl($url)->withBody($locationInventoryList)->withHeader(Headers::X_VOL_DATAVIEW_MODE ,$dataViewMode);
		return $mozuClient;

	}
	
	/**
	* Updates the active stock on hand inventory of products for the location code specified in the request.
	*
	* @param string $locationCode The unique, user-defined code that identifies a location. 
	* @param array|LocationInventoryAdjustment $locationInventoryAdjustments Properties of an adjustment to the active product inventory of a specific location.
	* @return MozuClient
	*/
	public static function updateLocationInventoryClient($dataViewMode, $locationInventoryAdjustments, $locationCode)
	{
		$url = LocationInventoryUrl::updateLocationInventoryUrl($locationCode);
		$mozuClient = new MozuClient();
		$mozuClient->withResourceUrl($url)->withBody($locationInventoryAdjustments)->withHeader(Headers::X_VOL_DATAVIEW_MODE ,$dataViewMode);
		return $mozuClient;

	}
	
	/**
	* Deletes the product code inventory definition for the location specified in the request.
	*
	* @param string $locationCode The unique, user-defined code that identifies a location. 
	* @param string $productCode Merchant-created code that uniquely identifies the product such as a SKU or item number. Once created, the product code is read-only.
	*/
	public static function deleteLocationInventoryClient($dataViewMode, $locationCode, $productCode)
	{
		$url = LocationInventoryUrl::deleteLocationInventoryUrl($locationCode, $productCode);
		$mozuClient = new MozuClient();
		$mozuClient->withResourceUrl($url)->withHeader(Headers::X_VOL_DATAVIEW_MODE ,$dataViewMode);
		return $mozuClient;

	}
	
	
}

?>

