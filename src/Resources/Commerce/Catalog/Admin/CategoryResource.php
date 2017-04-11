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

use Mozu\Api\Clients\Commerce\Catalog\Admin\CategoryClient;
use Mozu\Api\ApiContext;

use Mozu\Api\Headers;

/**
* Use the Categories resource to organize products and control where they appear on the storefront. Create and maintain a hierarchy of categories and subcategories where the site will store properties.
*/
class CategoryResource {

		private $apiContext;
		private $dataViewMode;
		public function __construct(ApiContext $apiContext, $dataViewMode) 
	{
		$this->apiContext = $apiContext;
		$this->dataViewMode = $dataViewMode;
	}
	



	/**
	* Retrieves a list of categories according to any specified filter criteria and sort options.
	*
	* @param string $filter A set of filter expressions representing the search parameters for a query. This parameter is optional. Refer to [Sorting and Filtering](../../../../Developer/api-guides/sorting-filtering.htm) for a list of supported filters.
	* @param int $pageSize The number of results to display on each page when creating paged results from a query. The maximum value is 200.
	* @param string $responseFields Use this field to include those fields which are not included by default.
	* @param string $sortBy 
	* @param int $startIndex 
	* @return CategoryPagedCollection 
	* @deprecated deprecated since version 1.17
	*/
	public function getCategories($startIndex =  null, $pageSize =  null, $sortBy =  null, $filter =  null, $responseFields =  null)
	{
		$mozuClient = CategoryClient::getCategoriesClient($this->dataViewMode, $startIndex, $pageSize, $sortBy, $filter, $responseFields);
		$mozuClient = $mozuClient->withContext($this->apiContext);
		$mozuClient->execute();
		return $mozuClient->getResult();

	}
	
/**
	* Retrieves a list of categories according to any specified filter criteria and sort options.
	*
	* @param string $filter A set of filter expressions representing the search parameters for a query. This parameter is optional. Refer to [Sorting and Filtering](../../../../Developer/api-guides/sorting-filtering.htm) for a list of supported filters.
	* @param int $pageSize The number of results to display on each page when creating paged results from a query. The maximum value is 200.
	* @param string $responseFields Use this field to include those fields which are not included by default.
	* @param string $sortBy 
	* @param int $startIndex 
	* @return Promise - use $promise->then(sucessfn, errorfn). successFn is passed Mozu\Api\MozuResult. errorFn is passed Mozu\Api\ApiException
	*/
	public function getCategoriesAsync($startIndex =  null, $pageSize =  null, $sortBy =  null, $filter =  null, $responseFields =  null)
	{
		$mozuClient = CategoryClient::getCategoriesClient($this->dataViewMode, $startIndex, $pageSize, $sortBy, $filter, $responseFields);
		$mozuClient = $mozuClient->withContext($this->apiContext);
		return $mozuClient->executeAsync();

	}
	
	/**
	* Retrieves the list of subcategories within a category.
	*
	* @param int $categoryId Unique identifier of the category to modify.
	* @param string $responseFields Use this field to include those fields which are not included by default.
	* @return CategoryCollection 
	* @deprecated deprecated since version 1.17
	*/
	public function getChildCategories($categoryId, $responseFields =  null)
	{
		$mozuClient = CategoryClient::getChildCategoriesClient($categoryId, $responseFields);
		$mozuClient = $mozuClient->withContext($this->apiContext);
		$mozuClient->execute();
		return $mozuClient->getResult();

	}
	
/**
	* Retrieves the list of subcategories within a category.
	*
	* @param int $categoryId Unique identifier of the category to modify.
	* @param string $responseFields Use this field to include those fields which are not included by default.
	* @return Promise - use $promise->then(sucessfn, errorfn). successFn is passed Mozu\Api\MozuResult. errorFn is passed Mozu\Api\ApiException
	*/
	public function getChildCategoriesAsync($categoryId, $responseFields =  null)
	{
		$mozuClient = CategoryClient::getChildCategoriesClient($categoryId, $responseFields);
		$mozuClient = $mozuClient->withContext($this->apiContext);
		return $mozuClient->executeAsync();

	}
	
