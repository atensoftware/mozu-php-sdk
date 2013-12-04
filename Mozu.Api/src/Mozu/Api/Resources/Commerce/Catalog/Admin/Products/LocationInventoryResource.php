<?php


/**
* <auto-generated>
*     This code was generated by a tool.     
*
*     Changes to this file may cause incorrect behavior and will be lost if
*     the code is regenerated.
* </auto-generated>
*/

namespace Mozu\Api\Resources\Commerce\Catalog\Admin\Products;

use Mozu\Api\MozuClient;
use Mozu\Api\Clients\Commerce\Catalog\Admin\Products\LocationInventoryClient;
use Mozu\Api\ApiContext;
use Mozu\Api\DataViewMode;
use Mozu\Api\Headers;

/**
* 
*/
class LocationInventoryResource {

	private $apiContext;
	public function __construct(ApiContext $apiContext) 
	{
		$this->apiContext = $apiContext;
	}

	/**
	* 
	*
	* @param string $filter 
	* @param int $pageSize 
	* @param string $productCode 
	* @param string $sortBy 
	* @param int $startIndex 
	* @return LocationInventoryCollection 
	*/
	public function getLocationInventories($dataViewMode,  $productCode, $filter =  null, $pageSize =  null, $sortBy =  null, $startIndex =  null, Mozu\Api\Security\AuthTicket &$authTicket= null)
	{
		$mozuClient = LocationInventoryClient::getLocationInventoriesClient($dataViewMode,  $productCode, $filter, $pageSize, $sortBy, $startIndex, $authTicket);
		$mozuClient = $mozuClient->withContext($this->apiContext);
		$mozuClient->execute();
		return $mozuClient->getResult();

	}
	
	/**
	* 
	*
	* @param string $locationCode 
	* @param string $productCode 
	* @return LocationInventory 
	*/
	public function getLocationInventory($dataViewMode,  $locationCode,  $productCode, Mozu\Api\Security\AuthTicket &$authTicket= null)
	{
		$mozuClient = LocationInventoryClient::getLocationInventoryClient($dataViewMode,  $locationCode,  $productCode, $authTicket);
		$mozuClient = $mozuClient->withContext($this->apiContext);
		$mozuClient->execute();
		return $mozuClient->getResult();

	}
	
	/**
	* 
	*
	* @param string $productCode 
	* @param array|LocationInventory $locationInventoryList 
	* @return array|LocationInventory 
	*/
	public function addLocationInventory($dataViewMode, $locationInventoryList,  $productCode, Mozu\Api\Security\AuthTicket &$authTicket= null)
	{
		$mozuClient = LocationInventoryClient::addLocationInventoryClient($dataViewMode, $locationInventoryList,  $productCode, $authTicket);
		$mozuClient = $mozuClient->withContext($this->apiContext);
		$mozuClient->execute();
		return $mozuClient->getResult();

	}
	
	/**
	* 
	*
	* @param string $productCode 
	* @param array|LocationInventoryAdjustment $locationInventoryAdjustments 
	* @return array|LocationInventory 
	*/
	public function updateLocationInventory($dataViewMode, $locationInventoryAdjustments,  $productCode, Mozu\Api\Security\AuthTicket &$authTicket= null)
	{
		$mozuClient = LocationInventoryClient::updateLocationInventoryClient($dataViewMode, $locationInventoryAdjustments,  $productCode, $authTicket);
		$mozuClient = $mozuClient->withContext($this->apiContext);
		$mozuClient->execute();
		return $mozuClient->getResult();

	}
	
	/**
	* 
	*
	* @param string $locationCode 
	* @param string $productCode 
	*/
	public function deleteLocationInventory($dataViewMode,  $locationCode,  $productCode, Mozu\Api\Security\AuthTicket &$authTicket= null)
	{
		$mozuClient = LocationInventoryClient::deleteLocationInventoryClient($dataViewMode,  $locationCode,  $productCode, $authTicket);
		$mozuClient = $mozuClient->withContext($this->apiContext);
		$mozuClient->execute();

	}
	
	
}

?>

