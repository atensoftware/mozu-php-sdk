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
*	Mozu.ProductAdmin.Contracts.CouponSet ApiType DOCUMENT_HERE 
*/
class CouponSet
{
	/**
	*The total number of discounts assigned to or associated with this coupon set. When you perform a GetCouponSet or GetCouponSets operation, set the includeCounts operation parameter to true to view this field. This field is read only.
	*/
	public $assignedDiscountCount;

	/**
	*Specifies whether the coupon set can be deleted. You cannot delete a coupon set if any of the coupons within the coupon set have been redeemed. This value is read only.
	*/
	public $canBeDeleted;

	/**
	*The total number of coupon codes within the coupon set. When you perform a GetCouponSet or GetCouponSets operation, set the includeCounts operation parameter to true to view this field.  This field is read only.
	*/
	public $couponCodeCount;

	/**
	*Determines whether the coupon set is a manual coupon set or a generated coupon set.Valid values for this field are: "Generated" and "Manual".
	*/
	public $couponCodeType;

	/**
	*The unique identifier of the coupon set. This value is also used as the coupon code prefix in generated coupon sets. If you specify a value, it must be unique to the catalog.  If you leave this field empty or null,  generates one. Use the GetUniqueCouponSetCode operation to retrieve a unique, random four character code.This value has a maximum length of 32. This value is required.
	*/
	public $couponSetCode;

	/**
	*The date and time in UTC format that the coupon set and the coupon codes in the coupon set expire.
	*/
	public $endDate;

	/**
	*Unique identifier of the source property, such as a catalog, discount, order, or email template.For a product field it will be the name of the field.For a category ID, must be a positive integer not greater than 2000000. By default,  auto-generates a category ID when categories are created. If you want to specify an ID during creation (which preserves category link relationships when migrating tenant data from one sandbox to another), you must also include the  query string in the endpoint. For example, . Then, use the  property to specify the desired category ID.For a product attribute it will be the Attribute FQN.For a document, the ID must be specified as a 32 character, case-insensitive, alphanumeric string. You can specify the ID as 32 sequential characters or as groups separated by dashes in the format 8-4-4-4-12. For example, or.For email templates, the ID must be one of the following values:			
	*/
	public $id;

	/**
	*The maximum number of times any coupon code in the coupon set can be used. This value must be either null, greater than or equal to 1, or -1. A value of -1 indicates unlimited.If you leave this value null,  defaults this value to 1 when you create the coupon set.
	*/
	public $maxRedemptionsPerCouponCode;

	/**
	*The maximum number of times any single shopper can redeem any coupon code in the coupon set. This value must be either null, greater than or equal to 1, or -1. A value of -1 indicates unlimited.If you leave this value null,  defaults this value to 1 when you create the coupon set.
	*/
	public $maxRedemptionsPerUser;

	/**
	*The user supplied name that appears in . You can use this field for identification purposes.
	*/
	public $name;

	/**
	*The total number of all redeemed coupons within the coupon set. When you perform a GetCouponSet or GetCouponSets operation, set the includeCounts operation parameter to true to view this field.This field is read only.
	*/
	public $redemptionCount;

	/**
	*The number of coupon codes within the coupon set.This value is required when couponCodeType is "Generated".
	*/
	public $setSize;

	/**
	*The date and time in UTC format that the coupon codes in the coupon set become active.
	*/
	public $startDate;

	/**
	*The current status of the object.This value is read only. Valid values for this field are: "Active", "Expired", and "Inactive".
	*/
	public $status;

	/**
	*Basic audit info about the object, including date, time, and user account. This data may be captured when creating, updating, and removing data.
	*/
	public $auditInfo;

}

?>
