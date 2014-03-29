<?php
require $_SERVER['DOCUMENT_ROOT'] . ('/cp-core/Model/Dao/productRegistrationDao.php');
$productDao = new cp_product_registration_dao();


$status = 'V';
$productId = '1234';
$entityId = '4321';

$retData = $productDao->createProductRegistration(
            $status
            , $productId
            , $entityId
        );


echo $retData;
var_dump($retData);
echo $retData['Id'];
?>
