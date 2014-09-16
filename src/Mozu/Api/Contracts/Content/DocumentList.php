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
		public $documentListType;

	/**
	*List of document types associated with this document list.
	*/
	public $documentTypes;

	/**
	*If true, publishing of draft documents in this document list is enabled for the site. If false, all document changes are immediately published in live mode.
	*/
	public $enablePublishing;

		public $listFQN;

	/**
	*The name of the document list.
	*/
	public $name;

		public $namespace;

		public $scopeId;

		public $scopeType;

		public $security;

	/**
	*If true, changes documents in this list can be saved as drafts until they are published to the site. If false, all document changes are immediately published in live mode. System-supplied and read only.
	*/
	public $supportsPublishing;

		public $usages;

		public $metadata;

		public $views;

}

?>
