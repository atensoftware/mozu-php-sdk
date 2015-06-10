<?php


/**
* <auto-generated>
*     This code was generated by Codezu.     
*
*     Changes to this file may cause incorrect behavior and will be lost if
*     the code is regenerated.
* </auto-generated>
*/

namespace Mozu\Api\Resources\Commerce\Catalog\Admin;

use Mozu\Api\Clients\Commerce\Catalog\Admin\SearchClient;
use Mozu\Api\ApiContext;

/**
* The Search resource manages all settings and options for providing product search on your site.
*/
class SearchResource {

	private $apiContext;
		
	public function __construct(ApiContext $apiContext) 
	{
		$this->apiContext = $apiContext;
	}

	



	/**
	* Get site search settings
	*
	* @param string $responseFields A list or array of fields returned for a call. These fields may be customized and may be used for various types of data calls in Mozu. For example, responseFields are returned for retrieving or updating attributes, carts, and messages in Mozu.
	* @return SearchSettings 
	*/
	public function getSettings($responseFields =  null)
	{
		$mozuClient = SearchClient::getSettingsClient($responseFields);
		$mozuClient = $mozuClient->withContext($this->apiContext);
		$mozuClient->execute();
		return $mozuClient->getResult();

	}
	
	/**
	* Adds or Updates (Upsert) the Search Settings for a specific site
	*
	* @param string $responseFields A list or array of fields returned for a call. These fields may be customized and may be used for various types of data calls in Mozu. For example, responseFields are returned for retrieving or updating attributes, carts, and messages in Mozu.
	* @param SearchSettings $settings The settings to control product search and indexing behavior.
	* @return SearchSettings 
	*/
	public function updateSettings($settings, $responseFields =  null)
	{
		$mozuClient = SearchClient::updateSettingsClient($settings, $responseFields);
		$mozuClient = $mozuClient->withContext($this->apiContext);
		$mozuClient->execute();
		return $mozuClient->getResult();

	}
	
	
}

?>

