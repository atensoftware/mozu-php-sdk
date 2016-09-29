<?php


/**
* <auto-generated>
*     This code was generated by Codezu.     
*
*     Changes to this file may cause incorrect behavior and will be lost if
*     the code is regenerated.
* </auto-generated>
*/

namespace Mozu\Api\Resources\Commerce\Catalog\Admin\Attributedefinition\Attributes;

use Mozu\Api\Clients\Commerce\Catalog\Admin\Attributedefinition\Attributes\AttributeLocalizedContentClient;
use Mozu\Api\ApiContext;


/**
* Properties of localized content for attributes, based on a `localeCode` at a site/tenant level. This content supports translated text for product, product options, and additional objects. 
*/
class AttributeLocalizedContentResource {

		private $apiContext;
			
	public function __construct(ApiContext $apiContext) 
	{
		$this->apiContext = $apiContext;
	}

	



	/**
	* Retrieves a collection of localized content for attributes based on a `localeCode`.
	*
	* @param string $attributeFQN Fully qualified name for an attribute.
	* @return array|AttributeLocalizedContent 
	* @deprecated deprecated since version 1.17
	*/
	public function getAttributeLocalizedContents($attributeFQN)
	{
		$mozuClient = AttributeLocalizedContentClient::getAttributeLocalizedContentsClient($attributeFQN);
		$mozuClient = $mozuClient->withContext($this->apiContext);
		$mozuClient->execute();
		return $mozuClient->getResult();

	}
	
/**
	* Retrieves a collection of localized content for attributes based on a `localeCode`.
	*
	* @param string $attributeFQN Fully qualified name for an attribute.
	* @return Promise - use $promise->then(sucessfn, errorfn). successFn is passed Mozu\Api\MozuResult. errorFn is passed Mozu\Api\ApiException
	*/
	public function getAttributeLocalizedContentsAsync($attributeFQN)
	{
		$mozuClient = AttributeLocalizedContentClient::getAttributeLocalizedContentsClient($attributeFQN);
		$mozuClient = $mozuClient->withContext($this->apiContext);
		return $mozuClient->executeAsync();

	}
	
	/**
	* Retrieves the localized content for an attribute based on a `localeCode`.
	*
	* @param string $attributeFQN Fully qualified name for an attribute.
	* @param string $localeCode Language used for the entity. Currently, only "en-US" is supported.
	* @param string $responseFields Use this field to include those fields which are not included by default.
	* @return AttributeLocalizedContent 
	* @deprecated deprecated since version 1.17
	*/
	public function getAttributeLocalizedContent($attributeFQN, $localeCode, $responseFields =  null)
	{
		$mozuClient = AttributeLocalizedContentClient::getAttributeLocalizedContentClient($attributeFQN, $localeCode, $responseFields);
		$mozuClient = $mozuClient->withContext($this->apiContext);
		$mozuClient->execute();
		return $mozuClient->getResult();

	}
	
/**
	* Retrieves the localized content for an attribute based on a `localeCode`.
	*
	* @param string $attributeFQN Fully qualified name for an attribute.
	* @param string $localeCode Language used for the entity. Currently, only "en-US" is supported.
	* @param string $responseFields Use this field to include those fields which are not included by default.
	* @return Promise - use $promise->then(sucessfn, errorfn). successFn is passed Mozu\Api\MozuResult. errorFn is passed Mozu\Api\ApiException
	*/
	public function getAttributeLocalizedContentAsync($attributeFQN, $localeCode, $responseFields =  null)
	{
		$mozuClient = AttributeLocalizedContentClient::getAttributeLocalizedContentClient($attributeFQN, $localeCode, $responseFields);
		$mozuClient = $mozuClient->withContext($this->apiContext);
		return $mozuClient->executeAsync();

	}
	
	/**
	* Adds new localized content for an attribute based on a `localeCode`.
	*
	* @param string $attributeFQN Fully qualified name for an attribute.
	* @param string $responseFields Use this field to include those fields which are not included by default.
	* @param AttributeLocalizedContent $localizedContent The localized name and description of the attribute, displayed in the locale defined for the master catalog.
	* @return AttributeLocalizedContent 
	* @deprecated deprecated since version 1.17
	*/
	public function addLocalizedContent($localizedContent, $attributeFQN, $responseFields =  null)
	{
		$mozuClient = AttributeLocalizedContentClient::addLocalizedContentClient($localizedContent, $attributeFQN, $responseFields);
		$mozuClient = $mozuClient->withContext($this->apiContext);
		$mozuClient->execute();
		return $mozuClient->getResult();

	}
	
/**
	* Adds new localized content for an attribute based on a `localeCode`.
	*
	* @param string $attributeFQN Fully qualified name for an attribute.
	* @param string $responseFields Use this field to include those fields which are not included by default.
	* @return Promise - use $promise->then(sucessfn, errorfn). successFn is passed Mozu\Api\MozuResult. errorFn is passed Mozu\Api\ApiException
	*/
	public function addLocalizedContentAsync($localizedContent, $attributeFQN, $responseFields =  null)
	{
		$mozuClient = AttributeLocalizedContentClient::addLocalizedContentClient($localizedContent, $attributeFQN, $responseFields);
		$mozuClient = $mozuClient->withContext($this->apiContext);
		return $mozuClient->executeAsync();

	}
	
