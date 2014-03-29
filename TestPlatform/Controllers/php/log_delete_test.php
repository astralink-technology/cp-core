<?php
require $_SERVER['DOCUMENT_ROOT'] . ('/cp-core/Model/Dao/logDao.php');
$logDao = new cp_log_dao();

$id = "D4D8I871-4E58ZSIN-MHLTUTJO";

$retData = $logDao->deleteLog(
        $id
        );

var_dump($retData);

?>
