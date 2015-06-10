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

use Mozu\Api\Clients\Commerce\Customer\Accounts\CustomerNoteClient;
use Mozu\Api\ApiContext;

/**
* Tenant administrators can add and view internal notes for a customer account. For example, a client can track a shopper's interests or complaints. Only clients can add and view notes. Shoppers cannot view these notes from the My Account page.
*/
class CustomerNoteResource {

	private $apiContext;
		
	public function __construct(ApiContext $apiContext) 
	{
		$this->apiContext = $apiContext;
	}

	



	/**
	* Retrieves the contents of a particular note attached to a specified customer account.
	*
	* @param int $accountId Unique identifier of the customer account.
	* @param int $noteId Unique identifier of a particular note to retrieve.
	* @param string $responseFields Use this field to include those fields which are not included by default.
	* @return CustomerNote 
	*/
	public function getAccountNote($accountId, $noteId, $responseFields =  null)
	{
		$mozuClient = CustomerNoteClient::getAccountNoteClient($accountId, $noteId, $responseFields);
		$mozuClient = $mozuClient->withContext($this->apiContext);
		$mozuClient->execute();
		return $mozuClient->getResult();

	}
	
	/**
	* Retrieves a list of notes added to a customer account according to any specified filter criteria and sort options.
	*
	* @param int $accountId Unique identifier of the customer account.
	* @param string $filter A set of expressions that consist of a field, operator, and value and represent search parameter syntax when filtering results of a query. Valid operators include equals (eq), does not equal (ne), greater than (gt), less than (lt), greater than or equal to (ge), less than or equal to (le), starts with (sw), or contains (cont). For example - "filter=IsDisplayed+eq+true"
	* @param int $pageSize The number of results to display on each page when creating paged results from a query. The maximum value is 200.
	* @param string $responseFields Use this field to include those fields which are not included by default.
	* @param string $sortBy The property by which to sort results and whether the results appear in ascending (a-z) order, represented by ASC or in descending (z-a) order, represented by DESC. The sortBy parameter follows an available property. For example: "sortBy=productCode+asc"
	* @param int $startIndex When creating paged results from a query, this value indicates the zero-based offset in the complete result set where the returned entities begin. For example, with a PageSize of 25, to get the 51st through the 75th items, use startIndex=3.
	* @return CustomerNoteCollection 
	*/
	public function getAccountNotes($accountId, $startIndex =  null, $pageSize =  null, $sortBy =  null, $filter =  null, $responseFields =  null)
	{
		$mozuClient = CustomerNoteClient::getAccountNotesClient($accountId, $startIndex, $pageSize, $sortBy, $filter, $responseFields);
		$mozuClient = $mozuClient->withContext($this->apiContext);
		$mozuClient->execute();
		return $mozuClient->getResult();

	}
	
	/**
	* Adds a new note to the specified customer account.
	*
	* @param int $accountId Unique identifier of the customer account.
	* @param string $responseFields Use this field to include those fields which are not included by default.
	* @param CustomerNote $note Properties of a note configured for a customer account.
	* @return CustomerNote 
	*/
	public function addAccountNote($note, $accountId, $responseFields =  null)
	{
		$mozuClient = CustomerNoteClient::addAccountNoteClient($note, $accountId, $responseFields);
		$mozuClient = $mozuClient->withContext($this->apiContext);
		$mozuClient->execute();
		return $mozuClient->getResult();

	}
	
	/**
	* Modifies an existing note for a customer account.
	*
	* @param int $accountId Unique identifier of the customer account.
	* @param int $noteId Unique identifier of a particular note to retrieve.
	* @param string $responseFields Use this field to include those fields which are not included by default.
	* @param CustomerNote $note Properties of a note configured for a customer account.
	* @return CustomerNote 
	*/
	public function updateAccountNote($note, $accountId, $noteId, $responseFields =  null)
	{
		$mozuClient = CustomerNoteClient::updateAccountNoteClient($note, $accountId, $noteId, $responseFields);
		$mozuClient = $mozuClient->withContext($this->apiContext);
		$mozuClient->execute();
		return $mozuClient->getResult();

	}
	
	/**
	* Removes a note from the specified customer account.
	*
	* @param int $accountId Unique identifier of the customer account.
	* @param int $noteId Unique identifier of a particular note to retrieve.
	*/
	public function deleteAccountNote($accountId, $noteId)
	{
		$mozuClient = CustomerNoteClient::deleteAccountNoteClient($accountId, $noteId);
		$mozuClient = $mozuClient->withContext($this->apiContext);
		$mozuClient->execute();

	}
	
	
}

?>

