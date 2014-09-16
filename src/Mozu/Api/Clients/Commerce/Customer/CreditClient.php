<?php


/**
* <auto-generated>
*     This code was generated by a Codezu.     
*
*     Changes to this file may cause incorrect behavior and will be lost if
*     the code is regenerated.
* </auto-generated>
*/

namespace Mozu\Api\Clients\Commerce\Customer;

use Mozu\Api\MozuClient;
use Mozu\Api\Urls\Commerce\Customer\CreditUrl;
use Mozu\Api\Headers;

use Mozu\Api\Contracts\Customer\Credit\Credit;
use Mozu\Api\Contracts\Customer\Credit\CreditCollection;

/**
* Use the Customer Credits resource to manage the store credit associated with a customer account. Store credit can represent a static amount the customer can redeem at any of the tenant's sites, or a gift card registered for a customer account. At this time, gift card functionality is reserved for future use.
*/
class CreditClient {

	/**
	* Retrieves a list of store credits applied to customer accounts, according any filter and sort criteria specified in the request.
	*
	* @param string $filter A set of expressions that consist of a field, operator, and value and represent search parameter syntax when filtering results of a query. Valid operators include equals (eq), does not equal (ne), greater than (gt), less than (lt), greater than or equal to (ge), less than or equal to (le), starts with (sw), or contains (cont). For example - "filter=IsDisplayed+eq+true"
	* @param int $pageSize The number of results to display on each page when creating paged results from a query. The maximum value is 200.
	* @param string $responseFields Use this field to include those fields which are not included by default.
	* @param string $sortBy The property by which to sort results and whether the results appear in ascending (a-z) order, represented by ASC or in descending (z-a) order, represented by DESC. The sortBy parameter follows an available property. For example: "sortBy=productCode+asc"
	* @param int $startIndex When creating paged results from a query, this value indicates the zero-based offset in the complete result set where the returned entities begin. For example, with a PageSize of 25, to get the 51st through the 75th items, use startIndex=3.
	* @return MozuClient
	*/
	public static function getCreditsClient($startIndex =  null, $pageSize =  null, $sortBy =  null, $filter =  null, $responseFields =  null)
	{
		$url = CreditUrl::getCreditsUrl($filter, $pageSize, $responseFields, $sortBy, $startIndex);
		$mozuClient = new MozuClient();
		return $mozuClient->withResourceUrl($url);

	}
	
	/**
	* Retrieves the details of a store credit applied to a customer account.
	*
	* @param string $code User-defined code that identifies the store credit to retrieve.
	* @param string $responseFields Use this field to include those fields which are not included by default.
	* @return MozuClient
	*/
	public static function getCreditClient($code, $responseFields =  null)
	{
		$url = CreditUrl::getCreditUrl($code, $responseFields);
		$mozuClient = new MozuClient();
		return $mozuClient->withResourceUrl($url);

	}
	
	/**
	* Creates a new store credit for the customer account specified in the request.
	*
	* @param string $responseFields Use this field to include those fields which are not included by default.
	* @param Credit $credit Properties of the store credit to create.
	* @return MozuClient
	*/
	public static function addCreditClient($credit, $responseFields =  null)
	{
		$url = CreditUrl::addCreditUrl($responseFields);
		$mozuClient = new MozuClient();
		return $mozuClient->withResourceUrl($url)->withBody($credit);

	}
	
	/**
	* Associates an unclaimed customer credit with the shopper user authenticated in the request header.
	*
	* @param string $code The code that represents the credit to claim for the shopper.
	* @param string $responseFields Use this field to include those fields which are not included by default.
	* @return MozuClient
	*/
	public static function associateCreditToShopperClient($code, $responseFields =  null)
	{
		$url = CreditUrl::associateCreditToShopperUrl($code, $responseFields);
		$mozuClient = new MozuClient();
		return $mozuClient->withResourceUrl($url);

	}
	
	/**
	* Updates one or more properties of a defined store credit applied to a customer account.
	*
	* @param string $code User-defined code of the store credit to update.
	* @param string $responseFields Use this field to include those fields which are not included by default.
	* @param Credit $credit Properties of the store credit to update.
	* @return MozuClient
	*/
	public static function updateCreditClient($credit, $code, $responseFields =  null)
	{
		$url = CreditUrl::updateCreditUrl($code, $responseFields);
		$mozuClient = new MozuClient();
		return $mozuClient->withResourceUrl($url)->withBody($credit);

	}
	
	/**
	* Deletes a store credit previously applied to a customer account.
	*
	* @param string $code User-defined code of the store credit to delete.
	* @return MozuClient
	*/
	public static function deleteCreditClient($code)
	{
		$url = CreditUrl::deleteCreditUrl($code);
		$mozuClient = new MozuClient();
		return $mozuClient->withResourceUrl($url);

	}
	
	
}

?>

