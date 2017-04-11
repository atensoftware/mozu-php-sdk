<?php


/**
* <auto-generated>
*     This code was generated by Codezu.     
*
*     Changes to this file may cause incorrect behavior and will be lost if
*     the code is regenerated.
* </auto-generated>
*/

namespace Mozu\Api\Resources\Event;

use Mozu\Api\Clients\Event\EventNotificationClient;
use Mozu\Api\ApiContext;


/**
* Events are notifications  publishes to the application when a create, read, update, or delete operation is performed. If the application subscribes to the event, you can use the Events resource to query for recent events  published to your application or events that were not published successfully.
*/
class EventNotificationResource {

				



	/**
	* Retrieves a list of events.
	*
	* @param string $filter A set of expressions that consist of a field, operator, and value and represent search parameter syntax when filtering results of a query. Valid operators include equals (eq), does not equal (ne), greater than (gt), less than (lt), greater than or equal to (ge), less than or equal to (le), starts with (sw), or contains (cont). For example - "filter=IsDisplayed+eq+true"
	* @param int $pageSize The number of results to display on each page when creating paged results from a query. The maximum value is 200.
	* @param string $responseFields Use this field to include those fields which are not included by default.
	* @param string $sortBy 
	* @param int $startIndex 
	* @return EventCollection 
	* @deprecated deprecated since version 1.17
	*/
	public function getEvents($startIndex =  null, $pageSize =  null, $sortBy =  null, $filter =  null, $responseFields =  null)
	{
		$mozuClient = EventNotificationClient::getEventsClient($startIndex, $pageSize, $sortBy, $filter, $responseFields);
		$mozuClient->execute();
		return $mozuClient->getResult();

	}
	
/**
	* Retrieves a list of events.
	*
	* @param string $filter A set of expressions that consist of a field, operator, and value and represent search parameter syntax when filtering results of a query. Valid operators include equals (eq), does not equal (ne), greater than (gt), less than (lt), greater than or equal to (ge), less than or equal to (le), starts with (sw), or contains (cont). For example - "filter=IsDisplayed+eq+true"
	* @param int $pageSize The number of results to display on each page when creating paged results from a query. The maximum value is 200.
	* @param string $responseFields Use this field to include those fields which are not included by default.
	* @param string $sortBy 
	* @param int $startIndex 
	* @return Promise - use $promise->then(sucessfn, errorfn). successFn is passed Mozu\Api\MozuResult. errorFn is passed Mozu\Api\ApiException
	*/
	public function getEventsAsync($startIndex =  null, $pageSize =  null, $sortBy =  null, $filter =  null, $responseFields =  null)
	{
		$mozuClient = EventNotificationClient::getEventsClient($startIndex, $pageSize, $sortBy, $filter, $responseFields);
		return $mozuClient->executeAsync();

	}
	
	/**
	* Retrieves an event by providing the event ID.
	*
	* @param string $eventId The unique identifier of the event being retrieved. An event is a notification about a create, read, update, or delete on an order, product, discount or category.
	* @param string $responseFields Use this field to include those fields which are not included by default.
	* @return Event 
	* @deprecated deprecated since version 1.17
	*/
	public function getEvent($eventId, $responseFields =  null)
	{
		$mozuClient = EventNotificationClient::getEventClient($eventId, $responseFields);
		$mozuClient->execute();
		return $mozuClient->getResult();

	}
	
/**
	* Retrieves an event by providing the event ID.
	*
	* @param string $eventId The unique identifier of the event being retrieved. An event is a notification about a create, read, update, or delete on an order, product, discount or category.
	* @param string $responseFields Use this field to include those fields which are not included by default.
	* @return Promise - use $promise->then(sucessfn, errorfn). successFn is passed Mozu\Api\MozuResult. errorFn is passed Mozu\Api\ApiException
	*/
	public function getEventAsync($eventId, $responseFields =  null)
	{
		$mozuClient = EventNotificationClient::getEventClient($eventId, $responseFields);
		return $mozuClient->executeAsync();

	}
	
	
}

?>

