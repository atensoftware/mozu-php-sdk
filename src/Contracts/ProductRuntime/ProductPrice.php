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
	*The manufacturer's suggested retail price for the product. This content may be defined by the supplier.
	*/
	public $msrp;

	/**
	*The price the merchant intends to charge for the product.
	*/
	public $price;

	/**
	*The price type that displays on the storefront website for the Price field, which is List, MAP, or CatalogSalePrice
	*/
	public $priceType;

	/**
	*The set sale price for a product consisting of a price with a discount already applied.
	*/
	public $salePrice;

	/**
	*The price type that displays on the storefront website for the Sale Price field, which is CatalogSalePrice, DiscountedList, or DiscountedCatalogSalePrice
	*/
	public $salePriceType;

	/**
	*Name of the discount added and applied to a shopping cart and order for a shopper's purchase. 
	*/
	public $discount;

}

?>