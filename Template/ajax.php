<?php
require('../database/DBcontroller.php');

require('../database/Product.php');


$db=new DBcontroller();

$product = new Product($db);


if (isset($_POST['item_id'])) {
    $result = $product->getProduct($_POST['item_id']);
    echo json_encode($result);
}
