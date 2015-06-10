<?php


/**
* <auto-generated>
*     This code was generated by Codezu.     
*
*     Changes to this file may cause incorrect behavior and will be lost if
*     the code is regenerated.
* </auto-generated>
*/

namespace Mozu\Api\Resources\Platform;

use Mozu\Api\Clients\Platform\SiteDataClient;
use Mozu\Api\ApiContext;

/**
* Use the site data resource to store site-level information required for a third-party application in the Mozu database.
*/
class SiteDataResource {

	private $apiContext;
		
	public function __construct(ApiContext $apiContext) 
	{
		$this->apiContext = $apiContext;
	}

	



	/**
	* Retrieves the value of a record in the Mozu database.
	*
	* @param string $dbEntryQuery The database entry string to create.
	* @param string $responseFields Use this field to include those fields which are not included by default.
	* @return string 
	*/
	public function getDBValue($dbEntryQuery, $responseFields =  null)
	{
		$mozuClient = SiteDataClient::getDBValueClient($dbEntryQuery, $responseFields);
		$mozuClient = $mozuClient->withContext($this->apiContext);
		$mozuClient->execute();
		return $mozuClient->getResult();

	}
	
	/**
	* Creates a new record in the Mozu database based on the information supplied in the request.
	*
	* @param string $dbEntryQuery The database entry string to create.
	* @param string $value The value string to create.
	*/
	public function createDBValue($value, $dbEntryQuery)
	{
		$mozuClient = SiteDataClient::createDBValueClient($value, $dbEntryQuery);
		$mozuClient = $mozuClient->withContext($this->apiContext);
		$mozuClient->execute();

	}
	
	/**
	* Updates a record in the Mozu database based on the information supplied in the request.
	*
	* @param string $dbEntryQuery The database entry string to create.
	* @param string $value The value string to create.
	*/
	public function updateDBValue($value, $dbEntryQuery)
	{
		$mozuClient = SiteDataClient::updateDBValueClient($value, $dbEntryQuery);
		$mozuClient = $mozuClient->withContext($this->apiContext);
		$mozuClient->execute();

	}
	
	/**
	* Removes a previously defined record in the Mozu database.
	*
	* @param string $dbEntryQuery The database entry string to create.
	*/
	public function deleteDBValue($dbEntryQuery)
	{
		$mozuClient = SiteDataClient::deleteDBValueClient($dbEntryQuery);
		$mozuClient = $mozuClient->withContext($this->apiContext);
		$mozuClient->execute();

	}
	
	
}

?>

