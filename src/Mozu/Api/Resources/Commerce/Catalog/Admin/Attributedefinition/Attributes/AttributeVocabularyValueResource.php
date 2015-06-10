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

use Mozu\Api\Clients\Commerce\Catalog\Admin\Attributedefinition\Attributes\AttributeVocabularyValueClient;
use Mozu\Api\ApiContext;

/**
* Vocabulary values are predefined for an attribute.
*/
class AttributeVocabularyValueResource {

	private $apiContext;
		
	public function __construct(ApiContext $apiContext) 
	{
		$this->apiContext = $apiContext;
	}

	



	/**
	* Retrieves a list of vocabulary values defined for the attribute specified in the request.
	*
	* @param string $attributeFQN The fully qualified name of the attribute, which is a user defined attribute identifier.
	* @return array|AttributeVocabularyValue 
	*/
	public function getAttributeVocabularyValues($attributeFQN)
	{
		$mozuClient = AttributeVocabularyValueClient::getAttributeVocabularyValuesClient($attributeFQN);
		$mozuClient = $mozuClient->withContext($this->apiContext);
		$mozuClient->execute();
		return $mozuClient->getResult();

	}
	
	/**
	* Retrieves a collection of localized content for vocabulary value attributes based on a `localeCode`. 
	*
	* @param string $attributeFQN Fully qualified name for an attribute.
	* @param string $value The value string to create.
	* @return array|AttributeVocabularyValueLocalizedContent 
	*/
	public function getAttributeVocabularyValueLocalizedContents($attributeFQN, $value)
	{
		$mozuClient = AttributeVocabularyValueClient::getAttributeVocabularyValueLocalizedContentsClient($attributeFQN, $value);
		$mozuClient = $mozuClient->withContext($this->apiContext);
		$mozuClient->execute();
		return $mozuClient->getResult();

	}
	
	/**
	* Retrieves the localized content for a vocabulary value attribute based on a `localeCode`. 
	*
	* @param string $attributeFQN Fully qualified name for an attribute.
	* @param string $localeCode Language used for the entity. Currently, only "en-US" is supported.
	* @param string $responseFields Use this field to include those fields which are not included by default.
	* @param string $value The value string to create.
	* @return AttributeVocabularyValueLocalizedContent 
	*/
	public function getAttributeVocabularyValueLocalizedContent($attributeFQN, $value, $localeCode, $responseFields =  null)
	{
		$mozuClient = AttributeVocabularyValueClient::getAttributeVocabularyValueLocalizedContentClient($attributeFQN, $value, $localeCode, $responseFields);
		$mozuClient = $mozuClient->withContext($this->apiContext);
		$mozuClient->execute();
		return $mozuClient->getResult();

	}
	
	/**
	* Retrieves the details of a vocabulary value defined for an attribute by providing the attribute's fully qualified name and the value to retrieve.
	*
	* @param string $attributeFQN The fully qualified name of the attribute, which is a user defined attribute identifier.
	* @param string $responseFields Use this field to include those fields which are not included by default.
	* @param string $value The value string to create.
	* @return AttributeVocabularyValue 
	*/
	public function getAttributeVocabularyValue($attributeFQN, $value, $responseFields =  null)
	{
		$mozuClient = AttributeVocabularyValueClient::getAttributeVocabularyValueClient($attributeFQN, $value, $responseFields);
		$mozuClient = $mozuClient->withContext($this->apiContext);
		$mozuClient->execute();
		return $mozuClient->getResult();

	}
	
	/**
	* Creates and saves localized vocabulary value content for an attribute, based on the `localeCode`.
	*
	* @param string $attributeFQN Fully qualified name for an attribute.
	* @param string $responseFields Use this field to include those fields which are not included by default.
	* @param string $value The value string to create.
	* @param AttributeVocabularyValueLocalizedContent $localizedContent The localized text for the string value of a product attribute.
	* @return AttributeVocabularyValueLocalizedContent 
	*/
	public function addAttributeVocabularyValueLocalizedContent($localizedContent, $attributeFQN, $value, $responseFields =  null)
	{
		$mozuClient = AttributeVocabularyValueClient::addAttributeVocabularyValueLocalizedContentClient($localizedContent, $attributeFQN, $value, $responseFields);
		$mozuClient = $mozuClient->withContext($this->apiContext);
		$mozuClient->execute();
		return $mozuClient->getResult();

	}
	
	/**
	* Creates a vocabulary value for a defined product attribute.
	*
	* @param string $attributeFQN The fully qualified name of the attribute, which is a user defined attribute identifier.
	* @param string $responseFields Use this field to include those fields which are not included by default.
	* @param AttributeVocabularyValue $attributeVocabularyValue Properties of a vocabulary value defined for an extensible attribute.
	* @return AttributeVocabularyValue 
	*/
	public function addAttributeVocabularyValue($attributeVocabularyValue, $attributeFQN, $responseFields =  null)
	{
		$mozuClient = AttributeVocabularyValueClient::addAttributeVocabularyValueClient($attributeVocabularyValue, $attributeFQN, $responseFields);
		$mozuClient = $mozuClient->withContext($this->apiContext);
		$mozuClient->execute();
		return $mozuClient->getResult();

	}
	
