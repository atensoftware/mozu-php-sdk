<?php

/*
* <auto-generated>
*     This code was generated by a Codezu.     
*
*     Changes to this file may cause incorrect behavior and will be lost if
*     the code is regenerated.
* </auto-generated>
*/


namespace Mozu\Api\Contracts\Core\ThirdParty;



/**
*	Properties of a value that can be initialized for a capability property.
*/
class InitializablePropertyValue
{
	/**
	*Indicates if an app is initialized and capable of being enabled in the tenant and site. Apps will need to be installed and configured to become initialized, such as validating credentials and/or API keys with a third-party service. If true, the app is initialized and can be enabled for usage.
	*/
	public $initialized;

	/**
	*The value of a property, used by numerous objects within Mozu including facets, attributes, products, localized content, metadata, capabilities (Mozu and third-party), location inventory adjustment, and more. The value may be a string, integer, or double. Validation may be run against the entered and saved values depending on the object type.
	*/
	public $value;

}

?>
