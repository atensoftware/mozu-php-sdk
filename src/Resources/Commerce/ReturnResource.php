<?php


/**
* <auto-generated>
*     This code was generated by Codezu.     
*
*     Changes to this file may cause incorrect behavior and will be lost if
*     the code is regenerated.
* </auto-generated>
*/

namespace Mozu\Api\Resources\Commerce;

use Mozu\Api\Clients\Commerce\ReturnClient;
use Mozu\Api\ApiContext;


/**
* Use the Returns resource to manage returned items that were previously fufilled. Returns can include any number of items associated with an original  order. Each return must either be associated with an original order or a product definition to represent each returned item.Refer to the [Returns API](https://www.mozu.com/docs/developer/api-guides/returns.htm) topic for more information about creating and processing returns using the API.
*/
class ReturnResource {

		private $apiContext;
			
	public function __construct(ApiContext $apiContext) 
	{
		$this->apiContext = $apiContext;
	}

	



	/**
	* Retrieves a list of all returns according to any filter and sort criteria.
	*
	* @param string $filter A set of expressions that consist of a field, operator, and value and represent search parameter syntax when filtering results of a query. Valid operators include equals (eq), does not equal (ne), greater than (gt), less than (lt), greater than or equal to (ge), less than or equal to (le), starts with (sw), or contains (cont). For example - "filter=IsDisplayed+eq+true"
	* @param int $pageSize The number of results to display on each page when creating paged results from a query. The maximum value is 200.
	* @param string $q A list of order search terms (not phrases) to use in the query when searching across order number and the name or email of the billing contact. When entering, separate multiple search terms with a space character.
	* @param string $responseFields Use this field to include those fields which are not included by default.
	* @param string $sortBy The property by which to sort results and whether the results appear in ascending (a-z) order, represented by ASC or in descending (z-a) order, represented by DESC. The sortBy parameter follows an available property. For example: "sortBy=productCode+asc"
	* @param int $startIndex When creating paged results from a query, this value indicates the zero-based offset in the complete result set where the returned entities begin. For example, with a PageSize of 25, to get the 51st through the 75th items, use startIndex=3.
	* @return ReturnCollection 
	* @deprecated deprecated since version 1.17
	*/
	public function getReturns($startIndex =  null, $pageSize =  null, $sortBy =  null, $filter =  null, $q =  null, $responseFields =  null)
	{
		$mozuClient = ReturnClient::getReturnsClient($startIndex, $pageSize, $sortBy, $filter, $q, $responseFields);
		$mozuClient = $mozuClient->withContext($this->apiContext);
		$mozuClient->execute();
		return $mozuClient->getResult();

	}
	
/**
	* Retrieves a list of all returns according to any filter and sort criteria.
	*
	* @param string $filter A set of expressions that consist of a field, operator, and value and represent search parameter syntax when filtering results of a query. Valid operators include equals (eq), does not equal (ne), greater than (gt), less than (lt), greater than or equal to (ge), less than or equal to (le), starts with (sw), or contains (cont). For example - "filter=IsDisplayed+eq+true"
	* @param int $pageSize The number of results to display on each page when creating paged results from a query. The maximum value is 200.
	* @param string $q A list of order search terms (not phrases) to use in the query when searching across order number and the name or email of the billing contact. When entering, separate multiple search terms with a space character.
	* @param string $responseFields Use this field to include those fields which are not included by default.
	* @param string $sortBy The property by which to sort results and whether the results appear in ascending (a-z) order, represented by ASC or in descending (z-a) order, represented by DESC. The sortBy parameter follows an available property. For example: "sortBy=productCode+asc"
	* @param int $startIndex When creating paged results from a query, this value indicates the zero-based offset in the complete result set where the returned entities begin. For example, with a PageSize of 25, to get the 51st through the 75th items, use startIndex=3.
	* @return Promise - use $promise->then(sucessfn, errorfn). successFn is passed Mozu\Api\MozuResult. errorFn is passed Mozu\Api\ApiException
	*/
	public function getReturnsAsync($startIndex =  null, $pageSize =  null, $sortBy =  null, $filter =  null, $q =  null, $responseFields =  null)
	{
		$mozuClient = ReturnClient::getReturnsClient($startIndex, $pageSize, $sortBy, $filter, $q, $responseFields);
		$mozuClient = $mozuClient->withContext($this->apiContext);
		return $mozuClient->executeAsync();

	}
	
