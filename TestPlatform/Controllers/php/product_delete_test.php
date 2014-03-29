<?php
require $_SERVER['DOCUMENT_ROOT'] . ('/cp-core/Model/Dao/productDao.php');
$productDao = new cp_product_dao();

$id = "T3GIS011-6IRPKZJP-PZJPWOS9";

$retData = $productDao->deleteProduct(
        $id
        );

var_dump($retData);

?>
