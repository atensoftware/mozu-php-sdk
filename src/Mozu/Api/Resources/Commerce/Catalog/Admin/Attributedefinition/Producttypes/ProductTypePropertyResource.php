<?php


/**
* <auto-generated>
*     This code was generated by a Codezu.     
*
*     Changes to this file may cause incorrect behavior and will be lost if
*     the code is regenerated.
* </auto-generated>
*/

namespace Mozu\Api\Resources\Commerce\Catalog\Admin\Attributedefinition\Producttypes;

use Mozu\Api\Clients\Commerce\Catalog\Admin\Attributedefinition\Producttypes\ProductTypePropertyClient;
use Mozu\Api\ApiContext;

use Mozu\Api\Contracts\ProductAdmin\AttributeInProductType;

/**
* Use the Properties subresource to define how property product attributes are used for a specific product type. Product attribute definitions are unique for each associated product type.
*/
class ProductTypePropertyResource {

	private $apiContext;
	private $dataViewMode;
	public function __construct(ApiContext $apiContext, $dataViewMode) 
	{
		$this->apiContext = $apiContext;
		$this->dataViewMode = $dataViewMode;
	}

	

	/**
	* Retrieves a list of product property attributes defined for a product type.
	*
	* @param int $productTypeId Identifier of the product type.
	* @return array|AttributeInProductType 
	*/
	public function getProperties($productTypeId)
	{
		$mozuClient = ProductTypePropertyClient::getPropertiesClient($this->dataViewMode, $productTypeId);
		return $mozuClient->withContext($this->apiContext)
				->execute()
				->getResult();

	}
	
	/**
	* Retrieves a product property attribute definition for the specified product type.
	*
	* @param string $attributeFQN The fully qualified name of the attribute, which is a user defined attribute identifier.
	* @param int $productTypeId Identifier of the product type.
	* @param string $responseFields Use this field to include those fields which are not included by default.
	* @return AttributeInProductType 
	*/
	public function getProperty($productTypeId, $attributeFQN, $responseFields =  null)
	{
		$mozuClient = ProductTypePropertyClient::getPropertyClient($this->dataViewMode, $productTypeId, $attributeFQN, $responseFields);
		return $mozuClient->withContext($this->apiContext)
				->execute()
				->getResult();

	}
	
	/**
	* Assigns a property attribute to the specified product type, according to the information defined in the request.
	*
	* @param int $productTypeId Identifier of the product type.
	* @param string $responseFields Use this field to include those fields which are not included by default.
	* @param AttributeInProductType $attributeInProductType Properties of the property attribute to define for the specified product type.
	* @return AttributeInProductType 
	*/
	public function addProperty($attributeInProductType, $productTypeId, $responseFields =  null)
	{
		$mozuClient = ProductTypePropertyClient::addPropertyClient($this->dataViewMode, $attributeInProductType, $productTypeId, $responseFields);
		return $mozuClient->withContext($this->apiContext)
				->execute()
				->getResult();

	}
	
	/**
	* Updates the definition of a property attribute for the specified product type.
	*
	* @param string $attributeFQN The fully qualified name of the attribute, which is a user defined attribute identifier.
	* @param int $productTypeId Identifier of the product type.
	* @param string $responseFields Use this field to include those fields which are not included by default.
	* @param AttributeInProductType $attributeInProductType Properties of the property attribute to define for the product type.
	* @return AttributeInProductType 
	*/
	public function updateProperty($attributeInProductType, $productTypeId, $attributeFQN, $responseFields =  null)
	{
		$mozuClient = ProductTypePropertyClient::updatePropertyClient($this->dataViewMode, $attributeInProductType, $productTypeId, $attributeFQN, $responseFields);
		return $mozuClient->withContext($this->apiContext)
				->execute()
				->getResult();

	}
	
	/**
	* Removes a property attribute previously defined for the specified product type.
	*
	* @param string $attributeFQN The fully qualified name of the attribute, which is a user defined attribute identifier.
	* @param int $productTypeId Identifier of the product type.
	* @return void
	*/
	public function deleteProperty($productTypeId, $attributeFQN)
	{
		$mozuClient = ProductTypePropertyClient::deletePropertyClient($this->dataViewMode, $productTypeId, $attributeFQN);
		$mozuClient->withContext($this->apiContext)
				->execute();

	}
	
	
}

?>
