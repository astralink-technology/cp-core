<?php
require $_SERVER['DOCUMENT_ROOT'] . ('/cp-core/Model/Dao/entityDao.php');

$entityDao = new cp_entity_dao();
$entityId = "3MI1XSNH-TBTS379Q-6CQ7RNN0";

$retData = $entityDao->getEntity(
        $entityId
       	);

var_dump($retData);
?>
