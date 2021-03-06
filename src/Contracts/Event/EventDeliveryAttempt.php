<?php

/*
* <auto-generated>
*     This code was generated by a Codezu.     
*
*     Changes to this file may cause incorrect behavior and will be lost if
*     the code is regenerated.
* </auto-generated>
*/


namespace Mozu\Api\Contracts\Event;



/**
*	Properties and information captured for an attempted delivery that failed.
*/
class EventDeliveryAttempt
{
	/**
	*Status of the delivery process `EventDeliveryStatusType`. System-supplied and read-only.
	*/
	public $deliveryStatus;

	/**
	*Type of error that occurred, if the delivery was unsuccessful
	*/
	public $errorType;

	/**
	*The date that the delivery was attempted
	*/
	public $executionDate;

	/**
	*The text of the change message, such as "This product is no longer available." System-supplied and read-only.
	*/
	public $message;

	/**
	*The HTTP Status (code and name) returned by the remote endpoint
	*/
	public $httpStatus;

}

?>
