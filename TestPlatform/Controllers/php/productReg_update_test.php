<?php
require $_SERVER['DOCUMENT_ROOT'] . ('/cp-core/Model/Dao/productRegistrationDao.php');
$productDao = new cp_product_registration_dao();

$id = "O1768H9U-D6SIBOJ9-PBE1PBBW";

$retData = $productDao->updateProductRegistration(
        $id
        , null
        , null
        , null
        , null
        , null
        );

var_dump($retData);

?>
