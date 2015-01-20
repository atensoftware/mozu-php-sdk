<?php


/**
* <auto-generated>
*     This code was generated by a Codezu.     
*
*     Changes to this file may cause incorrect behavior and will be lost if
*     the code is regenerated.
* </auto-generated>
*/

namespace Mozu\Api\Resources\Commerce\Orders;

use Mozu\Api\MozuClient;
use Mozu\Api\Clients\Commerce\Orders\DigitalPackageClient;
use Mozu\Api\ApiContext;
use Mozu\Api\DataViewMode;
use Mozu\Api\Headers;

/**
* A digital package is a package in a digital format.
*/
class DigitalPackageResource {

		private $apiContext;
	public function __construct(ApiContext $apiContext) 
	{
		$this->apiContext = $apiContext;
	}

	/**
	* 
	*
	* @param string $digitalPackageId This parameter supplies package ID to get fulfillment actions for the digital package.
	* @param string $orderId This parameter provides the unique identifier of the order on which to get a list of available actions.
	* @return array|string 
	*/
	public function getAvailableDigitalPackageFulfillmentActions($orderId, $digitalPackageId)
	{
		$mozuClient = DigitalPackageClient::getAvailableDigitalPackageFulfillmentActionsClient($orderId, $digitalPackageId);
		$mozuClient = $mozuClient->withContext($this->apiContext);
		$mozuClient->execute();
		return $mozuClient->getResult();

	}
	
	/**
	* This operation retreives a digital package within an order and it requires two parameters: orderId and digitalPackageId.
	*
	* @param string $digitalPackageId This parameter provides the digital package Id.
	* @param string $orderId This parameter provides the unique identifier of the order with which to associate the digital package.
	* @param string $responseFields Use this field to include those fields which are not included by default.
	* @return DigitalPackage 
	*/
	public function getDigitalPackage($orderId, $digitalPackageId, $responseFields =  null)
	{
		$mozuClient = DigitalPackageClient::getDigitalPackageClient($orderId, $digitalPackageId, $responseFields);
		$mozuClient = $mozuClient->withContext($this->apiContext);
		$mozuClient->execute();
		return $mozuClient->getResult();

	}
	
	/**
	* Lets you apply a digital package to the order using the orderId and digitalPackage parameters.
	*
	* @param string $orderId The orderID is a required paramter for the digitalpackages operation. The orderId is a unique identifier of the order with which to associate the digital package.
	* @param string $responseFields Use this field to include those fields which are not included by default.
	* @param DigitalPackage $digitalPackage The digitalPackage parameter is a required parameter for the CreateDigitalPackages operation. The digitalPackage is the digital package to create and add to the order.
	* @return DigitalPackage 
	*/
	public function createDigitalPackage($digitalPackage, $orderId, $responseFields =  null)
	{
		$mozuClient = DigitalPackageClient::createDigitalPackageClient($digitalPackage, $orderId, $responseFields);
		$mozuClient = $mozuClient->withContext($this->apiContext);
		$mozuClient->execute();
		return $mozuClient->getResult();

	}
	
	/**
	* This method operates on one digital package, specified by the id given. This method ensures that the digital package ID provided is in the order with the id given, and then updates the properties of that package with the properties of the one passed in using the ‘digitalpackage’ parameter.
	*
	* @param string $digitalPackageId This parameter specifies the digital package to update in the order.
	* @param string $orderId This parameter provides the unique identifier of the order with which to associate the digital package.
	* @param string $responseFields Use this field to include those fields which are not included by default.
	* @param DigitalPackage $digitalPackage This parameter provides the package content to update in the order.
	* @return DigitalPackage 
	*/
	public function updateDigitalPackage($digitalPackage, $orderId, $digitalPackageId, $responseFields =  null)
	{
		$mozuClient = DigitalPackageClient::updateDigitalPackageClient($digitalPackage, $orderId, $digitalPackageId, $responseFields);
		$mozuClient = $mozuClient->withContext($this->apiContext);
		$mozuClient->execute();
		return $mozuClient->getResult();

	}
	
	/**
	* This operation deletes a digital package from an order. This operation requires three parameters: orderId, digitalPackageId, and digitalPackage.
	*
	* @param string $digitalPackageId The digitalPackage ID is unique package ID to update on the order.
	* @param string $orderId The orderId is unique identifier of the order with which to associate the package.
	*/
	public function deleteDigitalPackage($orderId, $digitalPackageId)
	{
		$mozuClient = DigitalPackageClient::deleteDigitalPackageClient($orderId, $digitalPackageId);
		$mozuClient = $mozuClient->withContext($this->apiContext);
		$mozuClient->execute();

	}
	
	
}

?>
