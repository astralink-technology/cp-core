<?php
require $_SERVER['DOCUMENT_ROOT'] . ('/cp-core/Model/Dao/deviceDao.php');
$deviceDao = new cp_device_dao();

$id = "12345678";

$retData = $deviceDao->getDevice($id);


var_dump($retData);

?>
