<?php
require $_SERVER['DOCUMENT_ROOT'] . ('/cp-core/Model/Dao/authenticationDao.php');

$authenticationDao = new cp_authentication_dao();
$authenticationId = "FPG27R2H-XTWA1Y68-IPLPU8FK";

$retData = $authenticationDao->updateAuthentication(
        $authenticationId
        , null
        , null
        , null
        , null
        , null
        , null
        , null
        , null
        );

var_dump($retData);
?>
