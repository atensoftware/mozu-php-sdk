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

class CustomerAttributeUrl  {

	/**
		* Get Resource Url for GetAccountAttribute
		* @param int $accountId Identifier of the customer account associated with the attribute to retrieve.
		* @param string $attributeFQN The fully qualified name of the attribute, which is a user defined attribute identifier.
		* @param string $responseFields Use this field to include those fields which are not included by default.
		* @return string Resource Url
	*/
	public static function getAccountAttributeUrl($accountId, $attributeFQN, $responseFields)
	{
		$url = "/api/commerce/customer/accounts/{accountId}/attributes/{attributeFQN}?responseFields={responseFields}";
		$mozuUrl = new MozuUrl($url, UrlLocation::TENANT_POD,"GET", false);
		$mozuUrl->formatUrl("accountId", $accountId)
				->formatUrl("attributeFQN", $attributeFQN)
				->formatUrl("responseFields", $responseFields);

		return $mozuUrl;
	}
	
	/**
		* Get Resource Url for GetAccountAttributes
		* @param int $accountId Identifier of the customer account associated with the attributes to retrieve.
		* @param string $filter 
		* @param int $pageSize 
		* @param string $responseFields Use this field to include those fields which are not included by default.
		* @param string $sortBy 
		* @param int $startIndex 
		* @return string Resource Url
	*/
	public static function getAccountAttributesUrl($accountId, $filter, $pageSize, $responseFields, $sortBy, $startIndex)
	{
		$url = "/api/commerce/customer/accounts/{accountId}/attributes?startIndex={startIndex}&pageSize={pageSize}&sortBy={sortBy}&filter={filter}&responseFields={responseFields}";
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
		* Get Resource Url for AddAccountAttribute
		* @param int $accountId Unique identifier of the customer account.
		* @param string $responseFields Use this field to include those fields which are not included by default.
		* @return string Resource Url
	*/
	public static function addAccountAttributeUrl($accountId, $responseFields)
	{
		$url = "/api/commerce/customer/accounts/{accountId}/attributes?responseFields={responseFields}";
		$mozuUrl = new MozuUrl($url, UrlLocation::TENANT_POD,"POST", false);
		$mozuUrl->formatUrl("accountId", $accountId)
				->formatUrl("responseFields", $responseFields);

		return $mozuUrl;
	}
	
	/**
		* Get Resource Url for UpdateAccountAttribute
		* @param int $accountId Identifier of the customer account associated with the attribute.
		* @param string $attributeFQN The fully qualified name of the attribute, which is a user defined attribute identifier.
		* @param string $responseFields Use this field to include those fields which are not included by default.
		* @return string Resource Url
	*/
	public static function updateAccountAttributeUrl($accountId, $attributeFQN, $responseFields)
	{
		$url = "/api/commerce/customer/accounts/{accountId}/attributes/{attributeFQN}?responseFields={responseFields}";
		$mozuUrl = new MozuUrl($url, UrlLocation::TENANT_POD,"PUT", false);
		$mozuUrl->formatUrl("accountId", $accountId)
				->formatUrl("attributeFQN", $attributeFQN)
				->formatUrl("responseFields", $responseFields);

		return $mozuUrl;
	}
	
	/**
		* Get Resource Url for DeleteAccountAttribute
		* @param int $accountId Unique identifier of the customer account.
		* @param string $attributeFQN The fully qualified name of the attribute, which is a user defined attribute identifier.
		* @return string Resource Url
	*/
	public static function deleteAccountAttributeUrl($accountId, $attributeFQN)
	{
		$url = "/api/commerce/customer/accounts/{accountId}/attributes/{attributeFQN}";
		$mozuUrl = new MozuUrl($url, UrlLocation::TENANT_POD,"DELETE", false);
		$mozuUrl->formatUrl("accountId", $accountId)
				->formatUrl("attributeFQN", $attributeFQN);

		return $mozuUrl;
	}
	
}

?>
