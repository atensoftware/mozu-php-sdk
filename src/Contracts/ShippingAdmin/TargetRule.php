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
*	Mozu.ShippingAdmin.Contracts.TargetRule ApiType DOCUMENT_HERE 
*/
class TargetRule
{
	/**
	*The user defined code for this rule must be unique
	*/
	public $code;

	/**
	*The localized description in text for the object, displayed per the locale code. For example, descriptions are used for product descriptions, attributes, and pre-authorization transaction types.
	*/
	public $description;

	/**
	*The domain associated with the site and/or tenant.
	*/
	public $domain;

	/**
	*the expression of this rule
	*/
	public $expression;

}

?>
