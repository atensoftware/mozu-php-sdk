<?php


/**
* <auto-generated>
*     This code was generated by Codezu.     
*
*     Changes to this file may cause incorrect behavior and will be lost if
*     the code is regenerated.
* </auto-generated>
*/

namespace Mozu\Api\Resources\Commerce\Orders;

use Mozu\Api\Clients\Commerce\Orders\OrderReturnableItemClient;
use Mozu\Api\ApiContext;


/**
* Use this subresource to view which order items are eligible for return.
*/
class OrderReturnableItemResource {

		private $apiContext;
			
	public function __construct(ApiContext $apiContext) 
	{
		$this->apiContext = $apiContext;
	}

	



	/**
	* Retrieves information about which items are eligible for return on an order.Each item displays the following information:
* One entry that represents the entire order item, whether this is a single product, a bundle, or a product or bundle with extras. (ParentProductCode == null, ExcludeProductExtras == false)

* (If the item contains product extras) 
* One entry that represents the parent product without product extras (ParentProductCode == null, ExcludeProductExtras == true)

* One entry for each extra (ParentProductCode != null, OrderItemOptionAttributeFQN != null)


* (If the parent item is a bundle)
* One entry for each item within the bundle (ParentProductCode != null, OrderItemOptionAttributeFQN == null)


	*
	* @param string $orderId Unique identifier of the order.
	* @param string $responseFields Filtering syntax appended to an API call to increase or decrease the amount of data returned inside a JSON object. This parameter should only be used to retrieve data. Attempting to update data using this parameter may cause data loss.
	* @return OrderReturnableItemCollection 
	* @deprecated deprecated since version 1.17
	*/
	public function getOrderReturnableItems($orderId, $responseFields =  null)
	{
		$mozuClient = OrderReturnableItemClient::getOrderReturnableItemsClient($orderId, $responseFields);
		$mozuClient = $mozuClient->withContext($this->apiContext);
		$mozuClient->execute();
		return $mozuClient->getResult();

	}
	
/**
	* Retrieves information about which items are eligible for return on an order.Each item displays the following information:
* One entry that represents the entire order item, whether this is a single product, a bundle, or a product or bundle with extras. (ParentProductCode == null, ExcludeProductExtras == false)

* (If the item contains product extras) 
* One entry that represents the parent product without product extras (ParentProductCode == null, ExcludeProductExtras == true)

* One entry for each extra (ParentProductCode != null, OrderItemOptionAttributeFQN != null)


* (If the parent item is a bundle)
* One entry for each item within the bundle (ParentProductCode != null, OrderItemOptionAttributeFQN == null)


	*
	* @param string $orderId Unique identifier of the order.
	* @param string $responseFields Filtering syntax appended to an API call to increase or decrease the amount of data returned inside a JSON object. This parameter should only be used to retrieve data. Attempting to update data using this parameter may cause data loss.
	* @return Promise - use $promise->then(sucessfn, errorfn). successFn is passed Mozu\Api\MozuResult. errorFn is passed Mozu\Api\ApiException
	*/
	public function getOrderReturnableItemsAsync($orderId, $responseFields =  null)
	{
		$mozuClient = OrderReturnableItemClient::getOrderReturnableItemsClient($orderId, $responseFields);
		$mozuClient = $mozuClient->withContext($this->apiContext);
		return $mozuClient->executeAsync();

	}
	
	
}

?>
