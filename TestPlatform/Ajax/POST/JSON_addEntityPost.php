<?php
require_once ($_SERVER['DOCUMENT_ROOT'] . '/cp-core/Model/Dao/entityDao.php');
require_once ($_SERVER['DOCUMENT_ROOT'] . '/cp-core/Helpers/idgenerator_helper.php');

$jsonPost = $_POST['json'];
$newentity = json_decode($jsonPost, true);

$first_name = $newentity['GivenName'];
$last_name = $newentity['FamilyName'];
$status = 'V';
$approved = true;
$type = '1';

//insert a new entity
$entityDao = new cp_entity_dao();
$resEntity = $entityDao->createEntity(
        $first_name
        , $last_name
        , NULL
        , $status
        , $approved
        , $type
        , NULL
        , NULL
        , NULL
        );

//Return the Id
echo json_encode($resEntity);
?>