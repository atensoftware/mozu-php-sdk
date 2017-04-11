<?php

/*
* <auto-generated>
*     This code was generated by a Codezu.     
*
*     Changes to this file may cause incorrect behavior and will be lost if
*     the code is regenerated.
* </auto-generated>
*/


namespace Mozu\Api\Contracts\Customer;



/**
*	The details of the purchase order payment transaction.
*/
class PurchaseOrderTransaction
{
	/**
	*Additional transaction details or notes associated with the transaction.
	*/
	public $additionalTransactionDetail;

	/**
	*The author of the purchase order transaction.
	*/
	public $author;

	/**
	*The available balance the customer has on their purchase order account. This balance is the result of the  minus the customer's total amount due.
	*/
	public $availableBalance;

	/**
	*The total credit limit the customer can spend using purchase orders.
	*/
	public $creditLimit;

	/**
	*The unique identifier of the customer purchase order account.
	*/
	public $customerPurchaseOrderAccountId;

	/**
	*Unique identifier used by an external program to identify a  order, customer account, or wish list.
	*/
	public $externalId;

	/**
	*Unique identifier of the order associated with the payment.
	*/
	public $orderId;

	/**
	*The purchase order number.
	*/
	public $purchaseOrderNumber;

	/**
	*Unique identifier for the site. This ID is used at all levels of a store, catalog, and tenant to associate objects to a site.
	*/
	public $siteId;

	/**
	*Unique identifier for the tenant.
	*/
	public $tenantId;

	/**
	*The amount of the purchase order transaction.
	*/
	public $transactionAmount;

	/**
	*The date when the purchase order transaction was made on a purchase order account.
	*/
	public $transactionDate;

	/**
	*A description of the purchase order transaction type.This field is read-only dependent on the value of .* * * * * * 
	*/
	public $transactionDescription;

	/**
	*The type of the purchase order transaction.The valid values are:*  — Line of Credit Change*  — Payment Requested*  — Payment Collected *  — Payment Voided*  — Payment Refund*  — Manual Adjustment
	*/
	public $transactionTypeId;

	/**
	*Basic audit info about the object, including date, time, and user account. This data may be captured when creating, updating, and removing data.
	*/
	public $auditInfo;

}

?>
