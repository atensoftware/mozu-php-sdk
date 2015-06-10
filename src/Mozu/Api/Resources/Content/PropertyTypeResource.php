<?php


/**
* <auto-generated>
*     This code was generated by Codezu.     
*
*     Changes to this file may cause incorrect behavior and will be lost if
*     the code is regenerated.
* </auto-generated>
*/

namespace Mozu\Api\Resources\Content;

use Mozu\Api\Clients\Content\PropertyTypeClient;
use Mozu\Api\ApiContext;

/**
* Use the property types subresource to manage content properties.
*/
class PropertyTypeResource {

	private $apiContext;
	private $dataViewMode;
		public function __construct(ApiContext $apiContext, $dataViewMode) 
	{
		$this->apiContext = $apiContext;
		$this->dataViewMode = $dataViewMode;
	}
	



	/**
	* Retrieves a list of the content property types.
	*
	* @param int $pageSize The number of results to display on each page when creating paged results from a query. The maximum value is 200.
	* @param string $responseFields Use this field to include those fields which are not included by default.
	* @param int $startIndex When creating paged results from a query, this value indicates the zero-based offset in the complete result set where the returned entities begin. For example, with a PageSize of 25, to get the 51st through the 75th items, use startIndex=3.
	* @return PropertyTypeCollection 
	*/
	public function getPropertyTypes($pageSize =  null, $startIndex =  null, $responseFields =  null)
	{
		$mozuClient = PropertyTypeClient::getPropertyTypesClient($this->dataViewMode, $pageSize, $startIndex, $responseFields);
		$mozuClient = $mozuClient->withContext($this->apiContext);
		$mozuClient->execute();
		return $mozuClient->getResult();

	}
	
	/**
	* Retrieves the details of the content property type.
	*
	* @param string $propertyTypeName The name of the property type.
	* @param string $responseFields Use this field to include those fields which are not included by default.
	* @return PropertyType 
	*/
	public function getPropertyType($propertyTypeName, $responseFields =  null)
	{
		$mozuClient = PropertyTypeClient::getPropertyTypeClient($this->dataViewMode, $propertyTypeName, $responseFields);
		$mozuClient = $mozuClient->withContext($this->apiContext);
		$mozuClient->execute();
		return $mozuClient->getResult();

	}
	
	/**
	* Creates a new
	*
	* @param string $responseFields Use this field to include those fields which are not included by default.
	* @param PropertyType $propertyType Property type available for content. Property types are like templates that can be reused.
	* @return PropertyType 
	*/
	public function createPropertyType($propertyType, $responseFields =  null)
	{
		$mozuClient = PropertyTypeClient::createPropertyTypeClient($propertyType, $responseFields);
		$mozuClient = $mozuClient->withContext($this->apiContext);
		$mozuClient->execute();
		return $mozuClient->getResult();

	}
	
	/**
	* Updates a
	*
	* @param string $propertyTypeName The name of the property type.
	* @param string $responseFields Use this field to include those fields which are not included by default.
	* @param PropertyType $propertyType Property type available for content. Property types are like templates that can be reused.
	* @return PropertyType 
	*/
	public function updatePropertyType($propertyType, $propertyTypeName, $responseFields =  null)
	{
		$mozuClient = PropertyTypeClient::updatePropertyTypeClient($this->dataViewMode, $propertyType, $propertyTypeName, $responseFields);
		$mozuClient = $mozuClient->withContext($this->apiContext);
		$mozuClient->execute();
		return $mozuClient->getResult();

	}
	
	/**
	* Delete a specific
	*
	* @param string $propertyTypeName The name of the property type.
	*/
	public function deletePropertyType($propertyTypeName)
	{
		$mozuClient = PropertyTypeClient::deletePropertyTypeClient($this->dataViewMode, $propertyTypeName);
		$mozuClient = $mozuClient->withContext($this->apiContext);
		$mozuClient->execute();

	}
	
	
}

?>

