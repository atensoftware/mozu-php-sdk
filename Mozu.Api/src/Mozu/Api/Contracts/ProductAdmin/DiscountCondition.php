<?php

/*
* <auto-generated>
*     This code was generated by a tool.     
*
*     Changes to this file may cause incorrect behavior and will be lost if
*     the code is regenerated.
* </auto-generated>
*/


namespace Mozu\Api\Contracts\ProductAdmin;



class DiscountCondition
{
		public $couponCode;
	public function getCouponCode() {
		return $this->couponCode;
	}
	
	public function setCouponCode($couponCode) {
		$this->couponCode = $couponCode;
		return $this;
	}

		public $expirationDate;
	public function getExpirationDate() {
		return $this->expirationDate;
	}
	
	public function setExpirationDate($expirationDate) {
		$this->expirationDate = $expirationDate;
		return $this;
	}

		public $maxRedemptionCount;
	public function getMaxRedemptionCount() {
		return $this->maxRedemptionCount;
	}
	
	public function setMaxRedemptionCount($maxRedemptionCount) {
		$this->maxRedemptionCount = $maxRedemptionCount;
		return $this;
	}

		public $minimumLifetimeValueAmount;
	public function getMinimumLifetimeValueAmount() {
		return $this->minimumLifetimeValueAmount;
	}
	
	public function setMinimumLifetimeValueAmount($minimumLifetimeValueAmount) {
		$this->minimumLifetimeValueAmount = $minimumLifetimeValueAmount;
		return $this;
	}

		public $minimumOrderAmount;
	public function getMinimumOrderAmount() {
		return $this->minimumOrderAmount;
	}
	
	public function setMinimumOrderAmount($minimumOrderAmount) {
		$this->minimumOrderAmount = $minimumOrderAmount;
		return $this;
	}

		public $requiresCoupon;
	public function getRequiresCoupon() {
		return $this->requiresCoupon;
	}
	
	public function setRequiresCoupon($requiresCoupon) {
		$this->requiresCoupon = $requiresCoupon;
		return $this;
	}

		public $startDate;
	public function getStartDate() {
		return $this->startDate;
	}
	
	public function setStartDate($startDate) {
		$this->startDate = $startDate;
		return $this;
	}

		public $customerGroups;
	public function getCustomerGroups() {
		return $this->customerGroups;
	}
	
	public function setCustomerGroups($customerGroups) {
		$this->customerGroups = $customerGroups;
		return $this;
	}

		public $excludedCategories;
	public function getExcludedCategories() {
		return $this->excludedCategories;
	}
	
	public function setExcludedCategories($excludedCategories) {
		$this->excludedCategories = $excludedCategories;
		return $this;
	}

		public $excludedProducts;
	public function getExcludedProducts() {
		return $this->excludedProducts;
	}
	
	public function setExcludedProducts($excludedProducts) {
		$this->excludedProducts = $excludedProducts;
		return $this;
	}

		public $includedCategories;
	public function getIncludedCategories() {
		return $this->includedCategories;
	}
	
	public function setIncludedCategories($includedCategories) {
		$this->includedCategories = $includedCategories;
		return $this;
	}

		public $includedProducts;
	public function getIncludedProducts() {
		return $this->includedProducts;
	}
	
	public function setIncludedProducts($includedProducts) {
		$this->includedProducts = $includedProducts;
		return $this;
	}

}

?>
