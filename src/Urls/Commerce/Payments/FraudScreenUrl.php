<?php

/*
* <auto-generated>
*     This code was generated by a Codezu.     
*
*     Changes to this file may cause incorrect behavior and will be lost if
*     the code is regenerated.
* </auto-generated>
*/


namespace Mozu\Api\Urls\Commerce\Payments;

use Mozu\Api\MozuUrl;
use Mozu\Api\UrlLocation;

class FraudScreenUrl  {

	/**
		* Get Resource Url for Screen
		* @param string $responseFields Filtering syntax appended to an API call to increase or decrease the amount of data returned inside a JSON object. This parameter should only be used to retrieve data. Attempting to update data using this parameter may cause data loss.
		* @return string Resource Url
	*/
	public static function screenUrl($responseFields)
	{
		$url = "/payments/commerce/payments/fraudscreen/screen?responseFields={responseFields}";
		$mozuUrl = new MozuUrl($url, UrlLocation::PCI_POD,"POST", false) ;
		$url = $mozuUrl->formatUrl("responseFields", $responseFields);
		return $mozuUrl;
	}
	
}

?>

