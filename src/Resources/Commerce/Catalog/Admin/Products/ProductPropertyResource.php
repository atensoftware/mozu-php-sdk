<?php


/**
* <auto-generated>
*     This code was generated by Codezu.     
*
*     Changes to this file may cause incorrect behavior and will be lost if
*     the code is regenerated.
* </auto-generated>
*/

namespace Mozu\Api\Resources\Commerce\Catalog\Admin\Products;

use Mozu\Api\Clients\Commerce\Catalog\Admin\Products\ProductPropertyClient;
use Mozu\Api\ApiContext;

use Mozu\Api\Headers;

/**
* Use the Properties resource to configure a property attribute for an individual product associated with a product type that uses the property attribute, as well as set property values for the product.
*/
class ProductPropertyResource {

		private $apiContext;
		private $dataViewMode;
		public function __construct(ApiContext $apiContext, $dataViewMode) 
	{
		$this->apiContext = $apiContext;
		$this->dataViewMode = $dataViewMode;
	}
	



	/**
	* Retrieves a list of the property attributes configured for the product specified in the request.
	*
	* @param string $productCode The unique, user-defined product code of a product, used throughout  to reference and associate to a product.
	* @return array|ProductProperty 
	* @deprecated deprecated since version 1.17
	*/
	public function getProperties($productCode)
	{
		$mozuClient = ProductPropertyClient::getPropertiesClient($this->dataViewMode, $productCode);
		$mozuClient = $mozuClient->withContext($this->apiContext);
		$mozuClient->execute();
		return $mozuClient->getResult();

	}
	
/**
	* Retrieves a list of the property attributes configured for the product specified in the request.
	*
	* @param string $productCode The unique, user-defined product code of a product, used throughout  to reference and associate to a product.
	* @return Promise - use $promise->then(sucessfn, errorfn). successFn is passed Mozu\Api\MozuResult. errorFn is passed Mozu\Api\ApiException
	*/
	public function getPropertiesAsync($productCode)
	{
		$mozuClient = ProductPropertyClient::getPropertiesClient($this->dataViewMode, $productCode);
		$mozuClient = $mozuClient->withContext($this->apiContext);
		return $mozuClient->executeAsync();

	}
	
	/**
	* Retrieves a collection of property values for localized content. This content is set by the locale code. 
	*
	* @param string $attributeFQN Fully qualified name for an attribute.
	* @param string $productCode The unique, user-defined product code of a product, used throughout  to reference and associate to a product.
	* @param string $value The value string to create.
	* @return array|ProductPropertyValueLocalizedContent 
	* @deprecated deprecated since version 1.17
	*/
	public function getPropertyValueLocalizedContents($productCode, $attributeFQN, $value)
	{
		$mozuClient = ProductPropertyClient::getPropertyValueLocalizedContentsClient($this->dataViewMode, $productCode, $attributeFQN, $value);
		$mozuClient = $mozuClient->withContext($this->apiContext);
		$mozuClient->execute();
		return $mozuClient->getResult();

	}
	
/**
	* Retrieves a collection of property values for localized content. This content is set by the locale code. 
	*
	* @param string $attributeFQN Fully qualified name for an attribute.
	* @param string $productCode The unique, user-defined product code of a product, used throughout  to reference and associate to a product.
	* @param string $value The value string to create.
	* @return Promise - use $promise->then(sucessfn, errorfn). successFn is passed Mozu\Api\MozuResult. errorFn is passed Mozu\Api\ApiException
	*/
	public function getPropertyValueLocalizedContentsAsync($productCode, $attributeFQN, $value)
	{
		$mozuClient = ProductPropertyClient::getPropertyValueLocalizedContentsClient($this->dataViewMode, $productCode, $attributeFQN, $value);
		$mozuClient = $mozuClient->withContext($this->apiContext);
		return $mozuClient->executeAsync();

	}
	