	/**
	* Retrieves a list of the actions available to perform for the specified return based on its current state.
	*
	* @param string $returnId Unique identifier of the return whose items you want to get.
	* @return array|string 
	* @deprecated deprecated since version 1.17
	*/
	public function getAvailableReturnActions($returnId)
	{
		$mozuClient = ReturnClient::getAvailableReturnActionsClient($returnId);
		$mozuClient = $mozuClient->withContext($this->apiContext);
		$mozuClient->execute();
		return $mozuClient->getResult();

	}
	
/**
	* Retrieves a list of the actions available to perform for the specified return based on its current state.
	*
	* @param string $returnId Unique identifier of the return whose items you want to get.
	* @return Promise - use $promise->then(sucessfn, errorfn). successFn is passed Mozu\Api\MozuResult. errorFn is passed Mozu\Api\ApiException
	*/
	public function getAvailableReturnActionsAsync($returnId)
	{
		$mozuClient = ReturnClient::getAvailableReturnActionsClient($returnId);
		$mozuClient = $mozuClient->withContext($this->apiContext);
		return $mozuClient->executeAsync();

	}
	
	/**
	* Retrieves the details of a single return item.
	*
	* @param string $responseFields Use this field to include those fields which are not included by default.
	* @param string $returnId Unique identifier of the return whose items you want to get.
	* @param string $returnItemId Unique identifier of the return item whose details you want to get.
	* @return ReturnItem 
	* @deprecated deprecated since version 1.17
	*/
	public function getReturnItem($returnId, $returnItemId, $responseFields =  null)
	{
		$mozuClient = ReturnClient::getReturnItemClient($returnId, $returnItemId, $responseFields);
		$mozuClient = $mozuClient->withContext($this->apiContext);
		$mozuClient->execute();
		return $mozuClient->getResult();

	}
	
/**
	* Retrieves the details of a single return item.
	*
	* @param string $responseFields Use this field to include those fields which are not included by default.
	* @param string $returnId Unique identifier of the return whose items you want to get.
	* @param string $returnItemId Unique identifier of the return item whose details you want to get.
	* @return Promise - use $promise->then(sucessfn, errorfn). successFn is passed Mozu\Api\MozuResult. errorFn is passed Mozu\Api\ApiException
	*/
	public function getReturnItemAsync($returnId, $returnItemId, $responseFields =  null)
	{
		$mozuClient = ReturnClient::getReturnItemClient($returnId, $returnItemId, $responseFields);
		$mozuClient = $mozuClient->withContext($this->apiContext);
		return $mozuClient->executeAsync();

	}
	
	/**
	* Retrieves the details of all return items in an order.
	*
	* @param string $responseFields Use this field to include those fields which are not included by default.
	* @param string $returnId Unique identifier of the return whose items you want to get.
	* @return ReturnItemCollection 
	* @deprecated deprecated since version 1.17
	*/
	public function getReturnItems($returnId, $responseFields =  null)
	{
		$mozuClient = ReturnClient::getReturnItemsClient($returnId, $responseFields);
		$mozuClient = $mozuClient->withContext($this->apiContext);
		$mozuClient->execute();
		return $mozuClient->getResult();

	}
	
/**
	* Retrieves the details of all return items in an order.
	*
	* @param string $responseFields Use this field to include those fields which are not included by default.
	* @param string $returnId Unique identifier of the return whose items you want to get.
	* @return Promise - use $promise->then(sucessfn, errorfn). successFn is passed Mozu\Api\MozuResult. errorFn is passed Mozu\Api\ApiException
	*/
	public function getReturnItemsAsync($returnId, $responseFields =  null)
	{
		$mozuClient = ReturnClient::getReturnItemsClient($returnId, $responseFields);
		$mozuClient = $mozuClient->withContext($this->apiContext);
		return $mozuClient->executeAsync();

	}
	
