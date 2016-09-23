<?php

class Eliz_Customconfig_Block_Products extends Mage_Core_Block_Template
{
    public function getProducts()
    {
        $products = Mage::getModel('customconfig/products')->getCollection()->getData();

        if (!$products) {
            throw new UnexpectedValueException('Expected Model not available.');
        } else {

            return $products;
        }
    }

    public function getConfigTime()
    {
        $dateFromHelper =  Mage::helper('customconfig/data')->myFunction();
        return $dateFromHelper;

    }

}