	/**
	* Retrieves the details of a single category.
	*
	* @param int $categoryId Unique identifier of the category to modify.
	* @param string $responseFields Use this field to include those fields which are not included by default.
	* @return Category 
	* @deprecated deprecated since version 1.17
	*/
	public function getCategory($categoryId, $responseFields =  null)
	{
		$mozuClient = CategoryClient::getCategoryClient($this->dataViewMode, $categoryId, $responseFields);
		$mozuClient = $mozuClient->withContext($this->apiContext);
		$mozuClient->execute();
		return $mozuClient->getResult();

	}
	
/**
	* Retrieves the details of a single category.
	*
	* @param int $categoryId Unique identifier of the category to modify.
	* @param string $responseFields Use this field to include those fields which are not included by default.
	* @return Promise - use $promise->then(sucessfn, errorfn). successFn is passed Mozu\Api\MozuResult. errorFn is passed Mozu\Api\ApiException
	*/
	public function getCategoryAsync($categoryId, $responseFields =  null)
	{
		$mozuClient = CategoryClient::getCategoryClient($this->dataViewMode, $categoryId, $responseFields);
		$mozuClient = $mozuClient->withContext($this->apiContext);
		return $mozuClient->executeAsync();

	}
	
	/**
	* Adds a new category to the site's category hierarchy.Specify a  to determine where to place the category in the hierarchy. If no  is specified, the new category is a top-level category.
	*
	* @param bool $incrementSequence If true, when adding a new product category, set the sequence number of the new category to an increment of one integer greater than the maximum available sequence number across all product categories. If false, set the sequence number to zero.
	* @param string $responseFields Use this field to include those fields which are not included by default.
	* @param bool $useProvidedId Optional. If ,  uses the  you specify in the request as the category's id. If ,  generates an  for the category regardless if you specify an id in the request.If you specify an id already in use and set this parameter to ,  returns an error.
	* @param Category $category A descriptive container that groups products. A category is merchant defined with associated products and discounts as configured. GThe storefront displays products in a hierarchy of categories. As such, categories can include a nesting of sub-categories to organize products and product options per set guidelines such as color, brand, material, and size.
	* @return Category 
	* @deprecated deprecated since version 1.17
	*/
	public function addCategory($category, $incrementSequence =  null, $useProvidedId =  null, $responseFields =  null)
	{
		$mozuClient = CategoryClient::addCategoryClient($category, $incrementSequence, $useProvidedId, $responseFields);
		$mozuClient = $mozuClient->withContext($this->apiContext);
		$mozuClient->execute();
		return $mozuClient->getResult();

	}
	
/**
	* Adds a new category to the site's category hierarchy.Specify a  to determine where to place the category in the hierarchy. If no  is specified, the new category is a top-level category.
	*
	* @param bool $incrementSequence If true, when adding a new product category, set the sequence number of the new category to an increment of one integer greater than the maximum available sequence number across all product categories. If false, set the sequence number to zero.
	* @param string $responseFields Use this field to include those fields which are not included by default.
	* @param bool $useProvidedId Optional. If ,  uses the  you specify in the request as the category's id. If ,  generates an  for the category regardless if you specify an id in the request.If you specify an id already in use and set this parameter to ,  returns an error.
	* @return Promise - use $promise->then(sucessfn, errorfn). successFn is passed Mozu\Api\MozuResult. errorFn is passed Mozu\Api\ApiException
	*/
	public function addCategoryAsync($category, $incrementSequence =  null, $useProvidedId =  null, $responseFields =  null)
	{
		$mozuClient = CategoryClient::addCategoryClient($category, $incrementSequence, $useProvidedId, $responseFields);
		$mozuClient = $mozuClient->withContext($this->apiContext);
		return $mozuClient->executeAsync();

	}
	
