<?php

/*
* <auto-generated>
*     This code was generated by a Codezu.     
*
*     Changes to this file may cause incorrect behavior and will be lost if
*     the code is regenerated.
* </auto-generated>
*/


namespace Mozu\Api\Contracts\ShippingAdmin;



/**
*	Properties of a shipping carrier-specific setting associated with a carrier configuration.
*/
class Setting
{
	/**
	*Key used for metadata defined for objects, including extensible attributes, custom attributes associated with a shipping provider, and search synonyms definitions. This content may be user-defined depending on the object and usage.For search synonym definitions, refer to [Synonym Expansion Types](https://www.mozu.com/docs/Developer/api-guides/search-settings.htm#synonym_expansion_types) for more information about the key usage.
	*/
	public $key;

	/**
	*The value of a property, used by numerous objects within  including facets, attributes, products, localized content, metadata, capabilities ( and third-party), location inventory adjustment, and more. The value may be a string, integer, or double. Validation may be run against the entered and saved values depending on the object type.
	*/
	public $value;

	/**
	*Identifier and datetime stamp information recorded when a user or application creates, updates, or deletes a resource entity. This value is system-supplied and read-only.
	*/
	public $auditInfo;

	/**
	*Descriptive text used as a label for objects, such as field names, facets, date ranges, contact information, and package information.
	*/
	public $label;

}

?>
