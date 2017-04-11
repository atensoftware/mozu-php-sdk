<?php

/*
* <auto-generated>
*     This code was generated by a Codezu.     
*
*     Changes to this file may cause incorrect behavior and will be lost if
*     the code is regenerated.
* </auto-generated>
*/


namespace Mozu\Api\Contracts\PricingRuntime\ThirdParty;



/**
*	Properties of an order for which to calculate tax. When a tax capability is enabled for a tenant,  sends the `TaxableOrder `properties to the capability as read-only, system-supplied information.
*/
class TaxableOrder
{
	/**
	*3-letter ISO 4217 standard global currency code. Currently, only "USD" (US Dollar) is supported.
	*/
	public $currencyCode;

	/**
	*The combined price for all handling costs calculated together for shipped orders, not for digital or in-store pickup. This includes all handling costs per the product line items and options, excluding taxes and discounts. 
	*/
	public $handlingFee;

	/**
	*The date and time the order was submitted for purchase. 
	*/
	public $orderDate;

	/**
	*The unique identifier of the original order, used to track order changes for tax purposes.
	*/
	public $originalDocumentCode;

	/**
	*The date and time the original order was placed. This date is set when the order is submitted with payment. 
	*/
	public $originalOrderDate;

	/**
	*The calculated monetary amount of shipping for a line items within and an entire order.
	*/
	public $shippingAmount;

	/**
	*The type of request for which to tax this entity, which is Order or Return.
	*/
	public $taxRequestType;

	/**
	*Collection of attributes that may be paged list or a list, depending on the usage per object and API type.
	*/
	public $attributes;

	/**
	*List of line items associated with the order.
	*/
	public $lineItems;

	/**
	*The tax properties associated with the order.
	*/
	public $taxContext;

}

?>
