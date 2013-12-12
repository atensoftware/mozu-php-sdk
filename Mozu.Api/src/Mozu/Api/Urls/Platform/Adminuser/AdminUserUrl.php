<?php

/*
* <auto-generated>
*     This code was generated by a tool.     
*
*     Changes to this file may cause incorrect behavior and will be lost if
*     the code is regenerated.
* </auto-generated>
*/


namespace Mozu\Api\Urls\Platform\Adminuser;

use Mozu\Api\MozuUrl;
use Mozu\Api\UrlLocation;

class AdminUserUrl  {

	/**
		* Get Resource Url for GetUser
		* @param string $userId Unique identifier of the administrator account to retrieve.
		* @return string Resource Url
	*/
	public static function getUserUrl($userId)
	{
		$url = "/api/platform/adminuser/accounts/{userId}";
		$mozuUrl = new MozuUrl($url, UrlLocation::HOME_POD,"GET", false) ;
		$url = $mozuUrl->formatUrl("userId", $userId);
		return $mozuUrl;
	}
	
	/**
		* Get Resource Url for GetTenantScopesForUser
		* @param string $userId Unique identifier of the user whose tenant scopes you want to retrieve.
		* @return string Resource Url
	*/
	public static function getTenantScopesForUserUrl($userId)
	{
		$url = "/api/platform/adminuser/accounts/{userId}/tenants";
		$mozuUrl = new MozuUrl($url, UrlLocation::HOME_POD,"GET", false) ;
		$url = $mozuUrl->formatUrl("userId", $userId);
		return $mozuUrl;
	}
	
}

?>
