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
*	The details of the account password.
*/
class AccountPasswordInfo
{
	/**
	*Unique identifier of the customer account generated by the system. Account IDs are generated at account creation.
	*/
	public $accountId;

	/**
	*Indicates to unlock the Account
	*/
	public $unlockAccount;

	/**
	*The Old and New Password for the Account
	*/
	public $passwordInfo;

}

?>
