<?php

/*
* <auto-generated>
*     This code was generated by a Codezu.     
*
*     Changes to this file may cause incorrect behavior and will be lost if
*     the code is regenerated.
* </auto-generated>
*/


namespace Mozu\Api\Contracts\Tenant;



/**
*	Properties of a tenant, which the logical grouping of all a company's sites and catalogs.
*/
class Tenant
{
	/**
	*Properties of the domain that the tenant is associated with such as the domain name, the zone string, audit information (system-supplied and read-only), assignment data, and whether or not the domain is primary or requires a SSL for authentication.
	*/
	public $domain;

	/**
	*Unique identifier of the Mozu tenant.
	*/
	public $id;

	/**
	*Indicates if the tenant is a development tenant. If true, the tenant represents a collection of master catalogs and catalogs for a development tenant, used by a developer account to test applications and themes.
	*/
	public $isDevTenant;

	/**
	*The user supplied name that appears in . You can use this field for identification purposes.
	*/
	public $name;

	/**
	*Collection of master catalogs associated with the tenant.
	*/
	public $masterCatalogs;

	/**
	*Collection of sites associated with the tenant.
	*/
	public $sites;

}

?>
