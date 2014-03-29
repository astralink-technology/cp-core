<?php
require $_SERVER['DOCUMENT_ROOT'] . ('/cp-core/Model/Dao/emailDao.php');
$emailDao = new cp_email_dao();

$id = "X6T6710E-BT7370YH-BKG5O4T2";

$retData = $emailDao->updateEmail(
        $id
        , null
        , null
        , null
        );

var_dump($retData);

?>
