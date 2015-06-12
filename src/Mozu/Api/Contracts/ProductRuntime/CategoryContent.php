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
*	Localized page content for a product category.
*/
class CategoryContent
{
	/**
	*The localized description in text for the object, displayed per the locale code. For example, descriptions are used for product descriptions, attributes, and pre-authorization transaction types.
	*/
	public $description;

	/**
	*Description defined for metadata, used to interally manage data, in the language specified by the `localeCode`. This content is used by categories, products, localized content, and SEO content.
	*/
	public $metaTagDescription;

	/**
	*Keywords defined for  metadata, used to internally manage data, in the language specified by the `localeCode`. Keywords are used by content for categories, products, localized content, and SEO content.
	*/
	public $metaTagKeywords;

	/**
	*Title defined for  metadata, used to internally manage data, in the language specified by the `localeCode`. Titles are used by content for categories, products, localized content, and SEO content.
	*/
	public $metaTagTitle;

	/**
	*The display name of the source product property. For a product field it will be the display name of the field. For a product attribute it will be the Attribute Name.
	*/
	public $name;

	/**
	*Title that appears on new product category pages, in the language specified by the `localeCode`.
	*/
	public $pageTitle;

	/**
	*Slug is used in place of a name, code, or ID to give an SEO, human-friendly URL link for an object, used by categories.
	*/
	public $slug;

	/**
	*Array list of media images associated to a product category. These images may be localized in the language specified by the LocaleCode. Images display with the category on the storefront according to the code and formatting of your site theme. Each image includes the name, alt text, and URL location.
	*/
	public $categoryImages;

}

?>
