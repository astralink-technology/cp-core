<?php
/*
 * Copyright Chilli Panda
 * Created on 03-03-2013
 * Created by Shi Wei Eamon
 */

require $_SERVER['DOCUMENT_ROOT'] . ('/ChilliPanda/Models/Controllers/EntityController.php');

$entityController = new cp_Entity_Controller();

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
