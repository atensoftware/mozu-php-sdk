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
*	Discount used to calculate SalePrice. Includes coupon code if applicable, amount of the discount, and discount savings. Discounts can be either an absolute price or a percentage off. The sale price beats any discounts.
*/
class Discount
{
	/**
	*The integer amount of the discount. For example, an entry of "10" could represent a discount of $10.00 or a discount of 10%, depending on the type.
	*/
	public $amount;

	/**
	*The type of discount amount, such as an amount or a percentage.
	*/
	public $amountType;

	/**
	*The number of times this discount has been redeemed.
	*/
	public $currentRedemptionCount;

	/**
	*If true, this discount does not apply to a line item product with a defined sale price. The default is false, which applies the discount to products with and without defined sale prices.
	*/
	public $doesNotApplyToSalePrice;

	/**
	*Unique identifier of the discount.
	*/
	public $id;

	/**
	*The maximum number of times an individual shopper can redeem the discount.
	*/
	public $maximumUsesPerUser;

	/**
	*The scope to which the discount applies, which is "Order" for order discounts or "LineItem" for individual product discounts.
	*/
	public $scope;

	/**
	*Current status of the product discount. Possible values are "Active", "Scheduled", or "Expired".
	*/
	public $status;

	/**
	*Identifier and datetime stamp information recorded when a user or application creates, updates, or deletes a resource entity. This value is system-supplied and read-only.
	*/
	public $auditInfo;

	/**
	*List of conditions that must be met for the discount to apply.
	*/
	public $conditions;

	/**
	*Complex type that contains content for a language specified by LocaleCode.
	*/
	public $content;

	/**
	*Properties of the target object to which the discount applies, such as a product or an order.
	*/
	public $target;

}

?>