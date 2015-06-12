<?php

/*
* <auto-generated>
*     This code was generated by a Codezu.     
*
*     Changes to this file may cause incorrect behavior and will be lost if
*     the code is regenerated.
* </auto-generated>
*/


namespace Mozu\Api\Contracts\InstalledApplications;



/**
*	The enablement mode of the capability.
*/
class Capability
{
	/**
	*The scope at which the object exists, such as "Tenant", "MasterCatalog", or "Site". Scope delineates the level and area of Mozu the object exists within or affects.
	*/
	public $scopeType;

	/**
	*Array list of credit types active for the capability.
	*/
	public $activeCreditTypes;

	/**
	*Array list of the countries (by country code) for which this capability can actively shop. All active shopping countries must be in the supported shopping country list. Validation rules determine the supported validity of the entered country against the list.
	*/
	public $activeShoppingCountries;

	/**
	*The enablement mode of the capability, typically read only.
	*/
	public $capabilityMode;

	/**
	*The capability type installed in the tenant.
	*/
	public $capabilityType;

	/**
	*Indicates if the capability or app is enabled for the tenant/site. If true, the capability/application is enabled for the tenant. System-supplied and read-only.
	*/
	public $enabled;

	/**
	*Unique identifier of the source product property. For a product field it will be the name of the field. For a product attribute it will be the Attribute FQN. 
	*/
	public $id;

	/**
	*Indicates if an app is initialized and capable of being enabled in the tenant and site. Apps will need to be installed and configured to become initialized, such as validating credentials and/or API keys with a third-party service. If true, the app is initialized and can be enabled for usage.
	*/
	public $initialized;

	/**
	*The ID of the specific scope for the object. 
	*/
	public $scopeId;

	/**
	*Array list of the countries (by country code) to which this capability can actively ship. The entered shipping country is validated against a list of supported shipping countries. Messages return if the country code is not supported or duplicated. Supported carriers are also checked per country code.
	*/
	public $activeShippingCountries;

	/**
	*Array list of URL endpoints for the operations associated with this capability.
	*/
	public $operationUrls;

	/**
	*List of credit types this capability supports.
	*/
	public $supportedCreditTypes;

	/**
	*Array list of countries this capability supports for shipping.
	*/
	public $supportedShippingCountries;

	/**
	*List of countries this capability supports for shopping.
	*/
	public $supportedShoppingCountries;

}

?>
