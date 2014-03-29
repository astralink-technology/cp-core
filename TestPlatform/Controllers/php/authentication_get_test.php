<?php
require $_SERVER['DOCUMENT_ROOT'] . ('/cp-core/Model/Dao/authenticationDao.php');
$authenticationDao = new cp_authentication_dao();

$authenticationString = "shiweifong@gmail.com";

$retData = $authenticationDao->getAuthentication(
        null, 
        $authenticationString
        );

var_dump($retData);
?>
