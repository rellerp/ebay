<?php
/**
 * Seller Model
 * 
 * @package Jordanshopper_Seller
 * @author Salameh Yasin <salameh.yaseen@gmail.com> 
 */
class Jordanshopper_Seller_Model_Mysql4_Seller extends Mage_Core_Model_Mysql4_Abstract
{
    public function _construct()
    {
        $this->_init('seller/seller', 'id');
    }

}