<?php

class Eliz_Customconfig_IndexController extends Mage_Core_Controller_Front_Action
{

    public function indexAction()
    {
        echo 'Hello Elizes Mum...';
        $this->loadLayout();
        $this->renderLayout();
    }

    public function myproductAction()
    {
        echo 'Hello one more time...';


        $this->loadLayout();
        $this->renderLayout();
    }

}
