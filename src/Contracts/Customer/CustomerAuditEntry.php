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
*	Mozu.Customer.Contracts.CustomerAuditEntry ApiType DOCUMENT_HERE 
*/
class CustomerAuditEntry
{
	/**
	*Applicattion associated with this entry
	*/
	public $application;

	/**
	*Unique identifer of the customer account. This ID is used to associate numerous types of data and object with the customer account, including orders, returns, wish lists, and in-store credit.
	*/
	public $customerAccountId;

	/**
	*Id of this entry
	*/
	public $customerAuditEntryId;

	/**
	*The localized description in text for the object, displayed per the locale code. For example, descriptions are used for product descriptions, attributes, and pre-authorization transaction types.
	*/
	public $description;

	/**
	*Date of the Entry
	*/
	public $entryDate;

	/**
	*User ID associated with this Entry
	*/
	public $entryUser;

	/**
	*Path of the field value being changed (e.g. /Customer/Contacts/1/FirstName)
	*/
	public $fieldPath;

	/**
	*New Value after this event
	*/
	public $newValue;

	/**
	*Original value before this event
	*/
	public $oldValue;

	/**
	*Site associated wit this entry
	*/
	public $site;

}

?>
