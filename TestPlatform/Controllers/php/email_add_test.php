<?php
require $_SERVER['DOCUMENT_ROOT'] . ('/cp-core/Model/Dao/emailDao.php');
$emailDao = new cp_email_dao();

$pEmailAddress = "test";
$pEntityId = "12345678";



$retData = $emailDao->createEmail(
	     $pEmailAddress
            , $pEntityId
        );


echo $retData;
var_dump($retData);
echo $retData['Id'];
?>
