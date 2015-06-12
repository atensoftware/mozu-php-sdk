<?php


/**
* <auto-generated>
*     This code was generated by Codezu.     
*
*     Changes to this file may cause incorrect behavior and will be lost if
*     the code is regenerated.
* </auto-generated>
*/

namespace Mozu\Api\Clients\Commerce\Customer;

use Mozu\Api\MozuClient;
use Mozu\Api\Urls\Commerce\Customer\CustomerSegmentUrl;


/**
* Use the Customer Segments resource to manage the segments that enable a client to manage groups of customers and target discounts for these segments. After a customer segment is defined, you can associate any number of customer accounts with it.
*/
class CustomerSegmentClient {

	/**
	* Retrieves a list of defined customer segments according to any filter and sort criteria.
	*
	* @param string $filter A set of expressions that consist of a field, operator, and value and represent search parameter syntax when filtering results of a query. Valid operators include equals (eq), does not equal (ne), greater than (gt), less than (lt), greater than or equal to (ge), less than or equal to (le), starts with (sw), or contains (cont). For example - "filter=IsDisplayed+eq+true"
	* @param int $pageSize The number of results to display on each page when creating paged results from a query. The maximum value is 200.
	* @param string $responseFields Use this field to include those fields which are not included by default.
	* @param string $sortBy The property by which to sort results and whether the results appear in ascending (a-z) order, represented by ASC or in descending (z-a) order, represented by DESC. The sortBy parameter follows an available property. For example: "sortBy=productCode+asc"
	* @param int $startIndex When creating paged results from a query, this value indicates the zero-based offset in the complete result set where the returned entities begin. For example, with a PageSize of 25, to get the 51st through the 75th items, use startIndex=3.
	* @return MozuClient
	*/
	public static function getSegmentsClient($startIndex =  null, $pageSize =  null, $sortBy =  null, $filter =  null, $responseFields =  null)
	{
		$url = CustomerSegmentUrl::getSegmentsUrl($filter, $pageSize, $responseFields, $sortBy, $startIndex);
		$mozuClient = new MozuClient();
		$mozuClient->withResourceUrl($url);
		return $mozuClient;

	}
	
	/**
	* Retrieves the details of the customer segment specified in the request. This operation does not return a list of the customer accounts associated with the segment.
	*
	* @param int $id Unique identifier of the customer segment to retrieve.
	* @param string $responseFields Use this field to include those fields which are not included by default.
	* @return MozuClient
	*/
	public static function getSegmentClient($id, $responseFields =  null)
	{
		$url = CustomerSegmentUrl::getSegmentUrl($id, $responseFields);
		$mozuClient = new MozuClient();
		$mozuClient->withResourceUrl($url);
		return $mozuClient;

	}
	
	/**
	* Creates a new customer segments. New customer segments do not have any associated customer accounts.
	*
	* @param string $responseFields Use this field to include those fields which are not included by default.
	* @param CustomerSegment $segment The Customer Segment object includes properties of a defined customer segment used to group customer accounts.
	* @return MozuClient
	*/
	public static function addSegmentClient($segment, $responseFields =  null)
	{
		$url = CustomerSegmentUrl::addSegmentUrl($responseFields);
		$mozuClient = new MozuClient();
		$mozuClient->withResourceUrl($url)->withBody($segment);
		return $mozuClient;

	}
	
	/**
	* Adds one or more customer accounts to a defined customer segment.
	*
	* @param int $id Unique identifier of the customer segment to retrieve.
	* @param array|int $accountIds List of customer account IDs to add to the customer segment specified in the request.
	*/
	public static function addSegmentAccountsClient($accountIds, $id)
	{
		$url = CustomerSegmentUrl::addSegmentAccountsUrl($id);
		$mozuClient = new MozuClient();
		$mozuClient->withResourceUrl($url)->withBody($accountIds);
		return $mozuClient;

	}
	
	/**
	* Updates the details of the customer segment specified in the request.
	*
	* @param int $id Unique identifier of the customer segment to retrieve.
	* @param string $responseFields Use this field to include those fields which are not included by default.
	* @param CustomerSegment $segment The Customer Segment object includes properties of a defined customer segment used to group customer accounts.
	* @return MozuClient
	*/
	public static function updateSegmentClient($segment, $id, $responseFields =  null)
	{
		$url = CustomerSegmentUrl::updateSegmentUrl($id, $responseFields);
		$mozuClient = new MozuClient();
		$mozuClient->withResourceUrl($url)->withBody($segment);
		return $mozuClient;

	}
	
	/**
	* Deletes a customer segment specified by its unique identifier. Deleting a segment removes any customer account associations, but does not delete the customer account itself.
	*
	* @param int $id Unique identifier of the customer segment to retrieve.
	*/
	public static function deleteSegmentClient($id)
	{
		$url = CustomerSegmentUrl::deleteSegmentUrl($id);
		$mozuClient = new MozuClient();
		$mozuClient->withResourceUrl($url);
		return $mozuClient;

	}
	
	/**
	* Removes single account from a segment.
	*
	* @param int $accountId Unique identifier of the customer account.
	* @param int $id Unique identifier of the customer segment to retrieve.
	*/
	public static function removeSegmentAccountClient($id, $accountId)
	{
		$url = CustomerSegmentUrl::removeSegmentAccountUrl($accountId, $id);
		$mozuClient = new MozuClient();
		$mozuClient->withResourceUrl($url);
		return $mozuClient;

	}
	
	
}

?>

