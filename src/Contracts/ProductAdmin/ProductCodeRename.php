<?php

/*
* <auto-generated>
*     This code was generated by a Codezu.     
*
*     Changes to this file may cause incorrect behavior and will be lost if
*     the code is regenerated.
* </auto-generated>
*/


namespace Mozu\Api\Contracts\ProductAdmin;



/**
*	Properties for a product code current and changed content.
*/
class ProductCodeRename
{
	/**
	*The existing product code to be changed.
	*/
	public $existingProductCode;

	/**
	*The new product code for the product. This code must be unique across all catalogs.
	*/
	public $newProductCode;

}

?>
