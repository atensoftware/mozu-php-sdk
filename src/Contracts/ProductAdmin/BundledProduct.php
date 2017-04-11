<?php

/*
* <auto-generated>
*     This code was generated by a Codezu.     
*
*     Changes to this file may cause incorrect behavior and will be lost if
*     the code is regenerated.
* </auto-generated>
*/


namespace Mozu\Api\Contracts\ProductAdmin;



/**
*	Properties of a component product in a product bundle. A product bundle can represent either a collection of multiple products sold as a single entity, or a collection of the same product sold as a package. For example, a 10-pack of socks.
*/
class BundledProduct
{
	/**
	*List of supported types of fulfillment for the product or variation. The types include direct ship, in-store pickup, or both.
	*/
	public $fulfillmentTypesSupported;

	/**
	*Merchant-created code that uniquely identifies the product such as a SKU or item number. Once created, the product code is read-only.
	*/
	public $productCode;

	/**
	*The name of the product that represents a line item in a taxable order or product bundle.
	*/
	public $productName;

	/**
	*The specified quantity of objects and items. This property is used for numerous object types including products, options, components within a product bundle, cart and order items, returned items, shipping line items, items in a digital product. and items associated with types and reservations.
	*/
	public $quantity;

	/**
	*Height of a package or bundle package in imperial units of feet and inches.
	*/
	public $packageHeight;

	/**
	*Length of a package or bundle package in imperial units of feet and inches.
	*/
	public $packageLength;

	/**
	*Weight of a package or bundle package in imperial units of pounds and ounces.
	*/
	public $packageWeight;

	/**
	*Width of a package or bundle package in imperial units of feet and inches.
	*/
	public $packageWidth;

	/**
	*The price of the bundled product set for the tenant.
	*/
	public $price;

}

?>