	/**
	* Validate the precomputed dynamic category expression for correctness.
	*
	* @param string $responseFields Filtering syntax appended to an API call to increase or decrease the amount of data returned inside a JSON object. This parameter should only be used to retrieve data. Attempting to update data using this parameter may cause data loss.
	* @param DynamicExpression $dynamicExpressionIn The details of the dynamic expression that you want to validate.
	* @return DynamicExpression 
	* @deprecated deprecated since version 1.17
	*/
	public function validateDynamicExpression($dynamicExpressionIn, $responseFields =  null)
	{
		$mozuClient = CategoryClient::validateDynamicExpressionClient($dynamicExpressionIn, $responseFields);
		$mozuClient = $mozuClient->withContext($this->apiContext);
		$mozuClient->execute();
		return $mozuClient->getResult();

	}
	
/**
	* Validate the precomputed dynamic category expression for correctness.
	*
	* @param string $responseFields Filtering syntax appended to an API call to increase or decrease the amount of data returned inside a JSON object. This parameter should only be used to retrieve data. Attempting to update data using this parameter may cause data loss.
	* @return Promise - use $promise->then(sucessfn, errorfn). successFn is passed Mozu\Api\MozuResult. errorFn is passed Mozu\Api\ApiException
	*/
	public function validateDynamicExpressionAsync($dynamicExpressionIn, $responseFields =  null)
	{
		$mozuClient = CategoryClient::validateDynamicExpressionClient($dynamicExpressionIn, $responseFields);
		$mozuClient = $mozuClient->withContext($this->apiContext);
		return $mozuClient->executeAsync();

	}
	
	/**
	* Validates the readltime dynamic category expression for correctness.
	*
	* @param string $responseFields Filtering syntax appended to an API call to increase or decrease the amount of data returned inside a JSON object. This parameter should only be used to retrieve data. Attempting to update data using this parameter may cause data loss.
	* @param DynamicExpression $dynamicExpressionIn The details of the dynamic expression that you want to validate.
	* @return DynamicExpression 
	* @deprecated deprecated since version 1.17
	*/
	public function validateRealTimeDynamicExpression($dynamicExpressionIn, $responseFields =  null)
	{
		$mozuClient = CategoryClient::validateRealTimeDynamicExpressionClient($dynamicExpressionIn, $responseFields);
		$mozuClient = $mozuClient->withContext($this->apiContext);
		$mozuClient->execute();
		return $mozuClient->getResult();

	}
	
/**
	* Validates the readltime dynamic category expression for correctness.
	*
	* @param string $responseFields Filtering syntax appended to an API call to increase or decrease the amount of data returned inside a JSON object. This parameter should only be used to retrieve data. Attempting to update data using this parameter may cause data loss.
	* @return Promise - use $promise->then(sucessfn, errorfn). successFn is passed Mozu\Api\MozuResult. errorFn is passed Mozu\Api\ApiException
	*/
	public function validateRealTimeDynamicExpressionAsync($dynamicExpressionIn, $responseFields =  null)
	{
		$mozuClient = CategoryClient::validateRealTimeDynamicExpressionClient($dynamicExpressionIn, $responseFields);
		$mozuClient = $mozuClient->withContext($this->apiContext);
		return $mozuClient->executeAsync();

	}
	
