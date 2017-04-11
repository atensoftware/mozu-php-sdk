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
*	The details of the product variation localized price.
*/
class ProductVariationFixedPrice
{
	/**
	*The credit value of the product or bundled product. When the `goodsType `is `DigitalCredit`, this value is populated to indicate the value of the credit. This is used to create store credit in the fulfillment of gift cards.
	*/
	public $creditValue;

	/**
	*The localized currency code for the monetary amount. 
	*/
	public $currencyCode;

	/**
	*If the product is in explicit pricing mode, this is the list price of the variation.
	*/
	public $listPrice;

	/**
	*The manufacturer's suggested retail price (MSRP) for the product. This content may be defined by the supplier.
	*/
	public $msrp;

	/**
	*The set sale price for a product consisting of a price with a discount already applied.For price list entries, this property is the product's sale price if the  is set to .
	*/
	public $salePrice;

}

?>
