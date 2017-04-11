<?php


/**
* <auto-generated>
*     This code was generated by Codezu.     
*
*     Changes to this file may cause incorrect behavior and will be lost if
*     the code is regenerated.
* </auto-generated>
*/

namespace Mozu\Api\Resources\Commerce\Customer\Accounts;

use Mozu\Api\Clients\Commerce\Customer\Accounts\CardClient;
use Mozu\Api\ApiContext;


/**
* Use the Cards subresource to manage stored credit cards for customer accounts.  stores limited card data in the Customer service for expedited ordering purposes; however, the complete card data is stored in the Payment service.
*/
class CardResource {

		private $apiContext;
			
	public function __construct(ApiContext $apiContext) 
	{
		$this->apiContext = $apiContext;
	}

	



	/**
	* Retrieves the details of a credit card stored with a customer account billing contact.
	*
	* @param int $accountId Unique identifier of the customer account.
	* @param string $cardId Unique identifier of the card associated with the customer account billing contact.
	* @param string $responseFields Use this field to include those fields which are not included by default.
	* @return Card 
	* @deprecated deprecated since version 1.17
	*/
	public function getAccountCard($accountId, $cardId, $responseFields =  null)
	{
		$mozuClient = CardClient::getAccountCardClient($accountId, $cardId, $responseFields);
		$mozuClient = $mozuClient->withContext($this->apiContext);
		$mozuClient->execute();
		return $mozuClient->getResult();

	}
	
/**
	* Retrieves the details of a credit card stored with a customer account billing contact.
	*
	* @param int $accountId Unique identifier of the customer account.
	* @param string $cardId Unique identifier of the card associated with the customer account billing contact.
	* @param string $responseFields Use this field to include those fields which are not included by default.
	* @return Promise - use $promise->then(sucessfn, errorfn). successFn is passed Mozu\Api\MozuResult. errorFn is passed Mozu\Api\ApiException
	*/
	public function getAccountCardAsync($accountId, $cardId, $responseFields =  null)
	{
		$mozuClient = CardClient::getAccountCardClient($accountId, $cardId, $responseFields);
		$mozuClient = $mozuClient->withContext($this->apiContext);
		return $mozuClient->executeAsync();

	}
	
	/**
	* Retrieves all stored credit cards for the customer account.
	*
	* @param int $accountId Unique identifier of the customer account.
	* @param string $responseFields Use this field to include those fields which are not included by default.
	* @return CardCollection 
	* @deprecated deprecated since version 1.17
	*/
	public function getAccountCards($accountId, $responseFields =  null)
	{
		$mozuClient = CardClient::getAccountCardsClient($accountId, $responseFields);
		$mozuClient = $mozuClient->withContext($this->apiContext);
		$mozuClient->execute();
		return $mozuClient->getResult();

	}
	
/**
	* Retrieves all stored credit cards for the customer account.
	*
	* @param int $accountId Unique identifier of the customer account.
	* @param string $responseFields Use this field to include those fields which are not included by default.
	* @return Promise - use $promise->then(sucessfn, errorfn). successFn is passed Mozu\Api\MozuResult. errorFn is passed Mozu\Api\ApiException
	*/
	public function getAccountCardsAsync($accountId, $responseFields =  null)
	{
		$mozuClient = CardClient::getAccountCardsClient($accountId, $responseFields);
		$mozuClient = $mozuClient->withContext($this->apiContext);
		return $mozuClient->executeAsync();

	}
	
	/**
	* Creates a new credit card record and stores it for the customer account.
	*
	* @param int $accountId Unique identifier of the customer account.
	* @param string $responseFields Use this field to include those fields which are not included by default.
	* @param Card $card Properties of a credit card used to submit payment for an order.
	* @return Card 
	* @deprecated deprecated since version 1.17
	*/
	public function addAccountCard($card, $accountId, $responseFields =  null)
	{
		$mozuClient = CardClient::addAccountCardClient($card, $accountId, $responseFields);
		$mozuClient = $mozuClient->withContext($this->apiContext);
		$mozuClient->execute();
		return $mozuClient->getResult();

	}
	
/**
	* Creates a new credit card record and stores it for the customer account.
	*
	* @param int $accountId Unique identifier of the customer account.
	* @param string $responseFields Use this field to include those fields which are not included by default.
	* @return Promise - use $promise->then(sucessfn, errorfn). successFn is passed Mozu\Api\MozuResult. errorFn is passed Mozu\Api\ApiException
	*/
	public function addAccountCardAsync($card, $accountId, $responseFields =  null)
	{
		$mozuClient = CardClient::addAccountCardClient($card, $accountId, $responseFields);
		$mozuClient = $mozuClient->withContext($this->apiContext);
		return $mozuClient->executeAsync();

	}
	
	/**
	* Update one or more properties of a credit card defined for a customer account.
	*
	* @param int $accountId Unique identifier of the customer account.
	* @param string $cardId Unique identifier of the card associated with the customer account billing contact.
	* @param string $responseFields Use this field to include those fields which are not included by default.
	* @param Card $card Properties of a credit card used to submit payment for an order.
	* @return Card 
	* @deprecated deprecated since version 1.17
	*/
	public function updateAccountCard($card, $accountId, $cardId, $responseFields =  null)
	{
		$mozuClient = CardClient::updateAccountCardClient($card, $accountId, $cardId, $responseFields);
		$mozuClient = $mozuClient->withContext($this->apiContext);
		$mozuClient->execute();
		return $mozuClient->getResult();

	}
	
/**
	* Update one or more properties of a credit card defined for a customer account.
	*
	* @param int $accountId Unique identifier of the customer account.
	* @param string $cardId Unique identifier of the card associated with the customer account billing contact.
	* @param string $responseFields Use this field to include those fields which are not included by default.
	* @return Promise - use $promise->then(sucessfn, errorfn). successFn is passed Mozu\Api\MozuResult. errorFn is passed Mozu\Api\ApiException
	*/
	public function updateAccountCardAsync($card, $accountId, $cardId, $responseFields =  null)
	{
		$mozuClient = CardClient::updateAccountCardClient($card, $accountId, $cardId, $responseFields);
		$mozuClient = $mozuClient->withContext($this->apiContext);
		return $mozuClient->executeAsync();

	}
	
	/**
	* Removes a stored credit card from a customer account.
	*
	* @param int $accountId Unique identifier of the customer account.
	* @param string $cardId Unique identifier of the card associated with the customer account billing contact.
	* @deprecated deprecated since version 1.17
	*/
	public function deleteAccountCard($accountId, $cardId)
	{
		$mozuClient = CardClient::deleteAccountCardClient($accountId, $cardId);
		$mozuClient = $mozuClient->withContext($this->apiContext);
		$mozuClient->execute();

	}
	
/**
	* Removes a stored credit card from a customer account.
	*
	* @param int $accountId Unique identifier of the customer account.
	* @param string $cardId Unique identifier of the card associated with the customer account billing contact.
	* @return Promise - use $promise->then(sucessfn, errorfn). successFn is passed Mozu\Api\MozuResult. errorFn is passed Mozu\Api\ApiException
	*/
	public function deleteAccountCardAsync($accountId, $cardId)
	{
		$mozuClient = CardClient::deleteAccountCardClient($accountId, $cardId);
		$mozuClient = $mozuClient->withContext($this->apiContext);
		return $mozuClient->executeAsync();

	}
	
	
}

?>

