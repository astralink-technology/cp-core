<?php
require $_SERVER['DOCUMENT_ROOT'] . ('/cp-core/Model/Dao/mediaDao.php');
$mediaDao = new cp_media_dao();

$pTitle = "test";
$pFilename = "abc.mp4";
$pType = "S";
$pMediaUrl = "/abc/def/";
$pStatus = "V";
$pDeviceId = "1234";


$retData = $mediaDao->createMedia(
	    $pTitle
            , $pFilename
            , $pType
            , $pMediaUrl
            , $pStatus
            , $pDeviceId
        );


echo $retData;
var_dump($retData);
echo $retData['Id'];
?>
