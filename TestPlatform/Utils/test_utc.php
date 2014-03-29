<?php
require ($_SERVER['DOCUMENT_ROOT'] . '/Helpers/UTCconvertor_helper.php');
$utcHelper = new cp_UTCconvertor_helper();
$time = $utcHelper->getCurrentDateTime();

echo $time;
?>