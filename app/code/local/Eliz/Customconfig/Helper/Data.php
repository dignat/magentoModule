<?php
/**
 * Sample Widget Helper
 */
class Eliz_Customconfig_Helper_Data extends Mage_Core_Helper_Abstract
{
    public function myFunction()
    {
        return Mage::getStoreConfig('customconfig_options/section_one/my_date');
    }

}
