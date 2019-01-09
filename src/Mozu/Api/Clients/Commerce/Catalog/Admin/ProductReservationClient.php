<?php


/**
* <auto-generated>
*     This code was generated by a Codezu.     
*
*     Changes to this file may cause incorrect behavior and will be lost if
*     the code is regenerated.
* </auto-generated>
*/

namespace Mozu\Api\Clients\Commerce\Catalog\Admin;

use Mozu\Api\MozuClient;
use Mozu\Api\Urls\Commerce\Catalog\Admin\ProductReservationUrl;
use Mozu\Api\Headers;
use Mozu\Api\DataViewMode;

use Mozu\Api\Contracts\ProductAdmin\ProductReservation;
use Mozu\Api\Contracts\ProductAdmin\ProductReservationCollection;

/**
* Temporarily hold a product from inventory while a shopper is filling out payment information. Create a product reservation when a shopper proceeds to check out and then release the reservation when the order process is complete.
*/
class ProductReservationClient {

	/**
	* Retrieves a list of product reservations according to any specified filter criteria and sort options.
	*
	* @param DataViewMode $dataViewMode
	* @param string $filter A set of expressions that consist of a field, operator, and value and represent search parameter syntax when filtering results of a query. Valid operators include equals (eq), does not equal (ne), greater than (gt), less than (lt), greater than or equal to (ge), less than or equal to (le), starts with (sw), or contains (cont). For example - "filter=IsDisplayed+eq+true"
	* @param int $pageSize The number of results to display on each page when creating paged results from a query. The maximum value is 200.
	* @param string $responseFields Use this field to include those fields which are not included by default.
	* @param string $sortBy 
	* @param int $startIndex 
	* @return MozuClient
	*/
	public static function getProductReservationsClient($dataViewMode, $startIndex =  null, $pageSize =  null, $sortBy =  null, $filter =  null, $responseFields =  null)
	{
		$url = ProductReservationUrl::getProductReservationsUrl($filter, $pageSize, $responseFields, $sortBy, $startIndex);
		$mozuClient = new MozuClient();
		return $mozuClient->withResourceUrl($url)->withHeader(Headers::X_VOL_DATAVIEW_MODE ,$dataViewMode);

	}
	
	/**
	* Retrieves the details of a product reservation.
	*
	* @param DataViewMode $dataViewMode
	* @param int $productReservationId Unique identifier of the product reservation.
	* @param string $responseFields Use this field to include those fields which are not included by default.
	* @return MozuClient
	*/
	public static function getProductReservationClient($dataViewMode, $productReservationId, $responseFields =  null)
	{
		$url = ProductReservationUrl::getProductReservationUrl($productReservationId, $responseFields);
		$mozuClient = new MozuClient();
		return $mozuClient->withResourceUrl($url)->withHeader(Headers::X_VOL_DATAVIEW_MODE ,$dataViewMode);

	}
	
	/**
	* Creates a new product reservation for a product. This action places a hold on the product inventory for the quantity specified during the ordering process.
	*
	* @param DataViewMode $dataViewMode
	* @param bool $skipInventoryCheck If true, skip the process to validate inventory when creating this product reservation.
	* @param array|ProductReservation $productReservations Details of the product reservations to add.
	* @return MozuClient
	*/
	public static function addProductReservationsClient($dataViewMode, $productReservations, $skipInventoryCheck =  null)
	{
		$url = ProductReservationUrl::addProductReservationsUrl($skipInventoryCheck);
		$mozuClient = new MozuClient();
		return $mozuClient->withResourceUrl($url)->withBody($productReservations)->withHeader(Headers::X_VOL_DATAVIEW_MODE ,$dataViewMode);

	}
	
	/**
	* Commits a product reservation to decrement the product's inventory by the quantity specified then release the reservation once the order process completed successfully.
	*
	* @param DataViewMode $dataViewMode
	* @param array|ProductReservation $productReservations List of unique identifiers of the reservations to commit.
	* @return MozuClient
	*/
	public static function commitReservationsClient($dataViewMode, $productReservations)
	{
		$url = ProductReservationUrl::commitReservationsUrl();
		$mozuClient = new MozuClient();
		return $mozuClient->withResourceUrl($url)->withBody($productReservations)->withHeader(Headers::X_VOL_DATAVIEW_MODE ,$dataViewMode);

	}
	
	/**
	* Updates an existing product reservation for a product.
	*
	* @param DataViewMode $dataViewMode
	* @param bool $skipInventoryCheck If true, skip the inventory validation process when updating this product reservation.
	* @param array|ProductReservation $productReservations Properties of the product reservations to update.
	* @return MozuClient
	*/
	public static function updateProductReservationsClient($dataViewMode, $productReservations, $skipInventoryCheck =  null)
	{
		$url = ProductReservationUrl::updateProductReservationsUrl($skipInventoryCheck);
		$mozuClient = new MozuClient();
		return $mozuClient->withResourceUrl($url)->withBody($productReservations)->withHeader(Headers::X_VOL_DATAVIEW_MODE ,$dataViewMode);

	}
	
	/**
	* Deletes a product reservation. For example, delete a reservation when an order is not processed to return the product quantity back to inventory.
	*
	* @param DataViewMode $dataViewMode
	* @param int $productReservationId Unique identifier of the reservation.
	* @return MozuClient
	*/
	public static function deleteProductReservationClient($dataViewMode, $productReservationId)
	{
		$url = ProductReservationUrl::deleteProductReservationUrl($productReservationId);
		$mozuClient = new MozuClient();
		return $mozuClient->withResourceUrl($url)->withHeader(Headers::X_VOL_DATAVIEW_MODE ,$dataViewMode);

	}
	
	
}

?>