	/**
	* Retrieves the property value for localized content. This content is set by the locale code. 
	*
	* @param string $attributeFQN Fully qualified name for an attribute.
	* @param string $localeCode Language used for the entity. Currently, only "en-US" is supported.
	* @param string $productCode The unique, user-defined product code of a product, used throughout  to reference and associate to a product.
	* @param string $responseFields Use this field to include those fields which are not included by default.
	* @param string $value The value string to create.
	* @return ProductPropertyValueLocalizedContent 
	* @deprecated deprecated since version 1.17
	*/
	public function getPropertyValueLocalizedContent($productCode, $attributeFQN, $value, $localeCode, $responseFields =  null)
	{
		$mozuClient = ProductPropertyClient::getPropertyValueLocalizedContentClient($this->dataViewMode, $productCode, $attributeFQN, $value, $localeCode, $responseFields);
		$mozuClient = $mozuClient->withContext($this->apiContext);
		$mozuClient->execute();
		return $mozuClient->getResult();

	}
	
/**
	* Retrieves the property value for localized content. This content is set by the locale code. 
	*
	* @param string $attributeFQN Fully qualified name for an attribute.
	* @param string $localeCode Language used for the entity. Currently, only "en-US" is supported.
	* @param string $productCode The unique, user-defined product code of a product, used throughout  to reference and associate to a product.
	* @param string $responseFields Use this field to include those fields which are not included by default.
	* @param string $value The value string to create.
	* @return Promise - use $promise->then(sucessfn, errorfn). successFn is passed Mozu\Api\MozuResult. errorFn is passed Mozu\Api\ApiException
	*/
	public function getPropertyValueLocalizedContentAsync($productCode, $attributeFQN, $value, $localeCode, $responseFields =  null)
	{
		$mozuClient = ProductPropertyClient::getPropertyValueLocalizedContentClient($this->dataViewMode, $productCode, $attributeFQN, $value, $localeCode, $responseFields);
		$mozuClient = $mozuClient->withContext($this->apiContext);
		return $mozuClient->executeAsync();

	}
	
	/**
	* Retrieves the details of a property attribute configuration for the product specified in the request.
	*
	* @param string $attributeFQN The fully qualified name of the attribute, which is a user defined attribute identifier.
	* @param string $productCode Merchant-created code that uniquely identifies the product such as a SKU or item number. Once created, the product code is read-only.
	* @param string $responseFields Use this field to include those fields which are not included by default.
	* @return ProductProperty 
	* @deprecated deprecated since version 1.17
	*/
	public function getProperty($productCode, $attributeFQN, $responseFields =  null)
	{
		$mozuClient = ProductPropertyClient::getPropertyClient($this->dataViewMode, $productCode, $attributeFQN, $responseFields);
		$mozuClient = $mozuClient->withContext($this->apiContext);
		$mozuClient->execute();
		return $mozuClient->getResult();

	}
	
/**
	* Retrieves the details of a property attribute configuration for the product specified in the request.
	*
	* @param string $attributeFQN The fully qualified name of the attribute, which is a user defined attribute identifier.
	* @param string $productCode Merchant-created code that uniquely identifies the product such as a SKU or item number. Once created, the product code is read-only.
	* @param string $responseFields Use this field to include those fields which are not included by default.
	* @return Promise - use $promise->then(sucessfn, errorfn). successFn is passed Mozu\Api\MozuResult. errorFn is passed Mozu\Api\ApiException
	*/
	public function getPropertyAsync($productCode, $attributeFQN, $responseFields =  null)
	{
		$mozuClient = ProductPropertyClient::getPropertyClient($this->dataViewMode, $productCode, $attributeFQN, $responseFields);
		$mozuClient = $mozuClient->withContext($this->apiContext);
		return $mozuClient->executeAsync();

	}
	
