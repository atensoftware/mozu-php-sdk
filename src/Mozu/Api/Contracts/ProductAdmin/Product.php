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
*	Properties of a product in a master catalog. Product properties include discounts, localizable content, inventory information, attribute configurations, price data, and the catalogs associated with a product.
*/
class Product
{
	/**
	*Product code defined by the tenant administrator to use as a base prefix when generating product codes for any variations of this product.
	*/
	public $baseProductCode;

	/**
	*Describes the types of fulfillment that are supported for this product. A product can support direct ship, in-store pickup, or both. Supported fulfillment types are defined at the master catalog level. Client administrators cannot override the supported fulfillment types at the catalog level.
	*/
	public $fulfillmentTypesSupported;

	/**
	*If true, the product has configurable options. This option means that a product is not purchasable until the shopper selects options that resolve into a product variation. Configurable options for a product are the choices a shopper makes when ordering a product. Size and color are configurable options. System-supplied and read-only.
	*/
	public $hasConfigurableOptions;

	/**
	*If true, this product has standalone options that a shopper can select without configuring a defined product variations. System-supplied and read only.
	*/
	public $hasStandAloneOptions;

	/**
	*If true, the product must be packaged on its own and should not be jointly packaged with other products.
	*/
	public $isPackagedStandAlone;

	/**
	*If true, the product can be purchased or fulfilled at regular intervals such as a monthly billing cycle or a digital or physical subscription. This property is reserved for future functionality and is system-supplied and read only.
	*/
	public $isRecurring;

	/**
	*If true, the entity is subject to sales tax based on the relevant tax rate.
	*/
	public $isTaxable;

	/**
	*If true, this product is valid for the assigned product type.
	*/
	public $isValidForProductType;

	/**
	*If true, this configured product represents a product variation defined with configurable options. System-supplied and read only.
	*/
	public $isVariation;

	/**
	*The unique identifier of the master catalog associated with the entity.
	*/
	public $masterCatalogId;

	/**
	*Merchant-created code that uniquely identifies the product such as a SKU or item number. Once created, the product code is read-only.
	*/
	public $productCode;

	/**
	*Integer that represents the sequential order of the product.
	*/
	public $productSequence;

	/**
	*Unique identifier of the product type assigned for this product. Tenant administrators can only define one product type per product.
	*/
	public $productTypeId;

	/**
	*The usage type that applies to this product, which is Standard (a single product without configurable options), Configurable (a product that includes configurable option attributes), Bundle (a collection of products sold as a single entity), or Component (an invididual product that represents a component in a bundle).
	*/
	public $productUsage;

	/**
	*Identifier of the shipping class.
	*/
	public $shippingClassId;

	/**
	*If the product must be packaged separately, the type of standalone package to use.
	*/
	public $standAlonePackageType;

	/**
	*The universal product code associated with the product. The UPC of a product is unique across all sales channels.
	*/
	public $upc;

	/**
	*System-generated key that represents the attribute values that uniquely identify a specific product variation.
	*/
	public $variationKey;

	/**
	*List of discounts available for a product.
	*/
	public $applicableDiscounts;

	/**
	*Identifier and datetime stamp information recorded when a user or application creates, updates, or deletes a resource entity. This value is system-supplied and read-only.
	*/
	public $auditInfo;

	/**
	*Properties of a collection of component products that make up a single product bundle with its own product code. Tenants can define product bundles for any product type that supports the Bundle product usage.
	*/
	public $bundledProducts;

		public $content;

	/**
	*List of extra product attributes defined for this product.
	*/
	public $extras;

	/**
	*Properties of the inventory levels manages for the product.
	*/
	public $inventoryInfo;

	/**
	*List of option product attributes defined for this product.
	*/
	public $options;

	/**
	*Height of the package in imperial units of feet and inches.
	*/
	public $packageHeight;

	/**
	*Length of the package in imperial units of feet and inches.
	*/
	public $packageLength;

	/**
	*Weight of the package in imperial units of pounds and ounces.
	*/
	public $packageWeight;

	/**
	*Width of the package in imperial units of feet and inches.
	*/
	public $packageWidth;

	/**
	*Unit price that the client intends to sell the product if no sale price is set.
	*/
	public $price;

	/**
	*Describes the behavior the system uses when determining the price of the product.
	*/
	public $pricingBehavior;

	/**
	*Properties defined for a product as they appear in its associated catalogs.
	*/
	public $productInCatalogs;

	/**
	*List of property product attributes defined for this product.
	*/
	public $properties;

	/**
	*Properties of the product publishing settings for the associated product.
	*/
	public $publishingInfo;

	/**
	*The search engine optimized content defined for this product.
	*/
	public $seoContent;

	/**
	*Supplier-defined properties assigned for the product.
	*/
	public $supplierInfo;

	/**
	*The list of product variation configurations defined for this product based on its available product option attributes.
	*/
	public $variationOptions;

}

?>