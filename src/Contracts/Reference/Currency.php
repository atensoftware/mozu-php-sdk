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
*	Three-letter currency code that the system supports, which is derived from the ISO 4217 standard. For example, the code "EUR" for the name "Euro Member Countries" is an entry that returns in a list of items.
*/
class Currency
{
	/**
	*3-letter ISO 4217 standard global currency code. Currently, only "USD" (US Dollar) is supported.
	*/
	public $code;

	/**
	*The user supplied name that appears in . You can use this field for identification purposes.
	*/
	public $name;

}

?>
