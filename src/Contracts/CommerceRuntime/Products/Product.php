<?php

/*
* <auto-generated>
*     This code was generated by a Codezu.     
*
*     Changes to this file may cause incorrect behavior and will be lost if
*     the code is regenerated.
* </auto-generated>
*/


namespace Mozu\Api\Contracts\CommerceRuntime\Products;



/**
*	Properties of a product set up in admin and added as an item in a cart or order.
*/
class Product
{
	/**
	*Allocation ID associated with this product on this order.
	*/
	public $allocationExpiration;

	/**
	*Allocation ID associated with this product on this order.
	*/
	public $allocationId;

	/**
	*The localized description in text for the object, displayed per the locale code. For example, descriptions are used for product descriptions, attributes, and pre-authorization transaction types.
	*/
	public $description;

	/**
	*Indicates if the discount is restricted. If true, the system cannot apply any discounts to this product. Discount restrictions are defined at the master catalog level. Client administrators cannot override discount restrictions at the catalog level, but they can limit the restriction to a defined time interval.For price list entries, specifies whether discounts are restricted for the specific entry if  is set to .Refer to [Discount Restriction](../../../guides/catalog/price-lists.htm#discountrestriction) in the Price Lists guides topic for more information.
	*/
	public $discountsRestricted;

	/**
	*The date and time on which the discount restriction period ends.
	*/
	public $discountsRestrictedEndDate;

	/**
	*The date and time on which the discount restriction period starts.
	*/
	public $discountsRestrictedStartDate;

	/**
	*Fulfillment status of the product.
	*/
	public $fulfillmentStatus;

	/**
	*List of supported types of fulfillment for the product or variation. The types include direct ship, in-store pickup, or both.
	*/
	public $fulfillmentTypesSupported;

	/**
	*The alternate image description defined for the product, in the language specified in the locale code for the storefront.
	*/
	public $imageAlternateText;

	/**
	*The URL link for the image file associated with a product or category.
	*/
	public $imageUrl;

	/**
	*Indicates if the product must be shipped alone in a container. This is used for products and products within a bundle. If true, this product cannot be shipped in a package with other items and must ship in a package by itself.
	*/
	public $isPackagedStandAlone;

	/**
	*Indicates if the product in a cart, order, or wish list is purchased on a recurring schedule. If true, the item can be purchased or fulfilled at regular intervals, such as a monthly billing cycle. For example, digital or physical product subscriptions are recurring cart items. This property is not used at this time and is reserved for future functionality.
	*/
	public $isRecurring;

	/**
	*Indicates if the item is subject to taxation, used by products, options, extras, cart and order items, line items, and wish lists. If true, the entity is subject to tax based on the relevant tax rate and rules.
	*/
	public $isTaxable;

	/**
	*The manufacturer's part number for the product.
	*/
	public $mfgPartNumber;

	/**
	*The user supplied name that appears in . You can use this field for identification purposes.
	*/
	public $name;

	/**
	*Merchant-created code that uniquely identifies the product such as a SKU or item number. Once created, the product code is read-only.
	*/
	public $productCode;

	/**
	*Unique identifier of the product reservation associated with the component product in a product bundle or item in a cart/order. System-supplied and read only.
	*/
	public $productReservationId;

	/**
	*A product type is like a product template.
	*/
	public $productType;

	/**
	*The usage type that applies to this product, which is Standard (a single product without configurable options), Configurable (a product that includes configurable option attributes), Bundle (a collection of products sold as a single entity), or Component (an invididual product that represents a component in a bundle).
	*/
	public $productUsage;

	/**
	*The universal product code (UPC) is the barcode defined for the product. The UPC is unique across all sales channels. 
	*/
	public $upc;

	/**
	*Merchant-created code associated with a specific product variation. Variation product codes maintain an association with the base product code.
	*/
	public $variationProductCode;

	/**
	*The type of goods in a bundled product. A bundled product is composed of products associated to sell together. Possible values include “Physical” and “DigitalCredit”. This comes from the `productType `of the product. Products are defaulted to a Physical `goodsType`. Gift cards have a `goodsType `of DigitalCredit.
	*/
	public $goodsType;

	/**
	*Properties of a collection of component products that make up a single product bundle with its own product code. Tenants can define product bundles for any product type that supports the Bundle product usage.
	*/
	public $bundledProducts;

	/**
	*The list of all categories associated with the product. These categories contain products, can have discounts associated, and define the grouping of products to display on the storefront.
	*/
	public $categories;

	/**
	*Dimensions of the packaged product.
	*/
	public $measurements;

	/**
	*List of option attributes configured for an object. These values are associated and used by products, product bundles, and product types.
	*/
	public $options;

	/**
	*The price of the product that appears on the storefront including any applied discounts.
	*/
	public $price;

	/**
	*Collection of property attributes defined for the object. Properties are associated to all objects within , including documents, products, and product types.
	*/
	public $properties;

}

?>
