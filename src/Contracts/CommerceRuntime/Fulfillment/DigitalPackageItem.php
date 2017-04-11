<?php

/*
* <auto-generated>
*     This code was generated by a Codezu.     
*
*     Changes to this file may cause incorrect behavior and will be lost if
*     the code is regenerated.
* </auto-generated>
*/


namespace Mozu\Api\Contracts\CommerceRuntime\Fulfillment;



class DigitalPackageItem
{
	/**
	*This specifies the fulfillment type of digital package item.
	*/
	public $fulfillmentItemType;

	/**
	*Specifies the gift card code for the digital package item.
	*/
	public $giftCardCode;

	/**
	*The line id associated with the fulfillment.
	*/
	public $lineId;

	/**
	*Fully qualified name of the selected option's attribute. Bundledproducts result from a static bundle or are dynamically added as a result of the shopper selecting products as extras. When the bundled item is dynamic, it includes the attribute's fully qualified name of the extra that it came from. When `optionAttributeFQN `is null, the bundled item was statically defined. When not null, the item came from an extra selection.
	*/
	public $optionAttributeFQN;

	/**
	*The unique, user-defined product code of a product, used throughout  to reference and associate to a product.
	*/
	public $productCode;

	/**
	*The specified quantity of objects and items. This property is used for numerous object types including products, options, components within a product bundle, cart and order items, returned items, shipping line items, items in a digital product. and items associated with types and reservations.
	*/
	public $quantity;

}

?>