	/**
	* Update existing vocabulary values for an attribute.
	*
	* @param string $attributeFQN The fully qualified name of the attribute, which is a user defined attribute identifier.
	* @param array|AttributeVocabularyValue $vocabularyValues Properties of a vocabulary value defined for an extensible attribute.
	* @return array|AttributeVocabularyValue 
	*/
	public function updateAttributeVocabularyValues($vocabularyValues, $attributeFQN)
	{
		$mozuClient = AttributeVocabularyValueClient::updateAttributeVocabularyValuesClient($vocabularyValues, $attributeFQN);
		$mozuClient = $mozuClient->withContext($this->apiContext);
		$mozuClient->execute();
		return $mozuClient->getResult();

	}
	
	/**
	* Updates a collection of localized vocabulary value content for existing attributes, based on the `localeCode`.
	*
	* @param string $attributeFQN Fully qualified name for an attribute.
	* @param string $value The value string to create.
	* @param array|AttributeVocabularyValueLocalizedContent $localizedContent The localized text for the string value of a product attribute.
	* @return array|AttributeVocabularyValueLocalizedContent 
	*/
	public function updateAttributeVocabularyValueLocalizedContents($localizedContent, $attributeFQN, $value)
	{
		$mozuClient = AttributeVocabularyValueClient::updateAttributeVocabularyValueLocalizedContentsClient($localizedContent, $attributeFQN, $value);
		$mozuClient = $mozuClient->withContext($this->apiContext);
		$mozuClient->execute();
		return $mozuClient->getResult();

	}
	
	/**
	* Updates localized vocabulary value content for an existing attribute, based on the `localeCode`.
	*
	* @param string $attributeFQN Fully qualified name for an attribute.
	* @param string $localeCode The two character country code that sets the locale, such as US for United States. Sites, tenants, and catalogs use locale codes for localizing content, such as translated product text per supported country.
	* @param string $responseFields Use this field to include those fields which are not included by default.
	* @param string $value The value string to create.
	* @param AttributeVocabularyValueLocalizedContent $localizedContent The localized text for the string value of a product attribute.
	* @return AttributeVocabularyValueLocalizedContent 
	*/
	public function updateAttributeVocabularyValueLocalizedContent($localizedContent, $attributeFQN, $value, $localeCode, $responseFields =  null)
	{
		$mozuClient = AttributeVocabularyValueClient::updateAttributeVocabularyValueLocalizedContentClient($localizedContent, $attributeFQN, $value, $localeCode, $responseFields);
		$mozuClient = $mozuClient->withContext($this->apiContext);
		$mozuClient->execute();
		return $mozuClient->getResult();

	}
	
	/**
	* Updates existing attribute vocabulary values.
	*
	* @param string $attributeFQN The fully qualified name of the attribute, which is a user defined attribute identifier.
	* @param string $responseFields Use this field to include those fields which are not included by default.
	* @param string $value The value string to create.
	* @param AttributeVocabularyValue $attributeVocabularyValue Properties of a vocabulary value defined for an extensible attribute.
	* @return AttributeVocabularyValue 
	*/
	public function updateAttributeVocabularyValue($attributeVocabularyValue, $attributeFQN, $value, $responseFields =  null)
	{
		$mozuClient = AttributeVocabularyValueClient::updateAttributeVocabularyValueClient($attributeVocabularyValue, $attributeFQN, $value, $responseFields);
		$mozuClient = $mozuClient->withContext($this->apiContext);
		$mozuClient->execute();
		return $mozuClient->getResult();

	}
	
	/**
	* Deletes an attribute's vocabulary value.
	*
	* @param string $attributeFQN The fully qualified name of the attribute, which is a user defined attribute identifier.
	* @param string $value The value string to create.
	*/
	public function deleteAttributeVocabularyValue($attributeFQN, $value)
	{
		$mozuClient = AttributeVocabularyValueClient::deleteAttributeVocabularyValueClient($attributeFQN, $value);
		$mozuClient = $mozuClient->withContext($this->apiContext);
		$mozuClient->execute();

	}
	
	/**
	* Removes localized content for a vocabulary value attribute. 
	*
	* @param string $attributeFQN Fully qualified name for an attribute.
	* @param string $localeCode Language used for the entity. Currently, only "en-US" is supported.
	* @param string $value The value string to create.
	*/
	public function deleteAttributeVocabularyValueLocalizedContent($attributeFQN, $value, $localeCode)
	{
		$mozuClient = AttributeVocabularyValueClient::deleteAttributeVocabularyValueLocalizedContentClient($attributeFQN, $value, $localeCode);
		$mozuClient = $mozuClient->withContext($this->apiContext);
		$mozuClient->execute();

	}
	
	
}

?>

