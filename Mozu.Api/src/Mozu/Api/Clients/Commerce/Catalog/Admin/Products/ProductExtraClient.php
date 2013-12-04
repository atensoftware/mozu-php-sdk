<?php


/**
* <auto-generated>
*     This code was generated by a tool.     
*
*     Changes to this file may cause incorrect behavior and will be lost if
*     the code is regenerated.
* </auto-generated>
*/

namespace Mozu\Api\Clients\Commerce\Catalog\Admin\Products;

use Mozu\Api\MozuClient;
use Mozu\Api\Urls\Commerce\Catalog\Admin\Products\ProductExtraUrl;
use Mozu\Api\DataViewMode;
use Mozu\Api\Headers;

/**
* Query, create, and update product extras.
*/
class ProductExtraClient {

	/**
	* Retrieves a list of product extras.
	*
	* @param string $productCode "Merchant-created code that uniquely identifies the product such as a SKU or item number. Once created, the product code is read-only."
	* @return MozuClient
	*/
	public static function getExtrasClient($dataViewMode,  $productCode, Mozu\Api\Security\AuthTicket &$authTicket= null)
	{
		$url = ProductExtraUrl::getExtrasUrl($productCode);
		$mozuClient = new MozuClient();
		$mozuClient->withResourceUrl($url)->withHeader(Headers::X_VOL_DATAVIEW_MODE ,$dataViewMode)
;
		if ($authTicket != null)
			$mozuClient = $mozuClient->withUserAuth($authTicket);
		return $mozuClient;

	}
	
	/**
	* Retrieves an individual product extra.
	*
	* @param string $attributeFQN "The fully qualified name of the attribute, which is a user defined attribute identifier."
	* @param string $productCode "Merchant-created code that uniquely identifies the product such as a SKU or item number. Once created, the product code is read-only."
	* @return MozuClient
	*/
	public static function getExtraClient($dataViewMode,  $attributeFQN,  $productCode, Mozu\Api\Security\AuthTicket &$authTicket= null)
	{
		$url = ProductExtraUrl::getExtraUrl($attributeFQN, $productCode);
		$mozuClient = new MozuClient();
		$mozuClient->withResourceUrl($url)->withHeader(Headers::X_VOL_DATAVIEW_MODE ,$dataViewMode)
;
		if ($authTicket != null)
			$mozuClient = $mozuClient->withUserAuth($authTicket);
		return $mozuClient;

	}
	
	/**
	* Add or create an extra.
	*
	* @param string $productCode "Merchant-created code that uniquely identifies the product such as a SKU or item number. Once created, the product code is read-only."
	* @param ProductExtra $productExtra Properties of the product extra to create such as the attribute detail, fully qualified name, and list of product extra values.
	* @return MozuClient
	*/
	public static function addExtraClient($dataViewMode, $productExtra,  $productCode, Mozu\Api\Security\AuthTicket &$authTicket= null)
	{
		$url = ProductExtraUrl::addExtraUrl($productCode);
		$mozuClient = new MozuClient();
		$mozuClient->withResourceUrl($url)->withBody($productExtra)->withHeader(Headers::X_VOL_DATAVIEW_MODE ,$dataViewMode)
;
		if ($authTicket != null)
			$mozuClient = $mozuClient->withUserAuth($authTicket);
		return $mozuClient;

	}
	
	/**
	* Update a product extra.
	*
	* @param string $attributeFQN "The fully qualified name of the attribute, which is a user defined attribute identifier."
	* @param string $productCode "Merchant-created code that uniquely identifies the product such as a SKU or item number. Once created, the product code is read-only."
	* @param ProductExtra $productExtra Properties of the product extra to update such as the attribute detail, fully qualified name, and list of product extra values.
	* @return MozuClient
	*/
	public static function updateExtraClient($dataViewMode, $productExtra,  $attributeFQN,  $productCode, Mozu\Api\Security\AuthTicket &$authTicket= null)
	{
		$url = ProductExtraUrl::updateExtraUrl($attributeFQN, $productCode);
		$mozuClient = new MozuClient();
		$mozuClient->withResourceUrl($url)->withBody($productExtra)->withHeader(Headers::X_VOL_DATAVIEW_MODE ,$dataViewMode)
;
		if ($authTicket != null)
			$mozuClient = $mozuClient->withUserAuth($authTicket);
		return $mozuClient;

	}
	
	/**
	* Delete a product extra by providing the product code and the attribute's fully qualified name.
	*
	* @param string $attributeFQN "The fully qualified name of the attribute, which is a user defined attribute identifier."
	* @param string $productCode "Merchant-created code that uniquely identifies the product such as a SKU or item number. Once created, the product code is read-only."
	*/
	public static function deleteExtraClient($dataViewMode,  $attributeFQN,  $productCode, Mozu\Api\Security\AuthTicket &$authTicket= null)
	{
		$url = ProductExtraUrl::deleteExtraUrl($attributeFQN, $productCode);
		$mozuClient = new MozuClient();
		$mozuClient->withResourceUrl($url)->withHeader(Headers::X_VOL_DATAVIEW_MODE ,$dataViewMode)
;
		if ($authTicket != null)
			$mozuClient = $mozuClient->withUserAuth($authTicket);
		return $mozuClient;

	}
	
	
}

?>

