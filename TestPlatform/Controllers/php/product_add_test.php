<?php
require $_SERVER['DOCUMENT_ROOT'] . ('/cp-core/Model/Dao/productDao.php');
$productDao = new cp_product_dao();

$name = "test";
$description = "product";
$status = 'V';
$type = 'S';


$retData = $productDao->createProduct(
            $name
            , $description
            , $status
            , $type
        );


echo $retData;
var_dump($retData);
echo $retData['Id'];
?>
