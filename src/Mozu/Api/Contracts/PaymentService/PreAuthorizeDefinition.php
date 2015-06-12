<?php

/*
* <auto-generated>
*     This code was generated by a Codezu.     
*
*     Changes to this file may cause incorrect behavior and will be lost if
*     the code is regenerated.
* </auto-generated>
*/


namespace Mozu\Api\Contracts\PaymentService;



/**
*	Definition of the preauthorization gateway.
*/
class PreAuthorizeDefinition
{
	/**
	*Unique identifier of the source product property. For a product field it will be the name of the field. For a product attribute it will be the Attribute FQN. 
	*/
	public $id;

	/**
	*The product environment URL associated with the preauthorization gateway.
	*/
	public $preAuthorizeProdUrl;

	/**
	*The test environment URL associated with the preauthorization gateway.
	*/
	public $preAuthorizeTestUrl;

	/**
	*The type of preauthorization gateway.
	*/
	public $type;

}

?>
