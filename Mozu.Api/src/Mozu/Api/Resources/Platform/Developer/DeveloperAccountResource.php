<?php


/**
* <auto-generated>
*     This code was generated by a tool.     
*
*     Changes to this file may cause incorrect behavior and will be lost if
*     the code is regenerated.
* </auto-generated>
*/

namespace Mozu\Api\Resources\Platform\Developer;

use Mozu\Api\MozuClient;
use Mozu\Api\Clients\Platform\Developer\DeveloperAccountClient;
use Mozu\Api\ApiContext;
use Mozu\Api\DataViewMode;
use Mozu\Api\Headers;

/**
* 
*/
class DeveloperAccountResource {

	/**
	* 
	*
	* @param int $accountId 
	* @return DeveloperAccount 
	*/
	public function getDeveloperAccount($accountId =  null, Mozu\Api\Security\AuthTicket &$authTicket= null)
	{
		$mozuClient = DeveloperAccountClient::getDeveloperAccountClient($accountId, $authTicket);
		$mozuClient->execute();
		return $mozuClient->getResult();

	}
	
	
}

?>

