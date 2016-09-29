<?php


/**
* <auto-generated>
*     This code was generated by Codezu.     
*
*     Changes to this file may cause incorrect behavior and will be lost if
*     the code is regenerated.
* </auto-generated>
*/

namespace Mozu\Api\Resources\Commerce\Admin;

use Mozu\Api\Clients\Commerce\Admin\LocationClient;
use Mozu\Api\ApiContext;


/**
* Use the Locations resource to manage each physical location associated with a tenant. Locations enable tenants to associate a physical address with product inventory, provide a store finder for in-store pickup, or both. Locations that support inventory can use both direct ship and in-store pickup fulfillment types.
*/
class LocationResource {

		private $apiContext;
			
	public function __construct(ApiContext $apiContext) 
	{
		$this->apiContext = $apiContext;
	}

	



	/**
	* Retrieves a list of all locations associated with a tenant, according to any filter and sort criteria specified in the request.
	*
	* @param string $filter A set of expressions that consist of a field, operator, and value and represent search parameter syntax when filtering results of a query. Valid operators include equals (eq), does not equal (ne), greater than (gt), less than (lt), greater than or equal to (ge), less than or equal to (le), starts with (sw), or contains (cont). For example - "filter=IsDisplayed+eq+true"
	* @param int $pageSize The number of results to display on each page when creating paged results from a query. The maximum value is 200.
	* @param string $responseFields Use this field to include those fields which are not included by default.
	* @param string $sortBy The property by which to sort results and whether the results appear in ascending (a-z) order, represented by ASC or in descending (z-a) order, represented by DESC. The sortBy parameter follows an available property. For example: "sortBy=productCode+asc"
	* @param int $startIndex When creating paged results from a query, this value indicates the zero-based offset in the complete result set where the returned entities begin. For example, with a PageSize of 25, to get the 51st through the 75th items, use startIndex=3.
	* @return LocationCollection 
	* @deprecated deprecated since version 1.17
	*/
	public function getLocations($startIndex =  null, $pageSize =  null, $sortBy =  null, $filter =  null, $responseFields =  null)
	{
		$mozuClient = LocationClient::getLocationsClient($startIndex, $pageSize, $sortBy, $filter, $responseFields);
		$mozuClient = $mozuClient->withContext($this->apiContext);
		$mozuClient->execute();
		return $mozuClient->getResult();

	}
	
/**
	* Retrieves a list of all locations associated with a tenant, according to any filter and sort criteria specified in the request.
	*
	* @param string $filter A set of expressions that consist of a field, operator, and value and represent search parameter syntax when filtering results of a query. Valid operators include equals (eq), does not equal (ne), greater than (gt), less than (lt), greater than or equal to (ge), less than or equal to (le), starts with (sw), or contains (cont). For example - "filter=IsDisplayed+eq+true"
	* @param int $pageSize The number of results to display on each page when creating paged results from a query. The maximum value is 200.
	* @param string $responseFields Use this field to include those fields which are not included by default.
	* @param string $sortBy The property by which to sort results and whether the results appear in ascending (a-z) order, represented by ASC or in descending (z-a) order, represented by DESC. The sortBy parameter follows an available property. For example: "sortBy=productCode+asc"
	* @param int $startIndex When creating paged results from a query, this value indicates the zero-based offset in the complete result set where the returned entities begin. For example, with a PageSize of 25, to get the 51st through the 75th items, use startIndex=3.
	* @return Promise - use $promise->then(sucessfn, errorfn). successFn is passed Mozu\Api\MozuResult. errorFn is passed Mozu\Api\ApiException
	*/
	public function getLocationsAsync($startIndex =  null, $pageSize =  null, $sortBy =  null, $filter =  null, $responseFields =  null)
	{
		$mozuClient = LocationClient::getLocationsClient($startIndex, $pageSize, $sortBy, $filter, $responseFields);
		$mozuClient = $mozuClient->withContext($this->apiContext);
		return $mozuClient->executeAsync();

	}
	
