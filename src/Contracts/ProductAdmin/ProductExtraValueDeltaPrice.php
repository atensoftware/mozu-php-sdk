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
*	The properties of the price difference between the product extra and the base product.
*/
class ProductExtraValueDeltaPrice
{
	/**
	*3-letter ISO 4217 standard global currency code. Currently, only "USD" (US Dollar) is supported.
	*/
	public $currencyCode;

	/**
	*The difference between associated prices for a product, variation option, or extra. The difference is calculated by subtracting the base price from the associated price with this product, option, and/or extra. For example, if a product with a defined monogram extra costs an additional $10, the `deltaPrice `value is "10". Between options, a price for a medium may be $10 and a large $12 giving a `deltaPrice `value of "2".
	*/
	public $deltaPrice;

}

?>