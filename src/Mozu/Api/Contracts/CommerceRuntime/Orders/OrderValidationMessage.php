<?php

/*
* <auto-generated>
*     This code was generated by a Codezu.     
*
*     Changes to this file may cause incorrect behavior and will be lost if
*     the code is regenerated.
* </auto-generated>
*/


namespace Mozu\Api\Contracts\CommerceRuntime\Orders;



/**
*	Properties of a message returned by an order validation capability for the order specified in the request.
*/
class OrderValidationMessage
{
	/**
	*The body of the message returned by the order validation capability.
	*/
	public $message;

	/**
	*The type of message returned by the order validation capability, such as "Fraud Score."
	*/
	public $messageType;

	/**
	*Unique identifier of the order item associated with the validation message.
	*/
	public $orderItemId;

}

?>