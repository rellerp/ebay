<?php

class Jordanshopper_Seller_Block_Adminhtml_Customer_Edit_Tabs 
      extends Mage_Adminhtml_Block_Customer_Edit_Tabs
{
 
    protected function _beforeToHtml()
    {
        $this->addTabAfter('product', array(
                'label'     => Mage::helper('customer')->__('Product List'),
				'class'     => 'ajax',
        		'url'       => $this->getUrl('*/*/carts', array('_current' => true)),
            ),'tags');
        parent::_beforeToHtml();
    }
}
