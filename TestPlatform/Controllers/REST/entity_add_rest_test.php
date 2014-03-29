<?php
require $_SERVER['DOCUMENT_ROOT'] . ('/P2P/Models/Dao/entityDao.php');
$entityDao = new cp_entity_dao();

$entityFormalName = "Fong Shi Wei";
$entityNickName = "Eamon Fong";
$entitySlug = "fong-shi-wei";
$entityEstablishDate = NULL;
$entityDescription = "This is a test entity";
$entityType = "1";
$entityStatus = 1;
$enterpriseId = NULL;

$retData = $entityController->addEntity(
        $entityFormalName
        , $entityNickName
        , $entitySlug
        , $entityEstablishDate
        , $entityDescription
        , $entityType
        , $entityStatus
        , $enterpriseId
        );

var_dump($retData);
?>
