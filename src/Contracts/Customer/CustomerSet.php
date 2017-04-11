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
*	The details of the customer set.
*/
class CustomerSet
{
	/**
	*The unique identifier of the customer set.
	*/
	public $code;

	/**
	*The localized description in text for the object, displayed per the locale code. For example, descriptions are used for product descriptions, attributes, and pre-authorization transaction types.
	*/
	public $description;

	/**
	*Indicates if the object is default. This indicator is used for product variations and site search settings. If true, the value/object is the default option.
	*/
	public $isDefault;

	/**
	*The user supplied name that appears in . You can use this field for identification purposes.
	*/
	public $name;

	/**
	*A collection of aggregate information about the customer set, including the amount of sites and customers assocaited with the customer set.
	*/
	public $aggregateInfo;

	/**
	*Basic audit info about the object, including date, time, and user account. This data may be captured when creating, updating, and removing data.
	*/
	public $auditInfo;

	/**
	*Collection of sites associated with the tenant.
	*/
	public $sites;

}

?>
