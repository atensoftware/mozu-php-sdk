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
* Use the Developer Accounts resource to retrieve details about the developer account a company uses to test applications and themes.
*/
class DeveloperAccountResource {

	/**
	* Retrieves the details of the developer account specified in the request.
	*
	* @param int $accountId Unique identifier of the developer account to retrieve.
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
