<?php

/*
* <auto-generated>
*     This code was generated by a Codezu.     
*
*     Changes to this file may cause incorrect behavior and will be lost if
*     the code is regenerated.
* </auto-generated>
*/


namespace Mozu\Api\Contracts\Reference;



/**
*	A property that is a wrapper for additional properties pertaining to the schema such as the type, label, any associated data, an ID, and the order of the response.
*/
class Field
{
	/**
	*Unique identifier of the source product property. For a product field it will be the name of the field. For a product attribute it will be the Attribute FQN. 
	*/
	public $id;

	/**
	*Descriptive text used as a label for objects, such as field names, facets, date ranges, contact information, and package information.
	*/
	public $label;

	/**
	*Integer that represents the sequence order of the attribute.
	*/
	public $order;

	/**
	*Type of field.
	*/
	public $type;

	/**
	*Data for the field property.
	*/
	public $data;

}

?>
