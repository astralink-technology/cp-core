<?php
require $_SERVER['DOCUMENT_ROOT'] . ('/cp-core/Model/Dao/productDao.php');
$productDao = new cp_product_dao();

$id = "T3GIS011-6IRPKZJP-PZJPWOS9";

$retData = $productDao->updateProduct(
        $id
        , null
        , null
        , null
        , null
        , null
        );

var_dump($retData);

?>