	/**
	* Retrieves a list of the payment actions available to perform for the specified return when a return results in a refund to the customer.
	*
	* @param string $paymentId Unique identifier of the payment for which to perform the action.
	* @param string $returnId Unique identifier of the return whose items you want to get.
	* @return array|string 
	* @deprecated deprecated since version 1.17
	*/
	public function getAvailablePaymentActionsForReturn($returnId, $paymentId)
	{
		$mozuClient = ReturnClient::getAvailablePaymentActionsForReturnClient($returnId, $paymentId);
		$mozuClient = $mozuClient->withContext($this->apiContext);
		$mozuClient->execute();
		return $mozuClient->getResult();

	}
	
/**
	* Retrieves a list of the payment actions available to perform for the specified return when a return results in a refund to the customer.
	*
	* @param string $paymentId Unique identifier of the payment for which to perform the action.
	* @param string $returnId Unique identifier of the return whose items you want to get.
	* @return Promise - use $promise->then(sucessfn, errorfn). successFn is passed Mozu\Api\MozuResult. errorFn is passed Mozu\Api\ApiException
	*/
	public function getAvailablePaymentActionsForReturnAsync($returnId, $paymentId)
	{
		$mozuClient = ReturnClient::getAvailablePaymentActionsForReturnClient($returnId, $paymentId);
		$mozuClient = $mozuClient->withContext($this->apiContext);
		return $mozuClient->executeAsync();

	}
	
	/**
	* Retrieves the details of a payment submitted as part of a refund associated with a customer return.
	*
	* @param string $paymentId Unique identifier of the payment for which to perform the action.
	* @param string $responseFields Use this field to include those fields which are not included by default.
	* @param string $returnId Unique identifier of the return whose items you want to get.
	* @return Payment 
	* @deprecated deprecated since version 1.17
	*/
	public function getPayment($returnId, $paymentId, $responseFields =  null)
	{
		$mozuClient = ReturnClient::getPaymentClient($returnId, $paymentId, $responseFields);
		$mozuClient = $mozuClient->withContext($this->apiContext);
		$mozuClient->execute();
		return $mozuClient->getResult();

	}
	
/**
	* Retrieves the details of a payment submitted as part of a refund associated with a customer return.
	*
	* @param string $paymentId Unique identifier of the payment for which to perform the action.
	* @param string $responseFields Use this field to include those fields which are not included by default.
	* @param string $returnId Unique identifier of the return whose items you want to get.
	* @return Promise - use $promise->then(sucessfn, errorfn). successFn is passed Mozu\Api\MozuResult. errorFn is passed Mozu\Api\ApiException
	*/
	public function getPaymentAsync($returnId, $paymentId, $responseFields =  null)
	{
		$mozuClient = ReturnClient::getPaymentClient($returnId, $paymentId, $responseFields);
		$mozuClient = $mozuClient->withContext($this->apiContext);
		return $mozuClient->executeAsync();

	}
	
	/**
	* Retrieves a list of all payments submitted as part of a refund associated with a customer return.
	*
	* @param string $responseFields Use this field to include those fields which are not included by default.
	* @param string $returnId Unique identifier of the return whose items you want to get.
	* @return PaymentCollection 
	* @deprecated deprecated since version 1.17
	*/
	public function getPayments($returnId, $responseFields =  null)
	{
		$mozuClient = ReturnClient::getPaymentsClient($returnId, $responseFields);
		$mozuClient = $mozuClient->withContext($this->apiContext);
		$mozuClient->execute();
		return $mozuClient->getResult();

	}
	
/**
	* Retrieves a list of all payments submitted as part of a refund associated with a customer return.
	*
	* @param string $responseFields Use this field to include those fields which are not included by default.
	* @param string $returnId Unique identifier of the return whose items you want to get.
	* @return Promise - use $promise->then(sucessfn, errorfn). successFn is passed Mozu\Api\MozuResult. errorFn is passed Mozu\Api\ApiException
	*/
	public function getPaymentsAsync($returnId, $responseFields =  null)
	{
		$mozuClient = ReturnClient::getPaymentsClient($returnId, $responseFields);
		$mozuClient = $mozuClient->withContext($this->apiContext);
		return $mozuClient->executeAsync();

	}
	
