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
*	Mozu.ProductRuntime.Contracts.VariationOption ApiType DOCUMENT_HERE 
*/
class VariationOption
{
	/**
	*The fully qualified name of the attribute. The attributeDefiniteId may be used to generate this name.
	*/
	public $attributeFQN;

	/**
	*The value of a property, used by numerous objects within  including facets, attributes, products, localized content, metadata, capabilities ( and third-party), location inventory adjustment, and more. The value may be a string, integer, or double. Validation may be run against the entered and saved values depending on the object type.
	*/
	public $value;

	/**
	*The number that denotes the order of the entity value within a list of entity values.
	*/
	public $valueSequence;

}

?>
