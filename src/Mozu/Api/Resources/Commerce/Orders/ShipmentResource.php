<?php


/**
* <auto-generated>
*     This code was generated by Codezu.     
*
*     Changes to this file may cause incorrect behavior and will be lost if
*     the code is regenerated.
* </auto-generated>
*/

namespace Mozu\Api\Resources\Commerce\Orders;

use Mozu\Api\Clients\Commerce\Orders\ShipmentClient;
use Mozu\Api\ApiContext;

/**
* Use the shipments resource to manage shipments of collections of packages for an order.
*/
class ShipmentResource {

	private $apiContext;
		
	public function __construct(ApiContext $apiContext) 
	{
		$this->apiContext = $apiContext;
	}

	



	/**
	* Retrieves the details of the order shipment specified in the request.
	*
	* @param string $orderId Unique identifier of the order.
	* @param string $responseFields Use this field to include those fields which are not included by default.
	* @param string $shipmentId Unique identifier of the shipment to retrieve.
	* @return Shipment 
	*/
	public function getShipment($orderId, $shipmentId, $responseFields =  null)
	{
		$mozuClient = ShipmentClient::getShipmentClient($orderId, $shipmentId, $responseFields);
		$mozuClient = $mozuClient->withContext($this->apiContext);
		$mozuClient->execute();
		return $mozuClient->getResult();

	}
	
	/**
	* Retrieves the available shipping methods applicable to the order. Typically used to display available shipping method options on the checkout page.
	*
	* @param bool $draft If true, retrieve the draft version of the order, which might include uncommitted changes to the order or its components.
	* @param string $orderId Unique identifier of the order.
	* @return array|ShippingRate 
	*/
	public function getAvailableShipmentMethods($orderId, $draft =  null)
	{
		$mozuClient = ShipmentClient::getAvailableShipmentMethodsClient($orderId, $draft);
		$mozuClient = $mozuClient->withContext($this->apiContext);
		$mozuClient->execute();
		return $mozuClient->getResult();

	}
	
	/**
	* Creates a shipment from one or more package associated with an order and assign a label and tracking number to an order shipment.
	*
	* @param string $orderId Unique identifier of the order.
	* @param array|string $packageIds List of unique identifiers for each package associated with this shipment. Not all packages must belong to the same shipment.
	* @return array|Package 
	*/
	public function createPackageShipments($packageIds, $orderId)
	{
		$mozuClient = ShipmentClient::createPackageShipmentsClient($packageIds, $orderId);
		$mozuClient = $mozuClient->withContext($this->apiContext);
		$mozuClient->execute();
		return $mozuClient->getResult();

	}
	
	/**
	* Deletes the shipment specified in the request.
	*
	* @param string $orderId Unique identifier of the order.
	* @param string $shipmentId Unique identifier of the shipment to retrieve.
	*/
	public function deleteShipment($orderId, $shipmentId)
	{
		$mozuClient = ShipmentClient::deleteShipmentClient($orderId, $shipmentId);
		$mozuClient = $mozuClient->withContext($this->apiContext);
		$mozuClient->execute();

	}
	
	
}

?>

