<?php

/*
* <auto-generated>
*     This code was generated by a Codezu.     
*
*     Changes to this file may cause incorrect behavior and will be lost if
*     the code is regenerated.
* </auto-generated>
*/


namespace Mozu\Api\Contracts\ProductRuntime;



/**
*	The price of the product in the specified currency code (USD). This price can either be the sale price or the price for which the merchang intends to sell the product.
*/
class ProductPrice
{
	/**
	*The list price of the product in the catalog.
	*/
	public $catalogListPrice;

	/**
	*The sale price defined for the product in the catalog.
	*/
	public $catalogSalePrice;

	/**
	*The credit value of the product or bundled product. When the `goodsType `is `DigitalCredit`, this value is populated to indicate the value of the credit. This is used to create store credit in the fulfillment of gift cards.
	*/
	public $creditValue;

	/**
	*The price list code if a price list is applield to the product's pricing.
	*/
	public $effectivePricelistCode;

	/**
	*The manufacturer's suggested retail price (MSRP) for the product. This content may be defined by the supplier.
	*/
	public $msrp;

	/**
	*The price the merchant intends to charge for the product.
	*/
	public $price;

	/**
	*The price list entry code that controls the product pricing, if a price list is applied to the product pricing.
	*/
	public $priceListEntryCode;

	/**
	*The pricing mode of the price list entry, if a price list is applied to the product pricing.The valid values are:* * A value of  indicates the product has volume pricing.
	*/
	public $priceListEntryMode;

	/**
	*The price type that displays in the price field on product listing pages and product detail pages on the storefront.The valid values are:* * * 
	*/
	public $priceType;

	/**
	*The set sale price for a product consisting of a price with a discount already applied.For price list entries, this property is the product's sale price if the  is set to .
	*/
	public $salePrice;

	/**
	*The sale price type that displays in the sale price field on product listing pages and product detail pages on the storefront.The valid values are:* * * 
	*/
	public $salePriceType;

	/**
	*Name of the discount added and applied to a shopping cart and order for a shopper's purchase. 
	*/
	public $discount;

}

?>
