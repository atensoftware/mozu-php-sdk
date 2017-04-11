<?php

/*
* <auto-generated>
*     This code was generated by a Codezu.     
*
*     Changes to this file may cause incorrect behavior and will be lost if
*     the code is regenerated.
* </auto-generated>
*/


namespace Mozu\Api\Contracts\PaymentService\Request;



/**
*	Mozu.PaymentService.Contracts.Request.FraudScreenRequest ApiType DOCUMENT_HERE 
*/
class FraudScreenRequest
{
	/**
	*Mozu.PaymentService.Contracts.Request.FraudScreenRequest avsCodes ApiTypeMember DOCUMENT_HERE 
	*/
	public $avsCodes;

	/**
	*Mozu.PaymentService.Contracts.Request.FraudScreenRequest cardId ApiTypeMember DOCUMENT_HERE 
	*/
	public $cardId;

	/**
	*Mozu.PaymentService.Contracts.Request.FraudScreenRequest cardNumberPart ApiTypeMember DOCUMENT_HERE 
	*/
	public $cardNumberPart;

	/**
	*The 2-letter geographic code representing the country for the physical or mailing address. Currently limited to the US.
	*/
	public $countryCode;

	/**
	*The localized currency code for the monetary amount. 
	*/
	public $currencyCode;

	/**
	*Unique identifier of the customer in , used to associate customers with data, orders, returns, and in-store credit.
	*/
	public $customerId;

	/**
	*Mozu.PaymentService.Contracts.Request.FraudScreenRequest cvV2Codes ApiTypeMember DOCUMENT_HERE 
	*/
	public $cvV2Codes;

	/**
	*The two-digit month a credit card expires for a payment method.
	*/
	public $expireMonth;

	/**
	*The four-digit year the credit card expires for a payment method.
	*/
	public $expireYear;

	/**
	*Mozu.PaymentService.Contracts.Request.FraudScreenRequest gatewayAccountId ApiTypeMember DOCUMENT_HERE 
	*/
	public $gatewayAccountId;

	/**
	*Mozu.PaymentService.Contracts.Request.FraudScreenRequest merchantTransactionId ApiTypeMember DOCUMENT_HERE 
	*/
	public $merchantTransactionId;

	/**
	*Mozu.PaymentService.Contracts.Request.FraudScreenRequest orderNumber ApiTypeMember DOCUMENT_HERE 
	*/
	public $orderNumber;

	/**
	*Mozu.PaymentService.Contracts.Request.FraudScreenRequest paymentTransactionId ApiTypeMember DOCUMENT_HERE 
	*/
	public $paymentTransactionId;

	/**
	*The type of payment, such as credit card, check, or PayPal Express. Additional payment types will be supported in future releases.
	*/
	public $paymentType;

	/**
	*Mozu.PaymentService.Contracts.Request.FraudScreenRequest requestorIp ApiTypeMember DOCUMENT_HERE 
	*/
	public $requestorIp;

	/**
	*Mozu.PaymentService.Contracts.Request.FraudScreenRequest requestorUrl ApiTypeMember DOCUMENT_HERE 
	*/
	public $requestorUrl;

	/**
	*Mozu.PaymentService.Contracts.Request.FraudScreenRequest requestorUserAgent ApiTypeMember DOCUMENT_HERE 
	*/
	public $requestorUserAgent;

	/**
	*Mozu.PaymentService.Contracts.Request.FraudScreenRequest shipType ApiTypeMember DOCUMENT_HERE 
	*/
	public $shipType;

	/**
	*Total is used to indicate the monetary, estimated total amount of the cart or order, including items, sales tax, shipping costs, and other fees. Totals are not estimated for wish lists at this time.
	*/
	public $total;

	/**
	*Mozu.PaymentService.Contracts.Request.FraudScreenRequest billingAddress ApiTypeMember DOCUMENT_HERE 
	*/
	public $billingAddress;

	/**
	*Mozu.PaymentService.Contracts.Request.FraudScreenRequest billingContact ApiTypeMember DOCUMENT_HERE 
	*/
	public $billingContact;

	/**
	*Mozu.PaymentService.Contracts.Request.FraudScreenRequest credentialFieldsOverride ApiTypeMember DOCUMENT_HERE 
	*/
	public $credentialFieldsOverride;

	/**
	*Mozu.PaymentService.Contracts.Request.FraudScreenRequest customData ApiTypeMember DOCUMENT_HERE 
	*/
	public $customData;

	/**
	*Mozu.PaymentService.Contracts.Request.FraudScreenRequest orderItems ApiTypeMember DOCUMENT_HERE 
	*/
	public $orderItems;

	/**
	*Mozu.PaymentService.Contracts.Request.FraudScreenRequest shippingAddress ApiTypeMember DOCUMENT_HERE 
	*/
	public $shippingAddress;

	/**
	*Mozu.PaymentService.Contracts.Request.FraudScreenRequest shippingContact ApiTypeMember DOCUMENT_HERE 
	*/
	public $shippingContact;

}

?>
