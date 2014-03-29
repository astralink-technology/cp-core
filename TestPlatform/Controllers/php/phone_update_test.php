<?php
require $_SERVER['DOCUMENT_ROOT'] . ('/cp-core/Model/Dao/phoneDao.php');
$phoneDao = new cp_phone_dao();

$id = "G67OLSDJ-BQAS449B-6FFOU8E2";

$retData = $phoneDao->updatePhone(
        $id
        , null
        , null
        , null
        , null
        , null
        , null
        , null
        );

var_dump($retData);

?>