	/**
	* Adds a property value for localized content. This content is set by the locale code. 
	*
	* @param string $attributeFQN Fully qualified name for an attribute.
	* @param string $productCode The unique, user-defined product code of a product, used throughout  to reference and associate to a product.
	* @param string $responseFields Use this field to include those fields which are not included by default.
	* @param string $value The value string to create.
	* @param ProductPropertyValueLocalizedContent $localizedContent Use this field to include those fields which are not included by default.
	* @return ProductPropertyValueLocalizedContent 
	* @deprecated deprecated since version 1.17
	*/
	public function addPropertyValueLocalizedContent($localizedContent, $productCode, $attributeFQN, $value, $responseFields =  null)
	{
		$mozuClient = ProductPropertyClient::addPropertyValueLocalizedContentClient($this->dataViewMode, $localizedContent, $productCode, $attributeFQN, $value, $responseFields);
		$mozuClient = $mozuClient->withContext($this->apiContext);
		$mozuClient->execute();
		return $mozuClient->getResult();

	}
	
/**
	* Adds a property value for localized content. This content is set by the locale code. 
	*
	* @param string $attributeFQN Fully qualified name for an attribute.
	* @param string $productCode The unique, user-defined product code of a product, used throughout  to reference and associate to a product.
	* @param string $responseFields Use this field to include those fields which are not included by default.
	* @param string $value The value string to create.
	* @return Promise - use $promise->then(sucessfn, errorfn). successFn is passed Mozu\Api\MozuResult. errorFn is passed Mozu\Api\ApiException
	*/
	public function addPropertyValueLocalizedContentAsync($localizedContent, $productCode, $attributeFQN, $value, $responseFields =  null)
	{
		$mozuClient = ProductPropertyClient::addPropertyValueLocalizedContentClient($this->dataViewMode, $localizedContent, $productCode, $attributeFQN, $value, $responseFields);
		$mozuClient = $mozuClient->withContext($this->apiContext);
		return $mozuClient->executeAsync();

	}
	
	/**
	* Configures a property attribute for the product specified in the request.
	*
	* @param string $productCode The unique, user-defined product code of a product, used throughout  to reference and associate to a product.
	* @param string $responseFields Use this field to include those fields which are not included by default.
	* @param ProductProperty $productProperty Details of a property defined for a product.
	* @return ProductProperty 
	* @deprecated deprecated since version 1.17
	*/
	public function addProperty($productProperty, $productCode, $responseFields =  null)
	{
		$mozuClient = ProductPropertyClient::addPropertyClient($this->dataViewMode, $productProperty, $productCode, $responseFields);
		$mozuClient = $mozuClient->withContext($this->apiContext);
		$mozuClient->execute();
		return $mozuClient->getResult();

	}
	
/**
	* Configures a property attribute for the product specified in the request.
	*
	* @param string $productCode The unique, user-defined product code of a product, used throughout  to reference and associate to a product.
	* @param string $responseFields Use this field to include those fields which are not included by default.
	* @return Promise - use $promise->then(sucessfn, errorfn). successFn is passed Mozu\Api\MozuResult. errorFn is passed Mozu\Api\ApiException
	*/
	public function addPropertyAsync($productProperty, $productCode, $responseFields =  null)
	{
		$mozuClient = ProductPropertyClient::addPropertyClient($this->dataViewMode, $productProperty, $productCode, $responseFields);
		$mozuClient = $mozuClient->withContext($this->apiContext);
		return $mozuClient->executeAsync();

	}
	
	/**
	* Updates all property values for localized content. This content is set by the locale code. 
	*
	* @param string $attributeFQN Fully qualified name for an attribute.
	* @param string $productCode The unique, user-defined product code of a product, used throughout  to reference and associate to a product.
	* @param string $value The value string to create.
	* @param array|ProductPropertyValueLocalizedContent $localizedContent Content of the product property value in the language defined for the locale code.
	* @return array|ProductPropertyValueLocalizedContent 
	* @deprecated deprecated since version 1.17
	*/
	public function updatePropertyValueLocalizedContents($localizedContent, $productCode, $attributeFQN, $value)
	{
		$mozuClient = ProductPropertyClient::updatePropertyValueLocalizedContentsClient($this->dataViewMode, $localizedContent, $productCode, $attributeFQN, $value);
		$mozuClient = $mozuClient->withContext($this->apiContext);
		$mozuClient->execute();
		return $mozuClient->getResult();

	}
	
/**
	* Updates all property values for localized content. This content is set by the locale code. 
	*
	* @param string $attributeFQN Fully qualified name for an attribute.
	* @param string $productCode The unique, user-defined product code of a product, used throughout  to reference and associate to a product.
	* @param string $value The value string to create.
	* @return Promise - use $promise->then(sucessfn, errorfn). successFn is passed Mozu\Api\MozuResult. errorFn is passed Mozu\Api\ApiException
	*/
	public function updatePropertyValueLocalizedContentsAsync($localizedContent, $productCode, $attributeFQN, $value)
	{
		$mozuClient = ProductPropertyClient::updatePropertyValueLocalizedContentsClient($this->dataViewMode, $localizedContent, $productCode, $attributeFQN, $value);
		$mozuClient = $mozuClient->withContext($this->apiContext);
		return $mozuClient->executeAsync();

	}
	
