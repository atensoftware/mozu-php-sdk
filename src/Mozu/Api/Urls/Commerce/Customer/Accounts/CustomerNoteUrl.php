<?php

/*
* <auto-generated>
*     This code was generated by a Codezu.     
*
*     Changes to this file may cause incorrect behavior and will be lost if
*     the code is regenerated.
* </auto-generated>
*/


namespace Mozu\Api\Urls\Commerce\Customer\Accounts;

use Mozu\Api\MozuUrl;
use Mozu\Api\UrlLocation;

class CustomerNoteUrl  {

	/**
		* Get Resource Url for GetAccountNote
		* @param int $accountId Unique identifier of the customer account that contains the note being retrieved.
		* @param int $noteId Unique identifier of a particular note to retrieve.
		* @param string $responseFields Use this field to include those fields which are not included by default.
		* @return string Resource Url
	*/
	public static function getAccountNoteUrl($accountId, $noteId, $responseFields)
	{
		$url = "/api/commerce/customer/accounts/{accountId}/notes/{noteId}?responseFields={responseFields}";
		$mozuUrl = new MozuUrl($url, UrlLocation::TENANT_POD,"GET", false);
		$mozuUrl->formatUrl("accountId", $accountId)
				->formatUrl("noteId", $noteId)
				->formatUrl("responseFields", $responseFields);

		return $mozuUrl;
	}
	
	/**
		* Get Resource Url for GetAccountNotes
		* @param int $accountId Unique identifier of the customer account.
		* @param string $filter A set of expressions that consist of a field, operator, and value and represent search parameter syntax when filtering results of a query. Valid operators include equals (eq), does not equal (ne), greater than (gt), less than (lt), greater than or equal to (ge), less than or equal to (le), starts with (sw), or contains (cont). For example - "filter=IsDisplayed+eq+true"
		* @param int $pageSize The number of results to display on each page when creating paged results from a query. The maximum value is 200.
		* @param string $responseFields Use this field to include those fields which are not included by default.
		* @param string $sortBy The property by which to sort results and whether the results appear in ascending (a-z) order, represented by ASC or in descending (z-a) order, represented by DESC. The sortBy parameter follows an available property. For example: "sortBy=productCode+asc"
		* @param int $startIndex When creating paged results from a query, this value indicates the zero-based offset in the complete result set where the returned entities begin. For example, with a PageSize of 25, to get the 51st through the 75th items, use startIndex=3.
		* @return string Resource Url
	*/
	public static function getAccountNotesUrl($accountId, $filter, $pageSize, $responseFields, $sortBy, $startIndex)
	{
		$url = "/api/commerce/customer/accounts/{accountId}/notes?startIndex={startIndex}&pageSize={pageSize}&sortBy={sortBy}&filter={filter}&responseFields={responseFields}";
		$mozuUrl = new MozuUrl($url, UrlLocation::TENANT_POD,"GET", false);
		$mozuUrl->formatUrl("accountId", $accountId)
				->formatUrl("filter", $filter)
				->formatUrl("pageSize", $pageSize)
				->formatUrl("responseFields", $responseFields)
				->formatUrl("sortBy", $sortBy)
				->formatUrl("startIndex", $startIndex);

		return $mozuUrl;
	}
	
	/**
		* Get Resource Url for AddAccountNote
		* @param int $accountId Unique identifier of the customer account for which to create the note.
		* @param string $responseFields Use this field to include those fields which are not included by default.
		* @return string Resource Url
	*/
	public static function addAccountNoteUrl($accountId, $responseFields)
	{
		$url = "/api/commerce/customer/accounts/{accountId}/notes?responseFields={responseFields}";
		$mozuUrl = new MozuUrl($url, UrlLocation::TENANT_POD,"POST", false);
		$mozuUrl->formatUrl("accountId", $accountId)
				->formatUrl("responseFields", $responseFields);

		return $mozuUrl;
	}
	
	/**
		* Get Resource Url for UpdateAccountNote
		* @param int $accountId Unique identifier of the customer account note to modify.
		* @param int $noteId Unique identifier of the note to update.
		* @param string $responseFields Use this field to include those fields which are not included by default.
		* @return string Resource Url
	*/
	public static function updateAccountNoteUrl($accountId, $noteId, $responseFields)
	{
		$url = "/api/commerce/customer/accounts/{accountId}/notes/{noteId}?responseFields={responseFields}";
		$mozuUrl = new MozuUrl($url, UrlLocation::TENANT_POD,"PUT", false);
		$mozuUrl->formatUrl("accountId", $accountId)
				->formatUrl("noteId", $noteId)
				->formatUrl("responseFields", $responseFields);

		return $mozuUrl;
	}
	
	/**
		* Get Resource Url for DeleteAccountNote
		* @param int $accountId Unique identifier of the customer account that contains the note being deleted.
		* @param int $noteId Unique identifier of the customer account note being deleted.
		* @return string Resource Url
	*/
	public static function deleteAccountNoteUrl($accountId, $noteId)
	{
		$url = "/api/commerce/customer/accounts/{accountId}/notes/{noteId}";
		$mozuUrl = new MozuUrl($url, UrlLocation::TENANT_POD,"DELETE", false);
		$mozuUrl->formatUrl("accountId", $accountId)
				->formatUrl("noteId", $noteId);

		return $mozuUrl;
	}
	
}

?>