	/**
	* Update the properties of a defined category or move it to another location in the category hierarchy. Because this operation replaces the defined resource,include all the information to maintain for the category in the request.
	*
	* @param bool $cascadeVisibility If true, when changing the display option for the category, change it for all subcategories also. The default value is false.
	* @param int $categoryId Unique identifier of the category to modify.
	* @param string $responseFields Use this field to include those fields which are not included by default.
	* @param Category $category A descriptive container that groups products. A category is merchant defined with associated products and discounts as configured. GThe storefront displays products in a hierarchy of categories. As such, categories can include a nesting of sub-categories to organize products and product options per set guidelines such as color, brand, material, and size.
	* @return Category 
	* @deprecated deprecated since version 1.17
	*/
	public function updateCategory($category, $categoryId, $cascadeVisibility =  null, $responseFields =  null)
	{
		$mozuClient = CategoryClient::updateCategoryClient($category, $categoryId, $cascadeVisibility, $responseFields);
		$mozuClient = $mozuClient->withContext($this->apiContext);
		$mozuClient->execute();
		return $mozuClient->getResult();

	}
	
/**
	* Update the properties of a defined category or move it to another location in the category hierarchy. Because this operation replaces the defined resource,include all the information to maintain for the category in the request.
	*
	* @param bool $cascadeVisibility If true, when changing the display option for the category, change it for all subcategories also. The default value is false.
	* @param int $categoryId Unique identifier of the category to modify.
	* @param string $responseFields Use this field to include those fields which are not included by default.
	* @return Promise - use $promise->then(sucessfn, errorfn). successFn is passed Mozu\Api\MozuResult. errorFn is passed Mozu\Api\ApiException
	*/
	public function updateCategoryAsync($category, $categoryId, $cascadeVisibility =  null, $responseFields =  null)
	{
		$mozuClient = CategoryClient::updateCategoryClient($category, $categoryId, $cascadeVisibility, $responseFields);
		$mozuClient = $mozuClient->withContext($this->apiContext);
		return $mozuClient->executeAsync();

	}
	
	/**
	* Deletes the specified category. Use the categoryId parameter to specify the category.
	*
	* @param bool $cascadeDelete Specifies whether to also delete all subcategories associated with the specified category.If you set this value is false, only the specified category is deleted.The default value is false.
	* @param int $categoryId Unique identifier of the category to modify.
	* @param bool $forceDelete Specifies whether the category, and any associated subcategories, are deleted even if there are products that reference them. The default value is false.
	* @param bool $reassignToParent Specifies whether any subcategories of the specified category are reassigned to the parent of the specified category.This field only applies if the cascadeDelete parameter is false.The default value is false.
	* @deprecated deprecated since version 1.17
	*/
	public function deleteCategoryById($categoryId, $cascadeDelete =  null, $forceDelete =  null, $reassignToParent =  null)
	{
		$mozuClient = CategoryClient::deleteCategoryByIdClient($categoryId, $cascadeDelete, $forceDelete, $reassignToParent);
		$mozuClient = $mozuClient->withContext($this->apiContext);
		$mozuClient->execute();

	}
	
/**
	* Deletes the specified category. Use the categoryId parameter to specify the category.
	*
	* @param bool $cascadeDelete Specifies whether to also delete all subcategories associated with the specified category.If you set this value is false, only the specified category is deleted.The default value is false.
	* @param int $categoryId Unique identifier of the category to modify.
	* @param bool $forceDelete Specifies whether the category, and any associated subcategories, are deleted even if there are products that reference them. The default value is false.
	* @param bool $reassignToParent Specifies whether any subcategories of the specified category are reassigned to the parent of the specified category.This field only applies if the cascadeDelete parameter is false.The default value is false.
	* @return Promise - use $promise->then(sucessfn, errorfn). successFn is passed Mozu\Api\MozuResult. errorFn is passed Mozu\Api\ApiException
	*/
	public function deleteCategoryByIdAsync($categoryId, $cascadeDelete =  null, $forceDelete =  null, $reassignToParent =  null)
	{
		$mozuClient = CategoryClient::deleteCategoryByIdClient($categoryId, $cascadeDelete, $forceDelete, $reassignToParent);
		$mozuClient = $mozuClient->withContext($this->apiContext);
		return $mozuClient->executeAsync();

	}
	
	
}

?>

