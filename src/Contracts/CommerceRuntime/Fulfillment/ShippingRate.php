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
*	Properties of an estimated shipping rate for a shipment.
*/
class ShippingRate
{
	/**
	*3-letter ISO 4217 standard global currency code. Currently, only "USD" (US Dollar) is supported.
	*/
	public $currencyCode;

	/**
	*Indicates if the facet is currently valid.
	*/
	public $isValid;

	/**
	*Array list of validation and status messages associated with shipping rates, orders, and product purchasable state.
	*/
	public $messages;

	/**
	*The amount the company and the shopper pay for shipping based on the current rate. Depending on any company discounts or fees, the price the company pays for shipping may differ from what the shopper pays.
	*/
	public $price;

	/**
	*The code associated with a carrier's shipping method service type, used during fulfillment of packages and shipments. Service type codes include a prefix that indicates the carrier. For example: FEDEX_INTERNATIONAL_STANDARD and UPS_GROUND.If using a custom rate, this property corresponds to the  field in  when you navigate to  &gt;  &gt; , and then click on an existing rate or on .
	*/
	public $shippingMethodCode;

	/**
	*The carrier-supplied name for the shipping service type, such as "UPS Ground" or "2nd Day Air".If using a custom rate, this property corresponds to the  field in  when you navigate to  &gt;  &gt; , and then click on an existing rate or on .
	*/
	public $shippingMethodName;

	/**
	*The shipping zone to which this rate applies.
	*/
	public $shippingZoneCode;

	/**
	*Custom data returned by the shipping service.
	*/
	public $data;

}

?>