	/**
	* Retrieves a list of properties for the specified return.
	*
	* @param string $responseFields Use this field to include those fields which are not included by default.
	* @param string $returnId Unique identifier of the return whose items you want to get.
	* @return Return 
	* @deprecated deprecated since version 1.17
	*/
	public function getReturn($returnId, $responseFields =  null)
	{
		$mozuClient = ReturnClient::getReturnClient($returnId, $responseFields);
		$mozuClient = $mozuClient->withContext($this->apiContext);
		$mozuClient->execute();
		return $mozuClient->getResult();

	}
	
/**
	* Retrieves a list of properties for the specified return.
	*
	* @param string $responseFields Use this field to include those fields which are not included by default.
	* @param string $returnId Unique identifier of the return whose items you want to get.
	* @return Promise - use $promise->then(sucessfn, errorfn). successFn is passed Mozu\Api\MozuResult. errorFn is passed Mozu\Api\ApiException
	*/
	public function getReturnAsync($returnId, $responseFields =  null)
	{
		$mozuClient = ReturnClient::getReturnClient($returnId, $responseFields);
		$mozuClient = $mozuClient->withContext($this->apiContext);
		return $mozuClient->executeAsync();

	}
	
	/**
	* Returns a list of reasons for a return.
	*
	* @param string $responseFields Filtering syntax appended to an API call to increase or decrease the amount of data returned inside a JSON object. This parameter should only be used to retrieve data. Attempting to update data using this parameter may cause data loss.
	* @return ReasonCollection 
	* @deprecated deprecated since version 1.17
	*/
	public function getReasons($responseFields =  null)
	{
		$mozuClient = ReturnClient::getReasonsClient($responseFields);
		$mozuClient = $mozuClient->withContext($this->apiContext);
		$mozuClient->execute();
		return $mozuClient->getResult();

	}
	
/**
	* Returns a list of reasons for a return.
	*
	* @param string $responseFields Filtering syntax appended to an API call to increase or decrease the amount of data returned inside a JSON object. This parameter should only be used to retrieve data. Attempting to update data using this parameter may cause data loss.
	* @return Promise - use $promise->then(sucessfn, errorfn). successFn is passed Mozu\Api\MozuResult. errorFn is passed Mozu\Api\ApiException
	*/
	public function getReasonsAsync($responseFields =  null)
	{
		$mozuClient = ReturnClient::getReasonsClient($responseFields);
		$mozuClient = $mozuClient->withContext($this->apiContext);
		return $mozuClient->executeAsync();

	}
	
	/**
	* Creates a return for previously fulfilled items. Each return must either be associated with an original order or a product definition to represent each returned item.When you create a return, you must specify the following fields:
* 

* 
* 

*  (Optional, but recommended)

* 
* 

* 


*  (required for bundle items or product extras, but null for parent product or bundles)
* 

* 


*  (required for product extras, but otherwise null)

*  (set to  to target parent products or bundles without extras)


	*
	* @param string $responseFields Use this field to include those fields which are not included by default.
	* @param Return $ret Properties of a return of one or more previously fulfilled items.
	* @return Return 
	* @deprecated deprecated since version 1.17
	*/
	public function createReturn($ret, $responseFields =  null)
	{
		$mozuClient = ReturnClient::createReturnClient($ret, $responseFields);
		$mozuClient = $mozuClient->withContext($this->apiContext);
		$mozuClient->execute();
		return $mozuClient->getResult();

	}
	
/**
	* Creates a return for previously fulfilled items. Each return must either be associated with an original order or a product definition to represent each returned item.When you create a return, you must specify the following fields:
* 

* 
* 

*  (Optional, but recommended)

* 
* 

* 


*  (required for bundle items or product extras, but null for parent product or bundles)
* 

* 


*  (required for product extras, but otherwise null)

*  (set to  to target parent products or bundles without extras)


	*
	* @param string $responseFields Use this field to include those fields which are not included by default.
	* @return Promise - use $promise->then(sucessfn, errorfn). successFn is passed Mozu\Api\MozuResult. errorFn is passed Mozu\Api\ApiException
	*/
	public function createReturnAsync($ret, $responseFields =  null)
	{
		$mozuClient = ReturnClient::createReturnClient($ret, $responseFields);
		$mozuClient = $mozuClient->withContext($this->apiContext);
		return $mozuClient->executeAsync();

	}
	
