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
*	Properties of a specific product variation.
*/
class ProductVariation
{
	/**
	*The difference between the base weight for a product and this variation of the product, which can be a positive or negative decimal value.
	*/
	public $deltaWeight;

	/**
	*Describes the types of fulfillment that are supported for this product variation. A variation can support direct ship, in-store pickup, or both. Supported fulfillment types are defined at the master catalog level. Client administrators cannot override the supported fulfillment types at the catalog level.
	*/
	public $fulfillmentTypesSupported;

	/**
	*If true, this variation of this product is marked available for sale.
	*/
	public $isActive;

	/**
	*If true, the production variation is no longer available for sale. For example, if a client stops selling all "small" shirts, all product variations with the "small" option are set to IsOrphan. System-supplied and read only.
	*/
	public $isOrphan;

	/**
	*The universal product code associated with the product variation. The UPC of a product is unique across all sales channels.
	*/
	public $upc;

	/**
	*If true, one or more product variations are configured for the specified product code.
	*/
	public $variationExists;

	/**
	*System-generated key that represents the attribute values that uniquely identify a specific product variation.
	*/
	public $variationkey;

	/**
	*Merchant-created code associated with a specific product variation. Variation product codes maintain an association with the base product code.
	*/
	public $variationProductCode;

	/**
	*The difference between the base price for the product and this variation of the product, which can be a positive or negative decimal value. For example, if the base price for a t-shirt product is $10, but the XL variation should cost $12, the DeltaPrice value should be "2". However, if the XS variation should only cost $8, the DeltaPrice value should be "-2".
	*/
	public $deltaPrice;

		public $localizedDeltaPrice;

	/**
	*Wrapper for the list of option attributes configured for the product variation.
	*/
	public $options;

	/**
	*Supplier-defined properties assigned for the product variation.
	*/
	public $supplierInfo;

}

?>