	/**
	* Retrieves the details of the location specified in the request by location code.
	*
	* @param string $locationCode The unique, user-defined code that identifies a location. 
	* @param string $responseFields Filtering syntax appended to an API call to increase or decrease the amount of data returned inside a JSON object. This parameter should only be used to retrieve data. Attempting to update data using this parameter may cause data loss.
	* @return Location 
	* @deprecated deprecated since version 1.17
	*/
	public function getLocation($locationCode, $responseFields =  null)
	{
		$mozuClient = LocationClient::getLocationClient($locationCode, $responseFields);
		$mozuClient = $mozuClient->withContext($this->apiContext);
		$mozuClient->execute();
		return $mozuClient->getResult();

	}
	
/**
	* Retrieves the details of the location specified in the request by location code.
	*
	* @param string $locationCode The unique, user-defined code that identifies a location. 
	* @param string $responseFields Filtering syntax appended to an API call to increase or decrease the amount of data returned inside a JSON object. This parameter should only be used to retrieve data. Attempting to update data using this parameter may cause data loss.
	* @return Promise - use $promise->then(sucessfn, errorfn). successFn is passed Mozu\Api\MozuResult. errorFn is passed Mozu\Api\ApiException
	*/
	public function getLocationAsync($locationCode, $responseFields =  null)
	{
		$mozuClient = LocationClient::getLocationClient($locationCode, $responseFields);
		$mozuClient = $mozuClient->withContext($this->apiContext);
		return $mozuClient->executeAsync();

	}
	
	/**
	* Creates a new physical location for the tenant specified in the request header.
	*
	* @param string $responseFields Filtering syntax appended to an API call to increase or decrease the amount of data returned inside a JSON object. This parameter should only be used to retrieve data. Attempting to update data using this parameter may cause data loss.
	* @param Location $location Properties of a physical location a tenant uses to manage inventory and fulfills orders, provide store finder functionality, or both.
	* @return Location 
	* @deprecated deprecated since version 1.17
	*/
	public function addLocation($location, $responseFields =  null)
	{
		$mozuClient = LocationClient::addLocationClient($location, $responseFields);
		$mozuClient = $mozuClient->withContext($this->apiContext);
		$mozuClient->execute();
		return $mozuClient->getResult();

	}
	
/**
	* Creates a new physical location for the tenant specified in the request header.
	*
	* @param string $responseFields Filtering syntax appended to an API call to increase or decrease the amount of data returned inside a JSON object. This parameter should only be used to retrieve data. Attempting to update data using this parameter may cause data loss.
	* @return Promise - use $promise->then(sucessfn, errorfn). successFn is passed Mozu\Api\MozuResult. errorFn is passed Mozu\Api\ApiException
	*/
	public function addLocationAsync($location, $responseFields =  null)
	{
		$mozuClient = LocationClient::addLocationClient($location, $responseFields);
		$mozuClient = $mozuClient->withContext($this->apiContext);
		return $mozuClient->executeAsync();

	}
	
	/**
	* Updates one or more details of a the location specified in the request by location code.
	*
	* @param string $locationCode The unique, user-defined code that identifies a location. 
	* @param string $responseFields Use this field to include those fields which are not included by default.
	* @param Location $location Properties of a physical location a tenant uses to manage inventory and fulfills orders, provide store finder functionality, or both.
	* @return Location 
	* @deprecated deprecated since version 1.17
	*/
	public function updateLocation($location, $locationCode, $responseFields =  null)
	{
		$mozuClient = LocationClient::updateLocationClient($location, $locationCode, $responseFields);
		$mozuClient = $mozuClient->withContext($this->apiContext);
		$mozuClient->execute();
		return $mozuClient->getResult();

	}
	
/**
	* Updates one or more details of a the location specified in the request by location code.
	*
	* @param string $locationCode The unique, user-defined code that identifies a location. 
	* @param string $responseFields Use this field to include those fields which are not included by default.
	* @return Promise - use $promise->then(sucessfn, errorfn). successFn is passed Mozu\Api\MozuResult. errorFn is passed Mozu\Api\ApiException
	*/
	public function updateLocationAsync($location, $locationCode, $responseFields =  null)
	{
		$mozuClient = LocationClient::updateLocationClient($location, $locationCode, $responseFields);
		$mozuClient = $mozuClient->withContext($this->apiContext);
		return $mozuClient->executeAsync();

	}
	
	/**
	* Deletes the location specified in the request.
	*
	* @param string $locationCode The unique, user-defined code that identifies a location. 
	* @deprecated deprecated since version 1.17
	*/
	public function deleteLocation($locationCode)
	{
		$mozuClient = LocationClient::deleteLocationClient($locationCode);
		$mozuClient = $mozuClient->withContext($this->apiContext);
		$mozuClient->execute();

	}
	
/**
	* Deletes the location specified in the request.
	*
	* @param string $locationCode The unique, user-defined code that identifies a location. 
	* @return Promise - use $promise->then(sucessfn, errorfn). successFn is passed Mozu\Api\MozuResult. errorFn is passed Mozu\Api\ApiException
	*/
	public function deleteLocationAsync($locationCode)
	{
		$mozuClient = LocationClient::deleteLocationClient($locationCode);
		$mozuClient = $mozuClient->withContext($this->apiContext);
		return $mozuClient->executeAsync();

	}
	
	
}

?>

