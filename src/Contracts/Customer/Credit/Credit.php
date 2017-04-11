<?php

/*
* <auto-generated>
*     This code was generated by a Codezu.     
*
*     Changes to this file may cause incorrect behavior and will be lost if
*     the code is regenerated.
* </auto-generated>
*/


namespace Mozu\Api\Contracts\Customer\Credit;



/**
*	Properties of the store credit of gift card applied to a customer account. At this time, gift card functionality is reserved for future use.
*/
class Credit
{
	/**
	*The date and time the store credit or gift card was activated by the shopper. Credits cannot be used until activated. After the credit is activated, this property value is read-only.
	*/
	public $activationDate;

	/**
	*User-defined identifier of the credit, which is unique within the tenant.
	*/
	public $code;

	/**
	*The type of customer credit, which is "GiftCard" or "StoreCredit".
	*/
	public $creditType;

	/**
	*3-letter ISO 4217 standard global currency code. Currently, only "USD" (US Dollar) is supported.
	*/
	public $currencyCode;

	/**
	*The current remaining balance of the credit applied to the customer account.
	*/
	public $currentBalance;

	/**
	*Unique identifier of the customer in , used to associate customers with data, orders, returns, and in-store credit.
	*/
	public $customerId;

	/**
	*Date and time in UTC format when a discount, credit, wish list, or cart expires. An expired discount no longer can be redeemed. An expired wish list is no longer available. An expired credit can no longer be redeemed for a purchase. Acart becomes inactive and expired based on a system-calculated interval. For example, if an anonymous shopper has 14 days of inactivity, the cart is considered abandoned after that period of inactivity. System-supplied and read-only.
	*/
	public $expirationDate;

	/**
	*The initial balance of the credit applied to the customer account. This value cannot be changed after it is set.
	*/
	public $initialBalance;

	/**
	*Identifier and datetime stamp information recorded when a user or application creates, updates, or deletes a resource entity. This value is system-supplied and read-only.
	*/
	public $auditInfo;

}

?>
