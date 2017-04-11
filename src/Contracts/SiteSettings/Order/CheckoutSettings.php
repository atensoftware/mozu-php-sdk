<?php

/*
* <auto-generated>
*     This code was generated by a Codezu.     
*
*     Changes to this file may cause incorrect behavior and will be lost if
*     the code is regenerated.
* </auto-generated>
*/


namespace Mozu\Api\Contracts\SiteSettings\Order;



/**
*	Settings used when checking out an active order.
*/
class CheckoutSettings
{
	/**
	*Settings for the checkout login. Choose whether or not shoppers must first login before a purchase can be processed. Choose the option for guests to purchase without logging in, prompt guests to login, or require them to login before a purchase can be completed.
	*/
	public $customerCheckoutSettings;

	/**
	*Credit card payment authorization setting defined for the site for order processing.
	*/
	public $orderProcessingSettings;

	/**
	*Payment gateway settings defined for the site. A payment gateway is an eCommerce application service provider that authorizes payments for eBusinesses, online retailers, and other stores that have an online commerce component.
	*/
	public $paymentSettings;

}

?>
