<?php


/**
* <auto-generated>
*     This code was generated by a tool.     
*
*     Changes to this file may cause incorrect behavior and will be lost if
*     the code is regenerated.
* </auto-generated>
*/

namespace Mozu\Api\Resources\Commerce;

use Mozu\Api\MozuClient;
use Mozu\Api\Clients\Commerce\ChannelGroupClient;
use Mozu\Api\ApiContext;
use Mozu\Api\DataViewMode;
use Mozu\Api\Headers;

/**
* Use the Channel Groups resource to manage groups of channels with common information.
*/
class ChannelGroupResource {

	private $apiContext;
	public function __construct(ApiContext $apiContext) 
	{
		$this->apiContext = $apiContext;
	}

	/**
	* Retrieves a list of defined channel groups according to any filter and sort criteria specified in the request.
	*
	* @param string $filter FilterSetAll
	* @param int $pageSize The number of results to display on each page when creating paged results from a query. The maximum value is 200.
	* @param string $sortBy The property by which to sort results and whether the results appear in ascending (a-z) order, represented by ASC or in descending (z-a) order, represented by DESC. The sortBy parameter follows an available property. For example: "sortBy=productCode+asc"
	* @param int $startIndex When creating paged results from a query, this value indicates the zero-based offset in the complete result set where the returned entities begin. For example, with a PageSize of 25, to get the 51st through the 75th items, use startIndex=3.
	* @return ChannelGroupCollection 
	*/
	public function getChannelGroups($filter =  null, $pageSize =  null, $sortBy =  null, $startIndex =  null, Mozu\Api\Security\AuthTicket &$authTicket= null)
	{
		$mozuClient = ChannelGroupClient::getChannelGroupsClient($filter, $pageSize, $sortBy, $startIndex, $authTicket);
		$mozuClient = $mozuClient->withContext($this->apiContext);
		$mozuClient->execute();
		return $mozuClient->getResult();

	}
	
	/**
	* Retrieves the details of a defined channel group.
	*
	* @param string $code The code that uniquely identifies the channel group.
	* @return ChannelGroup 
	*/
	public function getChannelGroup( $code, Mozu\Api\Security\AuthTicket &$authTicket= null)
	{
		$mozuClient = ChannelGroupClient::getChannelGroupClient( $code, $authTicket);
		$mozuClient = $mozuClient->withContext($this->apiContext);
		$mozuClient->execute();
		return $mozuClient->getResult();

	}
	
	/**
	* Creates a new group of channels with common information.
	*
	* @param ChannelGroup $channelGroup Properties of the channel group to create.
	* @return ChannelGroup 
	*/
	public function createChannelGroup($channelGroup, Mozu\Api\Security\AuthTicket &$authTicket= null)
	{
		$mozuClient = ChannelGroupClient::createChannelGroupClient($channelGroup, $authTicket);
		$mozuClient = $mozuClient->withContext($this->apiContext);
		$mozuClient->execute();
		return $mozuClient->getResult();

	}
	
	/**
	* Updates one or more properties of a defined channel group.
	*
	* @param string $code Code that identifies the channel group.
	* @param ChannelGroup $channelGroup Properties of the channel group to update.
	* @return ChannelGroup 
	*/
	public function updateChannelGroup($channelGroup,  $code, Mozu\Api\Security\AuthTicket &$authTicket= null)
	{
		$mozuClient = ChannelGroupClient::updateChannelGroupClient($channelGroup,  $code, $authTicket);
		$mozuClient = $mozuClient->withContext($this->apiContext);
		$mozuClient->execute();
		return $mozuClient->getResult();

	}
	
	/**
	* Deletes a defined group of channels, which removes the group association with each channel in the group but does not delete the channel definitions themselves.
	*
	* @param string $code User-defined code that uniqely identifies the channel group.
	*/
	public function deleteChannelGroup( $code, Mozu\Api\Security\AuthTicket &$authTicket= null)
	{
		$mozuClient = ChannelGroupClient::deleteChannelGroupClient( $code, $authTicket);
		$mozuClient = $mozuClient->withContext($this->apiContext);
		$mozuClient->execute();

	}
	
	
}

?>
