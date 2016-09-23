<?php
 
$products = array(
    array(
        'title' => 'Broken cart',
        'description' => 'Unable to add items to cart.',
        'date' => '2016-09-17',
    ),
    array(
        'title' => 'Login issues',
        'description' => 'Cannot login when using IE.',
        'date' => '2016-09-20',
    ),
);
 
foreach ($products as $product) {
    Mage::getModel('customconfig/products')
        ->setData($product)
        ->save();
}
