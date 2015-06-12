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
*	Properties of the information needed to fulfill an order, whether via in-store pickup or direct shipping.
*/
class FulfillmentInfo
{
	/**
	*If true, the shipping destination for a shipment is a commercial address.
	*/
	public $isDestinationCommercial;

	/**
	*The code associated with a carrier's shipping method service type, used during fulfillment of packages and shipments. Service type codes include a prefix that indicates the carrier. For example: FEDEX_INTERNATIONAL_STANDARD and UPS_GROUND.
	*/
	public $shippingMethodCode;

	/**
	*The carrier-supplied name for the shipping service type, such as "UPS Ground" or "2nd Day Air".
	*/
	public $shippingMethodName;

	/**
	*Identifier and datetime stamp information recorded when a user or application creates, updates, or deletes a resource entity. This value is system-supplied and read-only.
	*/
	public $auditInfo;

	/**
	*Custom data originated by the shipping service.
	*/
	public $data;

	/**
	*The contact information of the person receiving the shipment or performing the pickup.
	*/
	public $fulfillmentContact;

}

?>
