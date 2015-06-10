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

use Mozu\Api\Clients\Platform\TenantExtensionsClient;
use Mozu\Api\ApiContext;

/**
* platform/extensions related resources. DOCUMENT_HERE 
*/
class TenantExtensionsResource {

	private $apiContext;
		
	public function __construct(ApiContext $apiContext) 
	{
		$this->apiContext = $apiContext;
	}

	



	/**
	* platform-extensions Get GetExtensions description DOCUMENT_HERE 
	*
	* @param string $responseFields A list or array of fields returned for a call. These fields may be customized and may be used for various types of data calls in Mozu. For example, responseFields are returned for retrieving or updating attributes, carts, and messages in Mozu.
	* @return TenantExtensions 
	*/
	public function getExtensions($responseFields =  null)
	{
		$mozuClient = TenantExtensionsClient::getExtensionsClient($responseFields);
		$mozuClient = $mozuClient->withContext($this->apiContext);
		$mozuClient->execute();
		return $mozuClient->getResult();

	}
	
	/**
	* platform-extensions Put UpdateExtensions description DOCUMENT_HERE 
	*
	* @param string $responseFields A list or array of fields returned for a call. These fields may be customized and may be used for various types of data calls in Mozu. For example, responseFields are returned for retrieving or updating attributes, carts, and messages in Mozu.
	* @param TenantExtensions $extensions Mozu.InstalledApplications.Contracts.TenantExtensions ApiType DOCUMENT_HERE 
	* @return TenantExtensions 
	*/
	public function updateExtensions($extensions, $responseFields =  null)
	{
		$mozuClient = TenantExtensionsClient::updateExtensionsClient($extensions, $responseFields);
		$mozuClient = $mozuClient->withContext($this->apiContext);
		$mozuClient->execute();
		return $mozuClient->getResult();

	}
	
	
}

?>

