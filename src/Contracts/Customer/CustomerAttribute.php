<?php

/*
* <auto-generated>
*     This code was generated by a Codezu.     
*
*     Changes to this file may cause incorrect behavior and will be lost if
*     the code is regenerated.
* </auto-generated>
*/


namespace Mozu\Api\Contracts\Customer;



/**
*	Properties of an attribute associated with a customer account.
*/
class CustomerAttribute
{
	/**
	*Unique identifier of the attribute definition.
	*/
	public $attributeDefinitionId;

	/**
	*The fully qualified name of the attribute, which is a user defined attribute identifier.
	*/
	public $fullyQualifiedName;

	/**
	*List of value data for objects.
	*/
	public $values;

	/**
	*Identifier and datetime stamp information recorded when a user or application creates, updates, or deletes a resource entity. This value is system-supplied and read-only.
	*/
	public $auditInfo;

}

?>
