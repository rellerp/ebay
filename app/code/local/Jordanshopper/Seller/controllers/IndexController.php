<?php
class Jordanshopper_Seller_IndexController extends Mage_Core_Controller_Front_Action
{
	public function indexAction()
	{
		$this->loadLayout();
		$this->renderLayout();
	}
	
	public function addAction(){
		$this->loadLayout();
		$this->renderLayout();
	}
	
	public function sellerPostAction(){
		echo 'Done';
		die();
	}
}
?>