	/**
	* Adds a return item to the return.
	*
	* @param string $responseFields Use this field to include those fields which are not included by default.
	* @param string $returnId Unique identifier of the return whose items you want to get.
	* @param ReturnItem $returnItem Properties of a previously fulfilled item associated with a return.
	* @return Return 
	* @deprecated deprecated since version 1.17
	*/
	public function createReturnItem($returnItem, $returnId, $responseFields =  null)
	{
		$mozuClient = ReturnClient::createReturnItemClient($returnItem, $returnId, $responseFields);
		$mozuClient = $mozuClient->withContext($this->apiContext);
		$mozuClient->execute();
		return $mozuClient->getResult();

	}
	
/**
	* Adds a return item to the return.
	*
	* @param string $responseFields Use this field to include those fields which are not included by default.
	* @param string $returnId Unique identifier of the return whose items you want to get.
	* @return Promise - use $promise->then(sucessfn, errorfn). successFn is passed Mozu\Api\MozuResult. errorFn is passed Mozu\Api\ApiException
	*/
	public function createReturnItemAsync($returnItem, $returnId, $responseFields =  null)
	{
		$mozuClient = ReturnClient::createReturnItemClient($returnItem, $returnId, $responseFields);
		$mozuClient = $mozuClient->withContext($this->apiContext);
		return $mozuClient->executeAsync();

	}
	
	/**
	* Updates a refund payment associated with a customer return by performing the specified action.
	*
	* @param string $paymentId Unique identifier of the payment for which to perform the action.
	* @param string $responseFields Use this field to include those fields which are not included by default.
	* @param string $returnId Unique identifier of the return whose items you want to get.
	* @param PaymentAction $action Properties of the payment action performed for an order.
	* @return Return 
	* @deprecated deprecated since version 1.17
	*/
	public function performPaymentActionForReturn($action, $returnId, $paymentId, $responseFields =  null)
	{
		$mozuClient = ReturnClient::performPaymentActionForReturnClient($action, $returnId, $paymentId, $responseFields);
		$mozuClient = $mozuClient->withContext($this->apiContext);
		$mozuClient->execute();
		return $mozuClient->getResult();

	}
	
/**
	* Updates a refund payment associated with a customer return by performing the specified action.
	*
	* @param string $paymentId Unique identifier of the payment for which to perform the action.
	* @param string $responseFields Use this field to include those fields which are not included by default.
	* @param string $returnId Unique identifier of the return whose items you want to get.
	* @return Promise - use $promise->then(sucessfn, errorfn). successFn is passed Mozu\Api\MozuResult. errorFn is passed Mozu\Api\ApiException
	*/
	public function performPaymentActionForReturnAsync($action, $returnId, $paymentId, $responseFields =  null)
	{
		$mozuClient = ReturnClient::performPaymentActionForReturnClient($action, $returnId, $paymentId, $responseFields);
		$mozuClient = $mozuClient->withContext($this->apiContext);
		return $mozuClient->executeAsync();

	}
	
