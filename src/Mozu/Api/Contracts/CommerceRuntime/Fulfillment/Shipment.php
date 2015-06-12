<?php

/*
* <auto-generated>
*     This code was generated by a Codezu.     
*
*     Changes to this file may cause incorrect behavior and will be lost if
*     the code is regenerated.
* </auto-generated>
*/


namespace Mozu\Api\Contracts\CommerceRuntime\Fulfillment;



/**
*	Properties of a shipment used to ship order items to a shopper. A shipment can include any number of packages.
*/
class Shipment
{
	/**
	*Total cost of shipping the shipment to the shopper.
	*/
	public $cost;

	/**
	*3-letter ISO 4217 standard global currency code. Currently, only "USD" (US Dollar) is supported.
	*/
	public $currencyCode;

	/**
	*Unique identifier of the source product property. For a product field it will be the name of the field. For a product attribute it will be the Attribute FQN. 
	*/
	public $id;

	/**
	*Array list of unique IDs of packages in a shipment planned for or finished a shipping fulfillment action. 
	*/
	public $packageIds;

	/**
	*The code associated with a carrier's shipping method service type, used during fulfillment of packages and shipments. Service type codes include a prefix that indicates the carrier. For example: FEDEX_INTERNATIONAL_STANDARD and UPS_GROUND.
	*/
	public $shippingMethodCode;

	/**
	*If true, a shopper signature is required to deliver this shipment.
	*/
	public $signatureRequired;

	/**
	*Tracking number for the package or shipment, supplied by the shipping carrier to track the shipment until fulfillment completes. The tracking number format may differ between carriers.
	*/
	public $trackingNumber;

	/**
	*Identifier and datetime stamp information recorded when a user or application creates, updates, or deletes a resource entity. This value is system-supplied and read-only.
	*/
	public $auditInfo;

	/**
	*The physical address orders are sent to as a shipping destination. This address may contain multiple lines, city, state/province, country, and zip/postal code. The destination is used to calculate shipping costs.
	*/
	public $destinationAddress;

	/**
	*The physical address from which the order or shipment will ship.
	*/
	public $originAddress;

}

?>