	/**
	* Updates the localized content for a collection of existing attributes based on a `localeCode`.
	*
	* @param string $attributeFQN Fully qualified name for an attribute.
	* @param array|AttributeLocalizedContent $localizedContent The localized name and description of the attribute, displayed in the locale defined for the master catalog.
	* @return array|AttributeLocalizedContent 
	* @deprecated deprecated since version 1.17
	*/
	public function updateLocalizedContents($localizedContent, $attributeFQN)
	{
		$mozuClient = AttributeLocalizedContentClient::updateLocalizedContentsClient($localizedContent, $attributeFQN);
		$mozuClient = $mozuClient->withContext($this->apiContext);
		$mozuClient->execute();
		return $mozuClient->getResult();

	}
	
/**
	* Updates the localized content for a collection of existing attributes based on a `localeCode`.
	*
	* @param string $attributeFQN Fully qualified name for an attribute.
	* @return Promise - use $promise->then(sucessfn, errorfn). successFn is passed Mozu\Api\MozuResult. errorFn is passed Mozu\Api\ApiException
	*/
	public function updateLocalizedContentsAsync($localizedContent, $attributeFQN)
	{
		$mozuClient = AttributeLocalizedContentClient::updateLocalizedContentsClient($localizedContent, $attributeFQN);
		$mozuClient = $mozuClient->withContext($this->apiContext);
		return $mozuClient->executeAsync();

	}
	
	/**
	* Updates the localized content for an existing attribute based on a `localeCode`.
	*
	* @param string $attributeFQN Fully qualified name for an attribute.
	* @param string $localeCode Language used for the entity. Currently, only "en-US" is supported.
	* @param string $responseFields Use this field to include those fields which are not included by default.
	* @param AttributeLocalizedContent $localizedContent The localized name and description of the attribute, displayed in the locale defined for the master catalog.
	* @return AttributeLocalizedContent 
	* @deprecated deprecated since version 1.17
	*/
	public function updateLocalizedContent($localizedContent, $attributeFQN, $localeCode, $responseFields =  null)
	{
		$mozuClient = AttributeLocalizedContentClient::updateLocalizedContentClient($localizedContent, $attributeFQN, $localeCode, $responseFields);
		$mozuClient = $mozuClient->withContext($this->apiContext);
		$mozuClient->execute();
		return $mozuClient->getResult();

	}
	
/**
	* Updates the localized content for an existing attribute based on a `localeCode`.
	*
	* @param string $attributeFQN Fully qualified name for an attribute.
	* @param string $localeCode Language used for the entity. Currently, only "en-US" is supported.
	* @param string $responseFields Use this field to include those fields which are not included by default.
	* @return Promise - use $promise->then(sucessfn, errorfn). successFn is passed Mozu\Api\MozuResult. errorFn is passed Mozu\Api\ApiException
	*/
	public function updateLocalizedContentAsync($localizedContent, $attributeFQN, $localeCode, $responseFields =  null)
	{
		$mozuClient = AttributeLocalizedContentClient::updateLocalizedContentClient($localizedContent, $attributeFQN, $localeCode, $responseFields);
		$mozuClient = $mozuClient->withContext($this->apiContext);
		return $mozuClient->executeAsync();

	}
	
	/**
	* Removes all localized content. Localized content is translated text information and data based on a `localeCode`. 
	*
	* @param string $attributeFQN Fully qualified name for an attribute.
	* @param string $localeCode Language used for the entity. Currently, only "en-US" is supported.
	* @deprecated deprecated since version 1.17
	*/
	public function deleteLocalizedContent($attributeFQN, $localeCode)
	{
		$mozuClient = AttributeLocalizedContentClient::deleteLocalizedContentClient($attributeFQN, $localeCode);
		$mozuClient = $mozuClient->withContext($this->apiContext);
		$mozuClient->execute();

	}
	
/**
	* Removes all localized content. Localized content is translated text information and data based on a `localeCode`. 
	*
	* @param string $attributeFQN Fully qualified name for an attribute.
	* @param string $localeCode Language used for the entity. Currently, only "en-US" is supported.
	* @return Promise - use $promise->then(sucessfn, errorfn). successFn is passed Mozu\Api\MozuResult. errorFn is passed Mozu\Api\ApiException
	*/
	public function deleteLocalizedContentAsync($attributeFQN, $localeCode)
	{
		$mozuClient = AttributeLocalizedContentClient::deleteLocalizedContentClient($attributeFQN, $localeCode);
		$mozuClient = $mozuClient->withContext($this->apiContext);
		return $mozuClient->executeAsync();

	}
	
	
}

?>

