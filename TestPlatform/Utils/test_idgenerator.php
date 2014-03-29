<?php
require ($_SERVER['DOCUMENT_ROOT'] . '/Helpers/idgenerator_helper.php');

$idGeneratorHelper = new cp_idGenerator_helper();
$idGeneratorHelper->generateId(true);

?>