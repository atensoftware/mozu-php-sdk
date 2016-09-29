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

use Mozu\Api\Clients\Commerce\Catalog\Admin\PriceListClient;
use Mozu\Api\ApiContext;


/**
* Allows you to create and manage products that you will offer on your storefront. You can create products with options that a shopper configures (such as a T-shirt color and size). You can set discounts and sale prices for your products, manage product inventory, and more.
*/
class PriceListResource {

		private $apiContext;
			
	public function __construct(ApiContext $apiContext) 
	{
		$this->apiContext = $apiContext;
	}

	



	/**
	* admin-pricelists Get GetPriceLists description DOCUMENT_HERE 
	*
	* @param string $filter A set of filter expressions representing the search parameters for a query. This parameter is optional. Refer to [Sorting and Filtering](../../../../Developer/applications/sorting-filtering.htm) for a list of supported filters.
	* @param int $pageSize When creating paged results from a query, this value indicates the zero-based offset in the complete result set where the returned entities begin. For example, with this parameter set to 25, to get the 51st through the 75th items, set startIndex to 50.
	* @param string $responseFields Filtering syntax appended to an API call to increase or decrease the amount of data returned inside a JSON object. This parameter should only be used to retrieve data. Attempting to update data using this parameter may cause data loss.
	* @param string $sortBy The element to sort the results by and the channel in which the results appear. Either ascending (a-z) or descending (z-a) channel. Optional. Refer to [Sorting and Filtering](../../../../Developer/applications/sorting-filtering.htm) for more information.
	* @param int $startIndex When creating paged results from a query, this value indicates the zero-based offset in the complete result set where the returned entities begin. For example, with pageSize set to 25, to get the 51st through the 75th items, set this parameter to 50.
	* @return PriceListCollection 
	* @deprecated deprecated since version 1.17
	*/
	public function getPriceLists($startIndex =  null, $pageSize =  null, $sortBy =  null, $filter =  null, $responseFields =  null)
	{
		$mozuClient = PriceListClient::getPriceListsClient($startIndex, $pageSize, $sortBy, $filter, $responseFields);
		$mozuClient = $mozuClient->withContext($this->apiContext);
		$mozuClient->execute();
		return $mozuClient->getResult();

	}
	
/**
	* admin-pricelists Get GetPriceLists description DOCUMENT_HERE 
	*
	* @param string $filter A set of filter expressions representing the search parameters for a query. This parameter is optional. Refer to [Sorting and Filtering](../../../../Developer/applications/sorting-filtering.htm) for a list of supported filters.
	* @param int $pageSize When creating paged results from a query, this value indicates the zero-based offset in the complete result set where the returned entities begin. For example, with this parameter set to 25, to get the 51st through the 75th items, set startIndex to 50.
	* @param string $responseFields Filtering syntax appended to an API call to increase or decrease the amount of data returned inside a JSON object. This parameter should only be used to retrieve data. Attempting to update data using this parameter may cause data loss.
	* @param string $sortBy The element to sort the results by and the channel in which the results appear. Either ascending (a-z) or descending (z-a) channel. Optional. Refer to [Sorting and Filtering](../../../../Developer/applications/sorting-filtering.htm) for more information.
	* @param int $startIndex When creating paged results from a query, this value indicates the zero-based offset in the complete result set where the returned entities begin. For example, with pageSize set to 25, to get the 51st through the 75th items, set this parameter to 50.
	* @return Promise - use $promise->then(sucessfn, errorfn). successFn is passed Mozu\Api\MozuResult. errorFn is passed Mozu\Api\ApiException
	*/
	public function getPriceListsAsync($startIndex =  null, $pageSize =  null, $sortBy =  null, $filter =  null, $responseFields =  null)
	{
		$mozuClient = PriceListClient::getPriceListsClient($startIndex, $pageSize, $sortBy, $filter, $responseFields);
		$mozuClient = $mozuClient->withContext($this->apiContext);
		return $mozuClient->executeAsync();

	}
	
	/**
	* admin-pricelists Get GetPriceList description DOCUMENT_HERE 
	*
	* @param string $priceListCode The unique, user-defined code of the price list.
	* @param string $responseFields Filtering syntax appended to an API call to increase or decrease the amount of data returned inside a JSON object. This parameter should only be used to retrieve data. Attempting to update data using this parameter may cause data loss.
	* @return PriceList 
	* @deprecated deprecated since version 1.17
	*/
	public function getPriceList($priceListCode, $responseFields =  null)
	{
		$mozuClient = PriceListClient::getPriceListClient($priceListCode, $responseFields);
		$mozuClient = $mozuClient->withContext($this->apiContext);
		$mozuClient->execute();
		return $mozuClient->getResult();

	}
	
/**
	* admin-pricelists Get GetPriceList description DOCUMENT_HERE 
	*
	* @param string $priceListCode The unique, user-defined code of the price list.
	* @param string $responseFields Filtering syntax appended to an API call to increase or decrease the amount of data returned inside a JSON object. This parameter should only be used to retrieve data. Attempting to update data using this parameter may cause data loss.
	* @return Promise - use $promise->then(sucessfn, errorfn). successFn is passed Mozu\Api\MozuResult. errorFn is passed Mozu\Api\ApiException
	*/
	public function getPriceListAsync($priceListCode, $responseFields =  null)
	{
		$mozuClient = PriceListClient::getPriceListClient($priceListCode, $responseFields);
		$mozuClient = $mozuClient->withContext($this->apiContext);
		return $mozuClient->executeAsync();

	}
	
