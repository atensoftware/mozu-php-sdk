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
*	The list of document types and related properties that define content used by the content management system (CMS).
*/
class DocumentList
{
	/**
	*The type of the document list, containing content for a site. For example, a list type could be web pages.
	*/
	public $documentListType;

	/**
	*List of document types associated with this document list.
	*/
	public $documentTypes;

	/**
	*If set, documents in this list will only be returned if the date queried for their is within their ActiveDateRange.
	*/
	public $enableActiveDateRanges;

	/**
	*Indicates if the document list and document list type are enabled to publish. If true, publishing of draft documents in this document list/document list type is enabled for the site. If false, all document changes are immediately published in live mode.
	*/
	public $enablePublishing;

	/**
	*The fully qualified name of the document list.
	*/
	public $listFQN;

	/**
	*The user supplied name that appears in . You can use this field for identification purposes.
	*/
	public $name;

	/**
	*The namespace for the accessible APIs and source capabilities in the core of  APIs.
	*/
	public $namespace;

	/**
	*The unique identifier of the scope. For example, if your scope type is site, then this value would be the site id.
	*/
	public $scopeId;

	/**
	*The type of scope associated with the documentList. For example, if the documentList is pageTemplateContent, the scopeType is Site.Valid values are: "Tenant", "MasterCatalog", and "Site".
	*/
	public $scopeType;

	/**
	*Indicates the security level for the document content as public, administrator, or owner.
	*/
	public $security;

	/**
	*Determines if the documentList will support ranges of dates that documents are considered 'active'. This field defaults to false and cannot be updated. If the documentList is based on a documentListType, then this value will be derived from the documentListType.
	*/
	public $supportsActiveDateRanges;

	/**
	*Indicates if modified documents are published automatically or saved to publish at a later time. If true, changed documents in this list can be saved as drafts until they are published to the site. If false, all document changes are immediately published in live mode. System-supplied and read only.
	*/
	public $supportsPublishing;

	/**
	*A string array that determines where the document or entity list displays. The options are , for displaying content in the Custom Schema page in  , and , for displaying content in the site tree in Site Builder (applies only to document lists). The following example demonstrates how to display content across both options:
	*/
	public $usages;

	/**
	*Metadata content for entities, used by document lists, document type lists, document type, views, entity lists, and list views.
	*/
	public $metadata;

	/**
	*The view in the site used by associated entities or document lists/list types.
	*/
	public $views;

}

?>