	/**
	* Creates a new payment for a return that results in a refund to the customer.
	*
	* @param string $responseFields Use this field to include those fields which are not included by default.
	* @param string $returnId Unique identifier of the return whose items you want to get.
	* @param PaymentAction $action Properties of the payment action performed for an order.
	* @return Return 
	* @deprecated deprecated since version 1.17
	*/
	public function createPaymentActionForReturn($action, $returnId, $responseFields =  null)
	{
		$mozuClient = ReturnClient::createPaymentActionForReturnClient($action, $returnId, $responseFields);
		$mozuClient = $mozuClient->withContext($this->apiContext);
		$mozuClient->execute();
		return $mozuClient->getResult();

	}
	
/**
	* Creates a new payment for a return that results in a refund to the customer.
	*
	* @param string $responseFields Use this field to include those fields which are not included by default.
	* @param string $returnId Unique identifier of the return whose items you want to get.
	* @return Promise - use $promise->then(sucessfn, errorfn). successFn is passed Mozu\Api\MozuResult. errorFn is passed Mozu\Api\ApiException
	*/
	public function createPaymentActionForReturnAsync($action, $returnId, $responseFields =  null)
	{
		$mozuClient = ReturnClient::createPaymentActionForReturnClient($action, $returnId, $responseFields);
		$mozuClient = $mozuClient->withContext($this->apiContext);
		return $mozuClient->executeAsync();

	}
	
	/**
	* Creates a replacement order for the return.
	*
	* @param string $responseFields Filtering syntax appended to an API call to increase or decrease the amount of data returned inside a JSON object. This parameter should only be used to retrieve data. Attempting to update data using this parameter may cause data loss.
	* @param string $returnId Unique identifier of the return whose items you want to get.
	* @param array|ReturnItemSpecifier $itemQuantities 
	* @return Order 
	* @deprecated deprecated since version 1.17
	*/
	public function createReturnShippingOrder($itemQuantities, $returnId, $responseFields =  null)
	{
		$mozuClient = ReturnClient::createReturnShippingOrderClient($itemQuantities, $returnId, $responseFields);
		$mozuClient = $mozuClient->withContext($this->apiContext);
		$mozuClient->execute();
		return $mozuClient->getResult();

	}
	
/**
	* Creates a replacement order for the return.
	*
	* @param string $responseFields Filtering syntax appended to an API call to increase or decrease the amount of data returned inside a JSON object. This parameter should only be used to retrieve data. Attempting to update data using this parameter may cause data loss.
	* @param string $returnId Unique identifier of the return whose items you want to get.
	* @return Promise - use $promise->then(sucessfn, errorfn). successFn is passed Mozu\Api\MozuResult. errorFn is passed Mozu\Api\ApiException
	*/
	public function createReturnShippingOrderAsync($itemQuantities, $returnId, $responseFields =  null)
	{
		$mozuClient = ReturnClient::createReturnShippingOrderClient($itemQuantities, $returnId, $responseFields);
		$mozuClient = $mozuClient->withContext($this->apiContext);
		return $mozuClient->executeAsync();

	}
	
	/**
	* Updates the return by performing the action specified in the request.
	*
	* @param string $responseFields Use this field to include those fields which are not included by default.
	* @param ReturnAction $action Properties of an action a user can perform for a return.
	* @return ReturnCollection 
	* @deprecated deprecated since version 1.17
	*/
	public function performReturnActions($action, $responseFields =  null)
	{
		$mozuClient = ReturnClient::performReturnActionsClient($action, $responseFields);
		$mozuClient = $mozuClient->withContext($this->apiContext);
		$mozuClient->execute();
		return $mozuClient->getResult();

	}
	
/**
	* Updates the return by performing the action specified in the request.
	*
	* @param string $responseFields Use this field to include those fields which are not included by default.
	* @return Promise - use $promise->then(sucessfn, errorfn). successFn is passed Mozu\Api\MozuResult. errorFn is passed Mozu\Api\ApiException
	*/
	public function performReturnActionsAsync($action, $responseFields =  null)
	{
		$mozuClient = ReturnClient::performReturnActionsClient($action, $responseFields);
		$mozuClient = $mozuClient->withContext($this->apiContext);
		return $mozuClient->executeAsync();

	}
	
