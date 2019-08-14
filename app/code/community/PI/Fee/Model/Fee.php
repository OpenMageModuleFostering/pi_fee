<?php
class PI_Fee_Model_Fee extends Varien_Object{

	public static function getFee(){
		$feeAmt = Mage::getStoreConfig('checkout/fee/fee_amt');
		return $feeAmt;
	}
	public static function canApply($address){
		$setFee = Mage::getStoreConfig('checkout/fee/active');
		if($setFee==1)
		{
			return true;
		}
	}
}
