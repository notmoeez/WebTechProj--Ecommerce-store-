<?php


require('database/DBcontroller.php');
require('database/Product.php');
require('database/Cart.php');

$db=new DBcontroller();

$product= new Product($db);

$product->getData();
$product_shuffle=$product->getData();

$Cart= new Cart($db);   