	/**
	* Updates one or more properties of a return for items previously shipped in a completed order.
	*
	* @param string $responseFields Use this field to include those fields which are not included by default.
	* @param string $returnId Unique identifier of the return whose items you want to get.
	* @param Return $ret Properties of a return of one or more previously fulfilled items.
	* @return Return 
	* @deprecated deprecated since version 1.17
	*/
	public function updateReturn($ret, $returnId, $responseFields =  null)
	{
		$mozuClient = ReturnClient::updateReturnClient($ret, $returnId, $responseFields);
		$mozuClient = $mozuClient->withContext($this->apiContext);
		$mozuClient->execute();
		return $mozuClient->getResult();

	}
	
/**
	* Updates one or more properties of a return for items previously shipped in a completed order.
	*
	* @param string $responseFields Use this field to include those fields which are not included by default.
	* @param string $returnId Unique identifier of the return whose items you want to get.
	* @return Promise - use $promise->then(sucessfn, errorfn). successFn is passed Mozu\Api\MozuResult. errorFn is passed Mozu\Api\ApiException
	*/
	public function updateReturnAsync($ret, $returnId, $responseFields =  null)
	{
		$mozuClient = ReturnClient::updateReturnClient($ret, $returnId, $responseFields);
		$mozuClient = $mozuClient->withContext($this->apiContext);
		return $mozuClient->executeAsync();

	}
	
	/**
	* Resend the email notification to a shopper that a return has been created.
	*
	* @param ReturnAction $action Properties of an action a user can perform for a return.
	* @deprecated deprecated since version 1.17
	*/
	public function resendReturnEmail($action)
	{
		$mozuClient = ReturnClient::resendReturnEmailClient($action);
		$mozuClient = $mozuClient->withContext($this->apiContext);
		$mozuClient->execute();

	}
	
/**
	* Resend the email notification to a shopper that a return has been created.
	*
	* @return Promise - use $promise->then(sucessfn, errorfn). successFn is passed Mozu\Api\MozuResult. errorFn is passed Mozu\Api\ApiException
	*/
	public function resendReturnEmailAsync($action)
	{
		$mozuClient = ReturnClient::resendReturnEmailClient($action);
		$mozuClient = $mozuClient->withContext($this->apiContext);
		return $mozuClient->executeAsync();

	}
	
	/**
	* Removes a particular order item from the order of the current shopper.
	*
	* @param string $returnId Unique identifier of the return whose items you want to get.
	* @param string $returnItemId Unique identifier of the return item whose details you want to get.
	* @return Return 
	* @deprecated deprecated since version 1.17
	*/
	public function deleteOrderItem($returnId, $returnItemId)
	{
		$mozuClient = ReturnClient::deleteOrderItemClient($returnId, $returnItemId);
		$mozuClient = $mozuClient->withContext($this->apiContext);
		$mozuClient->execute();
		return $mozuClient->getResult();

	}
	
/**
	* Removes a particular order item from the order of the current shopper.
	*
	* @param string $returnId Unique identifier of the return whose items you want to get.
	* @param string $returnItemId Unique identifier of the return item whose details you want to get.
	* @return Promise - use $promise->then(sucessfn, errorfn). successFn is passed Mozu\Api\MozuResult. errorFn is passed Mozu\Api\ApiException
	*/
	public function deleteOrderItemAsync($returnId, $returnItemId)
	{
		$mozuClient = ReturnClient::deleteOrderItemClient($returnId, $returnItemId);
		$mozuClient = $mozuClient->withContext($this->apiContext);
		return $mozuClient->executeAsync();

	}
	
	/**
	* Deletes the return specified in the request.
	*
	* @param string $returnId Unique identifier of the return whose items you want to get.
	* @deprecated deprecated since version 1.17
	*/
	public function deleteReturn($returnId)
	{
		$mozuClient = ReturnClient::deleteReturnClient($returnId);
		$mozuClient = $mozuClient->withContext($this->apiContext);
		$mozuClient->execute();

	}
	
/**
	* Deletes the return specified in the request.
	*
	* @param string $returnId Unique identifier of the return whose items you want to get.
	* @return Promise - use $promise->then(sucessfn, errorfn). successFn is passed Mozu\Api\MozuResult. errorFn is passed Mozu\Api\ApiException
	*/
	public function deleteReturnAsync($returnId)
	{
		$mozuClient = ReturnClient::deleteReturnClient($returnId);
		$mozuClient = $mozuClient->withContext($this->apiContext);
		return $mozuClient->executeAsync();

	}
	
	
}

?>

