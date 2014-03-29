<?php
require $_SERVER['DOCUMENT_ROOT'] . ('/cp-core/Model/Dao/deviceDao.php');
$deviceDao = new cp_device_dao();


$pDeviceId = "12345678";
$pName = "test";
$pCode = 'A';
$pStatus = 'V';
$pType = "S";
$pType2 = "I";
$pEntityId = "87654321";


$retData = $deviceDao->createDevice(
	        $pDeviceId
            , $pName
            , $pCode
            , $pStatus
            , $pType
            , $pType2
            , $pEntityId
        );


echo $retData;
var_dump($retData);
echo $retData['Id'];
?>
