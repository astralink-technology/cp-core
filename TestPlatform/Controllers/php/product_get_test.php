<?php
require $_SERVER['DOCUMENT_ROOT'] . ('/cp-core/Model/Dao/productDao.php');
$productDao = new cp_product_dao();

$id = "SQXEA2Y8-9MI7KTU4-FZ39LIW4";

$retData = $productDao->getProduct($id);


var_dump($retData);

?>
