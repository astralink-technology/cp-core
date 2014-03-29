<?php
require $_SERVER['DOCUMENT_ROOT'] . ('/cp-core/Model/Dao/entityDao.php');
$entityDao = new cp_entity_dao();

$first_name = "Shi Wei";
$last_name = "Fong";
$status = 'V';
$approved = true;
$type = '1';
$authentication_id = null;
$primary_email_id = null;
$primary_phone_id = null;

$retData = $entityDao->createEntity(
            $first_name
            , $last_name
            , null
            , $status
            , $approved
            , $type
            , $authentication_id
            , $primary_email_id
            , $primary_phone_id
        );

echo $retData;
var_dump($retData);
echo $retData['Id'];
?>
