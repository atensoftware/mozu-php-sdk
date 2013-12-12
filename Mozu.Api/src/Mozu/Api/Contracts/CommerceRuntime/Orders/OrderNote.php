<?php

/*
* <auto-generated>
*     This code was generated by a tool.     
*
*     Changes to this file may cause incorrect behavior and will be lost if
*     the code is regenerated.
* </auto-generated>
*/


namespace Mozu\Api\Contracts\CommerceRuntime\Orders;



/**
*	Properties of an order note for a merchant, which is internal only for administrative purposes and not available to the shopper.
*/
class OrderNote
{
	/**
	*Unique identifier of the order note.
	*/
	public $id;

	/**
	*The text content of the order note.
	*/
	public $text;

	/**
	*Identifier and datetime stamp information recorded when a user or application creates, updates, or deletes a resource entity. This value is system-supplied and read-only.
	*/
	public $auditInfo;

}

?>