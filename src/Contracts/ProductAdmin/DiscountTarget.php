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
*	Properties of the target to which the discount applies, such as the type of discount and which products, categories, or shipping methods are eligible for the discount and the properties of this discount target.
*/
class DiscountTarget
{
	/**
	*Determines which way the discount is optimized. Consumers favor(default - false/null) or tenants favor (when this is set to true) Applies to discounts where target is not a specific product or list of products. May also impact behavior of Buy X Get Y so that X is the most expensive items and Y the least expensive.
	*/
	public $appliesToLeastExpensiveProductsFirst;

	/**
	*The operator to use on the excludedCategories field. Valid values are: "All" and "Any".
	*/
	public $excludedCategoriesOperator;

	/**
	*Prevents order scoped discounts from layering over items that already have a product discount with the same type.
	*/
	public $excludeItemsWithExistingProductDiscounts;

	/**
	*Prevents order scoped discounts from layering over items that already have a shipping discount with the same type.
	*/
	public $excludeItemsWithExistingShippingDiscounts;

	/**
	*If true, the target discount applies to all products sold on the site, regardless of product category.
	*/
	public $includeAllProducts;

	/**
	*The operator of the includedCategories field.Valid values are: "All" and "Any".
	*/
	public $includedCategoriesOperator;

	/**
	*When a condition is specified, this property limits the number of items that are targeted for each discount redemption with an order. If multiple redemptions are allowed for each order then multiples of this value are allowed in multiples of the associated condition. If no condition is specified, then this value is not used. If null and condition exists, then defaults to 1.
	*/
	public $maximumQuantityPerRedemption;

	/**
	*Properties of the object to which this discount is targeted, which can be Product or Shipping. If the discount type is Product, the target properties describe the product or product categories to which the discount applies. If the discount type is Shipping, the target properties describe the shipping methods eligible for the discount.
	*/
	public $type;

	/**
	*The list of all categories associated with the product. These categories contain products, can have discounts associated, and define the grouping of products to display on the storefront.
	*/
	public $categories;

	/**
	*List of the product categories that are not eligible for the discount.
	*/
	public $excludedCategories;

	/**
	*List of products that are not eligible for the discount.
	*/
	public $excludedProducts;

	/**
	*List of product codes that represent the products to which the discount can apply.
	*/
	public $products;

	/**
	*The list of shipping method codes that represents the shipping service types to which the discount can apply.
	*/
	public $shippingMethods;

	/**
	*The list of shipping zones that are applicable for this discount.
	*/
	public $shippingZones;

}

?>
