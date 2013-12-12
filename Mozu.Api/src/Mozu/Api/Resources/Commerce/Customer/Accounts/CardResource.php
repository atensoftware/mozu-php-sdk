<?php


/**
* <auto-generated>
*     This code was generated by a tool.     
*
*     Changes to this file may cause incorrect behavior and will be lost if
*     the code is regenerated.
* </auto-generated>
*/

namespace Mozu\Api\Resources\Commerce\Customer\Accounts;

use Mozu\Api\MozuClient;
use Mozu\Api\Clients\Commerce\Customer\Accounts\CardClient;
use Mozu\Api\ApiContext;
use Mozu\Api\DataViewMode;
use Mozu\Api\Headers;

/**
* Use the Cards subresource to manage stored credit cards for customer accounts. Mozu stores limited card data in the Customer service for expedited ordering purposes; however, the complete card data is stored in the Payment service.
*/
class CardResource {

	private $apiContext;
	public function __construct(ApiContext $apiContext) 
	{
		$this->apiContext = $apiContext;
	}

	/**
	* Retrieves all stored credit cards for the customer account.
	*
	* @param int $accountId Unique identifier of the customer account.
	* @return CardCollection 
	*/
	public function getAccountCards( $accountId, Mozu\Api\Security\AuthTicket &$authTicket= null)
	{
		$mozuClient = CardClient::getAccountCardsClient( $accountId, $authTicket);
		$mozuClient = $mozuClient->withContext($this->apiContext);
		$mozuClient->execute();
		return $mozuClient->getResult();

	}
	
	/**
	* 
	*
	* @param int $accountId 
	* @param string $cardId 
	* @return Card 
	*/
	public function getAccountCard( $accountId,  $cardId, Mozu\Api\Security\AuthTicket &$authTicket= null)
	{
		$mozuClient = CardClient::getAccountCardClient( $accountId,  $cardId, $authTicket);
		$mozuClient = $mozuClient->withContext($this->apiContext);
		$mozuClient->execute();
		return $mozuClient->getResult();

	}
	
	/**
	* Creates a new credit card record and stores it for the customer account.
	*
	* @param int $accountId Unique identifier of the customer account.
	* @param Card $card Properties of the customer credit card to add to the account.
	* @return Card 
	*/
	public function addAccountCard($card,  $accountId, Mozu\Api\Security\AuthTicket &$authTicket= null)
	{
		$mozuClient = CardClient::addAccountCardClient($card,  $accountId, $authTicket);
		$mozuClient = $mozuClient->withContext($this->apiContext);
		$mozuClient->execute();
		return $mozuClient->getResult();

	}
	
	/**
	* Update one or more properties of a credit card defined for a customer account.
	*
	* @param int $accountId Unique identifier of the customer account.
	* @param string $cardId 
	* @param Card $card Properties of the customer account credit card to update.
	* @return Card 
	*/
	public function updateAccountCard($card,  $accountId,  $cardId, Mozu\Api\Security\AuthTicket &$authTicket= null)
	{
		$mozuClient = CardClient::updateAccountCardClient($card,  $accountId,  $cardId, $authTicket);
		$mozuClient = $mozuClient->withContext($this->apiContext);
		$mozuClient->execute();
		return $mozuClient->getResult();

	}
	
	/**
	* Removes a stored credit card from a customer account.
	*
	* @param int $accountId Unique identifier of the customer account.
	* @param string $cardId Unique identifier of the credit card to delete.
	*/
	public function deleteAccountCard( $accountId,  $cardId, Mozu\Api\Security\AuthTicket &$authTicket= null)
	{
		$mozuClient = CardClient::deleteAccountCardClient( $accountId,  $cardId, $authTicket);
		$mozuClient = $mozuClient->withContext($this->apiContext);
		$mozuClient->execute();

	}
	
	
}

?>
