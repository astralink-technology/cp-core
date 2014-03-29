<?php
require $_SERVER['DOCUMENT_ROOT'] . ('/cp-core/Model/Dao/mediaDao.php');
$mediaDao = new cp_media_dao();

$id = "6RNNABBY-ESXXQ42U-3C1P6C8D";

$retData = $mediaDao->updateMedia(
        $id
        , null
        , null
        , null
        , null
        , null
        , null
        );

var_dump($retData);

?>
