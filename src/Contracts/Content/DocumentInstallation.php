<?php

/*
* <auto-generated>
*     This code was generated by a Codezu.     
*
*     Changes to this file may cause incorrect behavior and will be lost if
*     the code is regenerated.
* </auto-generated>
*/


namespace Mozu\Api\Contracts\Content;



/**
*	Properties for the document installation package and data. This information details the installation of document content and files within the site. 
*/
class DocumentInstallation
{
	/**
	*Fully qualified name of the document type. 
	*/
	public $documentTypeFQN;

	/**
	*Localized properties for the document installation package and data. This information details the installation of document content and files within the site and is localized based on the `localeCode`.
	*/
	public $locale;

	/**
	*The user supplied name that appears in . You can use this field for identification purposes.
	*/
	public $name;

	/**
	*Collection of property attributes defined for the object. Properties are associated to all objects within , including documents, products, and product types.
	*/
	public $properties;

}

?>
