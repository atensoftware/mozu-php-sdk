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
*	The localized product content in the language specified by the LocaleCode.
*/
class ProductLocalizedContent
{
	/**
	*Language used for the entity. Currently, only "en-US" is supported.
	*/
	public $localeCode;

	/**
	*Lengthy full description for a product description, displayed on product detail pages within the storefront.
	*/
	public $productFullDescription;

	/**
	*The name of the product that represents a line item in a taxable order or product bundle.
	*/
	public $productName;

	/**
	*Brief text description of the product or component in a product bundle, typically used when the product is displayed in a list or in search results.
	*/
	public $productShortDescription;

	/**
	*List of image files associated with a product. This content may include the image file URL, name, and other information as available.
	*/
	public $productImages;

}

?>
