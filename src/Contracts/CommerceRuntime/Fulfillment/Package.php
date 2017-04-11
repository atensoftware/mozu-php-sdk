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



/**
*	Properties of a physical package shipped for an order.
*/
class Package
{
	/**
	*Available actions you can complete for an order. These actions may differ depending on the status of the order, such as actions required to enter a payment, return of a package, and fulfillment of a shipment.
	*/
	public $availableActions;

	/**
	*The code of the product to be fulfilled.
	*/
	public $code;

	/**
	*Date and time when a shipment completes fulfillment by delivery to a customer's physical address, picked up by a customer at a store, or delivered digitally for downloadable products.
	*/
	public $fulfillmentDate;

	/**
	*The code that identifies the location used to fulfill the cart/cart item or order/order item. This code can include physical store locations for in-store pickup, warehouse locations providing the products for shipment, or the location for the digital file(s).
	*/
	public $fulfillmentLocationCode;

	/**
	*If there is a shipping label present for this Package, this will be set to true
	*/
	public $hasLabel;

	/**
	*Unique identifier of the source property, such as a catalog, discount, order, or email template.For a product field it will be the name of the field.For a category ID, must be a positive integer not greater than 2000000. By default,  auto-generates a category ID when categories are created. If you want to specify an ID during creation (which preserves category link relationships when migrating tenant data from one sandbox to another), you must also include the  query string in the endpoint. For example, . Then, use the  property to specify the desired category ID.For a product attribute it will be the Attribute FQN.For a document, the ID must be specified as a 32 character, case-insensitive, alphanumeric string. You can specify the ID as 32 sequential characters or as groups separated by dashes in the format 8-4-4-4-12. For example, or.For email templates, the ID must be one of the following values:			
	*/
	public $id;

	/**
	*The package type associated with this physical package. Possible values include , , , , , , or .
	*/
	public $packagingType;

	/**
	*The read-only, system-generated ID of the shipment associated with the shipment. When a package is first created, it is not associated with a shipment. However, once the [CreatePackageShipments](https://www.mozu.com/docs/api/commerce/orders/operations/createpackageshipments.htm) operation runs, it creates a shipment for the package (and any other packages that are part of the shipment) and generates shipping labels.
	*/
	public $shipmentId;

	/**
	*The code associated with a carrier's shipping method service type, used during fulfillment of packages and shipments. Service type codes include a prefix that indicates the carrier. For example: FEDEX_INTERNATIONAL_STANDARD and UPS_GROUND.If using a custom rate, this property corresponds to the  field in  when you navigate to  &gt;  &gt; , and then click on an existing rate or on .
	*/
	public $shippingMethodCode;

	/**
	*The carrier-supplied name for the shipping service type, such as "UPS Ground" or "2nd Day Air".If using a custom rate, this property corresponds to the  field in  when you navigate to  &gt;  &gt; , and then click on an existing rate or on .
	*/
	public $shippingMethodName;

	/**
	*The current status of the object.This value is read only. Valid values for this field are: "Active", "Expired", and "Inactive".
	*/
	public $status;

	/**
	*Tracking number for the package or shipment, supplied by the shipping carrier to track the shipment until fulfillment completes. The tracking number format may differ between carriers.
	*/
	public $trackingNumber;

	/**
	*Identifier and datetime stamp information recorded when a user or application creates, updates, or deletes a resource entity. This value is system-supplied and read-only.
	*/
	public $auditInfo;

	/**
	*Collection (list or paged) of change messages logged for each modification made by a shopper to their carts, wishlists, orders, package, payment, pickup, and returns. Change log messages are system-supplied based on shopper actions and read only.
	*/
	public $changeMessages;

	/**
	*An array list of objects in the returned collection.
	*/
	public $items;

	/**
	*Dimensional properties (height, length, and width) of packages, products and bundles.
	*/
	public $measurements;

}

?>
