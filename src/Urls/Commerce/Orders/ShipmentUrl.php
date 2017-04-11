<?php

/*
* <auto-generated>
*     This code was generated by a Codezu.     
*
*     Changes to this file may cause incorrect behavior and will be lost if
*     the code is regenerated.
* </auto-generated>
*/


namespace Mozu\Api\Urls\Commerce\Orders;

use Mozu\Api\MozuUrl;
use Mozu\Api\UrlLocation;

class ShipmentUrl  {

	/**
		* Get Resource Url for GetShipment
		* @param string $orderId Unique identifier of the order.
		* @param string $responseFields Use this field to include those fields which are not included by default.
		* @param string $shipmentId Unique identifier of the shipment to retrieve.
		* @return string Resource Url
	*/
	public static function getShipmentUrl($orderId, $responseFields, $shipmentId)
	{
		$url = "/api/commerce/orders/{orderId}/shipments/{shipmentId}?responseFields={responseFields}";
		$mozuUrl = new MozuUrl($url, UrlLocation::TENANT_POD,"GET", false) ;
		$url = $mozuUrl->formatUrl("orderId", $orderId);
		$url = $mozuUrl->formatUrl("responseFields", $responseFields);
		$url = $mozuUrl->formatUrl("shipmentId", $shipmentId);
		return $mozuUrl;
	}
	
	/**
		* Get Resource Url for GetAvailableShipmentMethods
		* @param bool $draft If true, retrieve the draft version of the order, which might include uncommitted changes to the order or its components.
		* @param string $orderId Unique identifier of the order.
		* @return string Resource Url
	*/
	public static function getAvailableShipmentMethodsUrl($draft, $orderId)
	{
		$url = "/api/commerce/orders/{orderId}/shipments/methods?draft={draft}";
		$mozuUrl = new MozuUrl($url, UrlLocation::TENANT_POD,"GET", false) ;
		$url = $mozuUrl->formatUrl("draft", $draft);
		$url = $mozuUrl->formatUrl("orderId", $orderId);
		return $mozuUrl;
	}
	
	/**
		* Get Resource Url for CreatePackageShipments
		* @param string $orderId Unique identifier of the order.
		* @return string Resource Url
	*/
	public static function createPackageShipmentsUrl($orderId)
	{
		$url = "/api/commerce/orders/{orderId}/shipments";
		$mozuUrl = new MozuUrl($url, UrlLocation::TENANT_POD,"POST", false) ;
		$url = $mozuUrl->formatUrl("orderId", $orderId);
		return $mozuUrl;
	}
	
	/**
		* Get Resource Url for DeleteShipment
		* @param string $orderId Unique identifier of the order.
		* @param string $shipmentId Unique identifier of the shipment to retrieve.
		* @return string Resource Url
	*/
	public static function deleteShipmentUrl($orderId, $shipmentId)
	{
		$url = "/api/commerce/orders/{orderId}/shipments/{shipmentId}";
		$mozuUrl = new MozuUrl($url, UrlLocation::TENANT_POD,"DELETE", false) ;
		$url = $mozuUrl->formatUrl("orderId", $orderId);
		$url = $mozuUrl->formatUrl("shipmentId", $shipmentId);
		return $mozuUrl;
	}
	
}

?>

