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
use Mozu\Api\Urls\Commerce\Catalog\Admin\SoftAllocationUrl;

/**
* Allows you to temporarily hold a product from inventory while a shopper is filling out payment information. You create a product reservation when a shopper proceeds to check out and then release the reservation when the order process is complete.
*/
class SoftAllocationClient {

	/**
	* Retrieves a list of sof allocations according to any specified filter criteria and sort options.
	*
	* @param string $filter A set of filter expressions representing the search parameters for a query: eq=equals, ne=not equals, gt=greater than, lt = less than or equals, gt = greater than or equals, lt = less than or equals, sw = starts with, or cont = contains. Optional.
	* @param int $pageSize The number of results to display on each page when creating paged results from a query. The amount is divided and displayed on the `pageCount `amount of pages. The default is 20 and maximum value is 200 per page.
	* @param string $responseFields A list or array of fields returned for a call. These fields may be customized and may be used for various types of data calls in Mozu. For example, responseFields are returned for retrieving or updating attributes, carts, and messages in Mozu.
	* @param string $sortBy The element to sort the results by and the channel in which the results appear. Either ascending (a-z) or descending (z-a) channel. Optional.
	* @param int $startIndex When creating paged results from a query, this value indicates the zero-based offset in the complete result set where the returned entities begin. For example, with a `pageSize `of 25, to get the 51st through the 75th items, use `startIndex=3`.
	* @return MozuClient
	*/
	public static function getSoftAllocationsClient($startIndex =  null, $pageSize =  null, $sortBy =  null, $filter =  null, $responseFields =  null)
	{
		$url = SoftAllocationUrl::getSoftAllocationsUrl($filter, $pageSize, $responseFields, $sortBy, $startIndex);
		$mozuClient = new MozuClient();
		$mozuClient->withResourceUrl($url);
		return $mozuClient;

	}
	
	/**
	* Retrieves the details of a soft allocation.
	*
	* @param string $responseFields A list or array of fields returned for a call. These fields may be customized and may be used for various types of data calls in Mozu. For example, responseFields are returned for retrieving or updating attributes, carts, and messages in Mozu.
	* @param int $softAllocationId 
	* @return MozuClient
	*/
	public static function getSoftAllocationClient($softAllocationId, $responseFields =  null)
	{
		$url = SoftAllocationUrl::getSoftAllocationUrl($responseFields, $softAllocationId);
		$mozuClient = new MozuClient();
		$mozuClient->withResourceUrl($url);
		return $mozuClient;

	}
	
	/**
	* Creates a new product reservation for a product. This places a hold on the product inventory for the quantity specified during the ordering process.
	*
	* @param array|SoftAllocation $softAllocationsIn Mozu.ProductAdmin.Contracts.SoftAllocation ApiType DOCUMENT_HERE 
	* @return MozuClient
	*/
	public static function addSoftAllocationsClient($softAllocationsIn)
	{
		$url = SoftAllocationUrl::addSoftAllocationsUrl();
		$mozuClient = new MozuClient();
		$mozuClient->withResourceUrl($url)->withBody($softAllocationsIn);
		return $mozuClient;

	}
	
	/**
	* Converts a set of existing softAllocations into productReservations
	*
	* @param array|SoftAllocation $softAllocations Mozu.ProductAdmin.Contracts.SoftAllocation ApiType DOCUMENT_HERE 
	* @return MozuClient
	*/
	public static function convertToProductReservationClient($softAllocations)
	{
		$url = SoftAllocationUrl::convertToProductReservationUrl();
		$mozuClient = new MozuClient();
		$mozuClient->withResourceUrl($url)->withBody($softAllocations);
		return $mozuClient;

	}
	
	/**
	* Updates a set of softAllocations expiration time in a non trassactional batch
	*
	* @param SoftAllocationRenew $softAllocationRenew Mozu.ProductAdmin.Contracts.SoftAllocationRenew ApiType DOCUMENT_HERE 
	* @return MozuClient
	*/
	public static function renewSoftAllocationsClient($softAllocationRenew)
	{
		$url = SoftAllocationUrl::renewSoftAllocationsUrl();
		$mozuClient = new MozuClient();
		$mozuClient->withResourceUrl($url)->withBody($softAllocationRenew);
		return $mozuClient;

	}
	
	/**
	* Updates a soft allocationt. This updates a hold on the product inventory for the quantity specified during the ordering process.
	*
	* @param array|SoftAllocation $softAllocations Mozu.ProductAdmin.Contracts.SoftAllocation ApiType DOCUMENT_HERE 
	* @return MozuClient
	*/
	public static function updateSoftAllocationsClient($softAllocations)
	{
		$url = SoftAllocationUrl::updateSoftAllocationsUrl();
		$mozuClient = new MozuClient();
		$mozuClient->withResourceUrl($url)->withBody($softAllocations);
		return $mozuClient;

	}
	
	/**
	* Deletes a soft allocation. You might delete a allocation when an order or cart is not processed to return the product quantity back to inventory.
	*
	* @param int $softAllocationId 
	*/
	public static function deleteSoftAllocationClient($softAllocationId)
	{
		$url = SoftAllocationUrl::deleteSoftAllocationUrl($softAllocationId);
		$mozuClient = new MozuClient();
		$mozuClient->withResourceUrl($url);
		return $mozuClient;

	}
	
	
}

?>