	/**
	* Updates the property value for localized content. This content is set by the locale code. 
	*
	* @param string $attributeFQN Fully qualified name for an attribute.
	* @param string $localeCode Language used for the entity. Currently, only "en-US" is supported.
	* @param string $productCode The unique, user-defined product code of a product, used throughout  to reference and associate to a product.
	* @param string $responseFields Use this field to include those fields which are not included by default.
	* @param string $value The value string to create.
	* @param ProductPropertyValueLocalizedContent $localizedContent Content of the product property value in the language defined for the locale code.
	* @return ProductPropertyValueLocalizedContent 
	* @deprecated deprecated since version 1.17
	*/
	public function updatePropertyValueLocalizedContent($localizedContent, $productCode, $attributeFQN, $value, $localeCode, $responseFields =  null)
	{
		$mozuClient = ProductPropertyClient::updatePropertyValueLocalizedContentClient($this->dataViewMode, $localizedContent, $productCode, $attributeFQN, $value, $localeCode, $responseFields);
		$mozuClient = $mozuClient->withContext($this->apiContext);
		$mozuClient->execute();
		return $mozuClient->getResult();

	}
	
/**
	* Updates the property value for localized content. This content is set by the locale code. 
	*
	* @param string $attributeFQN Fully qualified name for an attribute.
	* @param string $localeCode Language used for the entity. Currently, only "en-US" is supported.
	* @param string $productCode The unique, user-defined product code of a product, used throughout  to reference and associate to a product.
	* @param string $responseFields Use this field to include those fields which are not included by default.
	* @param string $value The value string to create.
	* @return Promise - use $promise->then(sucessfn, errorfn). successFn is passed Mozu\Api\MozuResult. errorFn is passed Mozu\Api\ApiException
	*/
	public function updatePropertyValueLocalizedContentAsync($localizedContent, $productCode, $attributeFQN, $value, $localeCode, $responseFields =  null)
	{
		$mozuClient = ProductPropertyClient::updatePropertyValueLocalizedContentClient($this->dataViewMode, $localizedContent, $productCode, $attributeFQN, $value, $localeCode, $responseFields);
		$mozuClient = $mozuClient->withContext($this->apiContext);
		return $mozuClient->executeAsync();

	}
	
	/**
	* Update one or more details of a property attribute configuration for the product specified in the request.
	*
	* @param string $attributeFQN The fully qualified name of the attribute, which is a user defined attribute identifier.
	* @param string $productCode The unique, user-defined product code of a product, used throughout  to reference and associate to a product.
	* @param string $responseFields Use this field to include those fields which are not included by default.
	* @param ProductProperty $productProperty Details of a property defined for a product.
	* @return ProductProperty 
	* @deprecated deprecated since version 1.17
	*/
	public function updateProperty($productProperty, $productCode, $attributeFQN, $responseFields =  null)
	{
		$mozuClient = ProductPropertyClient::updatePropertyClient($this->dataViewMode, $productProperty, $productCode, $attributeFQN, $responseFields);
		$mozuClient = $mozuClient->withContext($this->apiContext);
		$mozuClient->execute();
		return $mozuClient->getResult();

	}
	
/**
	* Update one or more details of a property attribute configuration for the product specified in the request.
	*
	* @param string $attributeFQN The fully qualified name of the attribute, which is a user defined attribute identifier.
	* @param string $productCode The unique, user-defined product code of a product, used throughout  to reference and associate to a product.
	* @param string $responseFields Use this field to include those fields which are not included by default.
	* @return Promise - use $promise->then(sucessfn, errorfn). successFn is passed Mozu\Api\MozuResult. errorFn is passed Mozu\Api\ApiException
	*/
	public function updatePropertyAsync($productProperty, $productCode, $attributeFQN, $responseFields =  null)
	{
		$mozuClient = ProductPropertyClient::updatePropertyClient($this->dataViewMode, $productProperty, $productCode, $attributeFQN, $responseFields);
		$mozuClient = $mozuClient->withContext($this->apiContext);
		return $mozuClient->executeAsync();

	}
	
