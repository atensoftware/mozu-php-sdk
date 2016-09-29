<?php


/**
* <auto-generated>
*     This code was generated by Codezu.     
*
*     Changes to this file may cause incorrect behavior and will be lost if
*     the code is regenerated.
* </auto-generated>
*/

namespace Mozu\Api\Resources\Commerce\Catalog\Admin\Couponsets;

use Mozu\Api\Clients\Commerce\Catalog\Admin\Couponsets\AssignedDiscountClient;
use Mozu\Api\ApiContext;


/**
* Use the AssignedDiscounts resource to manage the discounts assigned to coupon sets.
*/
class AssignedDiscountResource {

		private $apiContext;
			
	public function __construct(ApiContext $apiContext) 
	{
		$this->apiContext = $apiContext;
	}

	



	/**
	* Retrieves the discountIds of any assigned discounts for the specified coupon set.
	*
	* @param string $couponSetCode The unique identifier of the coupon set.
	* @return array|AssignedDiscount 
	* @deprecated deprecated since version 1.17
	*/
	public function getAssignedDiscounts($couponSetCode)
	{
		$mozuClient = AssignedDiscountClient::getAssignedDiscountsClient($couponSetCode);
		$mozuClient = $mozuClient->withContext($this->apiContext);
		$mozuClient->execute();
		return $mozuClient->getResult();

	}
	
/**
	* Retrieves the discountIds of any assigned discounts for the specified coupon set.
	*
	* @param string $couponSetCode The unique identifier of the coupon set.
	* @return Promise - use $promise->then(sucessfn, errorfn). successFn is passed Mozu\Api\MozuResult. errorFn is passed Mozu\Api\ApiException
	*/
	public function getAssignedDiscountsAsync($couponSetCode)
	{
		$mozuClient = AssignedDiscountClient::getAssignedDiscountsClient($couponSetCode);
		$mozuClient = $mozuClient->withContext($this->apiContext);
		return $mozuClient->executeAsync();

	}
	
	/**
	* Assigns or associates an existing discount to a specified coupon set. Use the couponSetCode parameter to specify the coupon set.
	*
	* @param string $couponSetCode The unique identifier of the coupon set.
	* @param AssignedDiscount $assignedDiscount Mozu.ProductAdmin.Contracts.AssignedDiscount ApiType DOCUMENT_HERE 
	* @deprecated deprecated since version 1.17
	*/
	public function assignDiscount($assignedDiscount, $couponSetCode)
	{
		$mozuClient = AssignedDiscountClient::assignDiscountClient($assignedDiscount, $couponSetCode);
		$mozuClient = $mozuClient->withContext($this->apiContext);
		$mozuClient->execute();

	}
	
/**
	* Assigns or associates an existing discount to a specified coupon set. Use the couponSetCode parameter to specify the coupon set.
	*
	* @param string $couponSetCode The unique identifier of the coupon set.
	* @return Promise - use $promise->then(sucessfn, errorfn). successFn is passed Mozu\Api\MozuResult. errorFn is passed Mozu\Api\ApiException
	*/
	public function assignDiscountAsync($assignedDiscount, $couponSetCode)
	{
		$mozuClient = AssignedDiscountClient::assignDiscountClient($assignedDiscount, $couponSetCode);
		$mozuClient = $mozuClient->withContext($this->apiContext);
		return $mozuClient->executeAsync();

	}
	
	/**
	* Unassigns or disassociates the specified discount with the specified coupon set.
	*
	* @param string $couponSetCode The unique identifier of the coupon set.
	* @param int $discountId discountId parameter description DOCUMENT_HERE 
	* @deprecated deprecated since version 1.17
	*/
	public function unAssignDiscount($couponSetCode, $discountId)
	{
		$mozuClient = AssignedDiscountClient::unAssignDiscountClient($couponSetCode, $discountId);
		$mozuClient = $mozuClient->withContext($this->apiContext);
		$mozuClient->execute();

	}
	
/**
	* Unassigns or disassociates the specified discount with the specified coupon set.
	*
	* @param string $couponSetCode The unique identifier of the coupon set.
	* @param int $discountId discountId parameter description DOCUMENT_HERE 
	* @return Promise - use $promise->then(sucessfn, errorfn). successFn is passed Mozu\Api\MozuResult. errorFn is passed Mozu\Api\ApiException
	*/
	public function unAssignDiscountAsync($couponSetCode, $discountId)
	{
		$mozuClient = AssignedDiscountClient::unAssignDiscountClient($couponSetCode, $discountId);
		$mozuClient = $mozuClient->withContext($this->apiContext);
		return $mozuClient->executeAsync();

	}
	
	
}

?>

