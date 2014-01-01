<?php 
class Jordanshopper_Seller_Block_Seller_Dashboard extends Mage_Core_Block_Template
{
	protected function _getSession()
	{
		$session = Mage::getSingleton('customer/session');
		return $session;
	}

	public function getItems()
	{
		$customer = $this->_getSession();
		$collection = Mage::getModel('seller/seller')->getCollection()
						->addFieldToFilter('seller_id',array('eq'=>$customer->getId()));
		return $collection->getItems();
	}
}
?>