	/**
	* Deletes the configuration of a property attribute for the product specified in the request.
	*
	* @param string $attributeFQN The fully qualified name of the attribute, which is a user defined attribute identifier.
	* @param string $productCode The unique, user-defined product code of a product, used throughout  to reference and associate to a product.
	* @deprecated deprecated since version 1.17
	*/
	public function deleteProperty($productCode, $attributeFQN)
	{
		$mozuClient = ProductPropertyClient::deletePropertyClient($this->dataViewMode, $productCode, $attributeFQN);
		$mozuClient = $mozuClient->withContext($this->apiContext);
		$mozuClient->execute();

	}
	
/**
	* Deletes the configuration of a property attribute for the product specified in the request.
	*
	* @param string $attributeFQN The fully qualified name of the attribute, which is a user defined attribute identifier.
	* @param string $productCode The unique, user-defined product code of a product, used throughout  to reference and associate to a product.
	* @return Promise - use $promise->then(sucessfn, errorfn). successFn is passed Mozu\Api\MozuResult. errorFn is passed Mozu\Api\ApiException
	*/
	public function deletePropertyAsync($productCode, $attributeFQN)
	{
		$mozuClient = ProductPropertyClient::deletePropertyClient($this->dataViewMode, $productCode, $attributeFQN);
		$mozuClient = $mozuClient->withContext($this->apiContext);
		return $mozuClient->executeAsync();

	}
	
	/**
	* Deletes the property value for localized content. This content is set by the locale code. 
	*
	* @param string $attributeFQN Fully qualified name for an attribute.
	* @param string $localeCode Language used for the entity. Currently, only "en-US" is supported.
	* @param string $productCode The unique, user-defined product code of a product, used throughout  to reference and associate to a product.
	* @param string $value The value string to create.
	* @deprecated deprecated since version 1.17
	*/
	public function deletePropertyValueLocalizedContent($productCode, $attributeFQN, $value, $localeCode)
	{
		$mozuClient = ProductPropertyClient::deletePropertyValueLocalizedContentClient($this->dataViewMode, $productCode, $attributeFQN, $value, $localeCode);
		$mozuClient = $mozuClient->withContext($this->apiContext);
		$mozuClient->execute();

	}
	
/**
	* Deletes the property value for localized content. This content is set by the locale code. 
	*
	* @param string $attributeFQN Fully qualified name for an attribute.
	* @param string $localeCode Language used for the entity. Currently, only "en-US" is supported.
	* @param string $productCode The unique, user-defined product code of a product, used throughout  to reference and associate to a product.
	* @param string $value The value string to create.
	* @return Promise - use $promise->then(sucessfn, errorfn). successFn is passed Mozu\Api\MozuResult. errorFn is passed Mozu\Api\ApiException
	*/
	public function deletePropertyValueLocalizedContentAsync($productCode, $attributeFQN, $value, $localeCode)
	{
		$mozuClient = ProductPropertyClient::deletePropertyValueLocalizedContentClient($this->dataViewMode, $productCode, $attributeFQN, $value, $localeCode);
		$mozuClient = $mozuClient->withContext($this->apiContext);
		return $mozuClient->executeAsync();

	}
	
	
}

?>

