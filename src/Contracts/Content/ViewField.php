<?php

/*
* <auto-generated>
*     This code was generated by a Codezu.     
*
*     Changes to this file may cause incorrect behavior and will be lost if
*     the code is regenerated.
* </auto-generated>
*/


namespace Mozu\Api\Contracts\Content;



/**
*	Field within a view of the content.
*/
class ViewField
{
	/**
	*The user supplied name that appears in . You can use this field for identification purposes.
	*/
	public $name;

	/**
	*Targets represent the object, such as an item to apply discounts to(products or orders) or a view field for content. Targets are the dot notations that link to the source document property. For example, firstitem for the direct level or firstitem.seconditem.thirditem for a deeper property.
	*/
	public $target;

}

?>
