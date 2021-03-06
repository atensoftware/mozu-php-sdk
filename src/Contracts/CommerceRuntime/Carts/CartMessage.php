<?php

/*
* <auto-generated>
*     This code was generated by a Codezu.     
*
*     Changes to this file may cause incorrect behavior and will be lost if
*     the code is regenerated.
* </auto-generated>
*/


namespace Mozu\Api\Contracts\CommerceRuntime\Carts;



/**
*	Mozu.CommerceRuntime.Contracts.Carts.CartMessage ApiType DOCUMENT_HERE 
*/
class CartMessage
{
	/**
	*The text of the change message, such as "This product is no longer available." System-supplied and read-only.
	*/
	public $message;

	/**
	*Specifies the cart message type.
	*/
	public $messageType;

	/**
	*An array of product details for any products that have been removed from the cart.
	*/
	public $productsRemoved;

}

?>
