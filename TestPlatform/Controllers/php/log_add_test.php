<?php
require $_SERVER['DOCUMENT_ROOT'] . ('/cp-core/Model/Dao/logDao.php');
$logDao = new cp_log_dao();

$pMessage = "testing";
$pTitle = "test add";
$pType = "V";
$pLogUrl = "abc/def";
$pStatus = "T";
$pEntityId = "1234";
$pDeviceId = "4321";


$retData = $logDao->createLog(
	    $pMessage
	    , $pTitle
            , $pType
            , $pLogUrl
            , $pStatus
            , $pEntityId
	    , $pDeviceId
        );


echo $retData;
var_dump($retData);
echo $retData['Id'];
?>
