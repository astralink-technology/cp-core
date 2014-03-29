<?php
require ($_SERVER['DOCUMENT_ROOT'] . '/Helpers/sqlconnection_helper.php');

$sqlConnectionHelper = new cp_sqlConnection_helper();

$sqlConnectionHelper->dbConnect(true, true); //open connection
$sqlConnectionHelper->dbDisconnect(); //close connection

?>