	/**
	* admin-pricelists Post AddPriceList description DOCUMENT_HERE 
	*
	* @param string $responseFields Filtering syntax appended to an API call to increase or decrease the amount of data returned inside a JSON object. This parameter should only be used to retrieve data. Attempting to update data using this parameter may cause data loss.
	* @param PriceList $priceList Mozu.ProductAdmin.Contracts.PriceList ApiType DOCUMENT_HERE 
	* @return PriceList 
	* @deprecated deprecated since version 1.17
	*/
	public function addPriceList($priceList, $responseFields =  null)
	{
		$mozuClient = PriceListClient::addPriceListClient($priceList, $responseFields);
		$mozuClient = $mozuClient->withContext($this->apiContext);
		$mozuClient->execute();
		return $mozuClient->getResult();

	}
	
/**
	* admin-pricelists Post AddPriceList description DOCUMENT_HERE 
	*
	* @param string $responseFields Filtering syntax appended to an API call to increase or decrease the amount of data returned inside a JSON object. This parameter should only be used to retrieve data. Attempting to update data using this parameter may cause data loss.
	* @return Promise - use $promise->then(sucessfn, errorfn). successFn is passed Mozu\Api\MozuResult. errorFn is passed Mozu\Api\ApiException
	*/
	public function addPriceListAsync($priceList, $responseFields =  null)
	{
		$mozuClient = PriceListClient::addPriceListClient($priceList, $responseFields);
		$mozuClient = $mozuClient->withContext($this->apiContext);
		return $mozuClient->executeAsync();

	}
	
	/**
	* admin-pricelists Put UpdatePriceList description DOCUMENT_HERE 
	*
	* @param string $priceListCode The unique, user-defined code of the price list.
	* @param string $responseFields Filtering syntax appended to an API call to increase or decrease the amount of data returned inside a JSON object. This parameter should only be used to retrieve data. Attempting to update data using this parameter may cause data loss.
	* @param PriceList $priceList Mozu.ProductAdmin.Contracts.PriceList ApiType DOCUMENT_HERE 
	* @return PriceList 
	* @deprecated deprecated since version 1.17
	*/
	public function updatePriceList($priceList, $priceListCode, $responseFields =  null)
	{
		$mozuClient = PriceListClient::updatePriceListClient($priceList, $priceListCode, $responseFields);
		$mozuClient = $mozuClient->withContext($this->apiContext);
		$mozuClient->execute();
		return $mozuClient->getResult();

	}
	
/**
	* admin-pricelists Put UpdatePriceList description DOCUMENT_HERE 
	*
	* @param string $priceListCode The unique, user-defined code of the price list.
	* @param string $responseFields Filtering syntax appended to an API call to increase or decrease the amount of data returned inside a JSON object. This parameter should only be used to retrieve data. Attempting to update data using this parameter may cause data loss.
	* @return Promise - use $promise->then(sucessfn, errorfn). successFn is passed Mozu\Api\MozuResult. errorFn is passed Mozu\Api\ApiException
	*/
	public function updatePriceListAsync($priceList, $priceListCode, $responseFields =  null)
	{
		$mozuClient = PriceListClient::updatePriceListClient($priceList, $priceListCode, $responseFields);
		$mozuClient = $mozuClient->withContext($this->apiContext);
		return $mozuClient->executeAsync();

	}
	
	/**
	* admin-pricelists Delete DeletePriceList description DOCUMENT_HERE 
	*
	* @param bool $cascadeDeleteEntries Specifies whether to deletes all price list entries associated with the price list.
	* @param string $priceListCode The unique, user-defined code of the price list.
	* @deprecated deprecated since version 1.17
	*/
	public function deletePriceList($priceListCode, $cascadeDeleteEntries =  null)
	{
		$mozuClient = PriceListClient::deletePriceListClient($priceListCode, $cascadeDeleteEntries);
		$mozuClient = $mozuClient->withContext($this->apiContext);
		$mozuClient->execute();

	}
	
/**
	* admin-pricelists Delete DeletePriceList description DOCUMENT_HERE 
	*
	* @param bool $cascadeDeleteEntries Specifies whether to deletes all price list entries associated with the price list.
	* @param string $priceListCode The unique, user-defined code of the price list.
	* @return Promise - use $promise->then(sucessfn, errorfn). successFn is passed Mozu\Api\MozuResult. errorFn is passed Mozu\Api\ApiException
	*/
	public function deletePriceListAsync($priceListCode, $cascadeDeleteEntries =  null)
	{
		$mozuClient = PriceListClient::deletePriceListClient($priceListCode, $cascadeDeleteEntries);
		$mozuClient = $mozuClient->withContext($this->apiContext);
		return $mozuClient->executeAsync();

	}
	
	
}

?>

