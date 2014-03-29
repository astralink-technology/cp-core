<?php
require ($_SERVER['DOCUMENT_ROOT'] . '/Helpers/session_helper.php');

$session = new cp_session_helper();
$session->checkAllSessionValues();

echo "<br>";
echo "Authentication Id";
echo "<br>";
echo $session->getSessionValue('AuthenticationId');
echo "<br>";
echo "Target Enterprise Id";
echo "<br>";
echo $session->getSessionValue('TargetEnterpriseId');
echo "Target Enterprise Name";
echo "<br>";
echo $session->getSessionValue('TargetEnterpriseName');
echo "<br>";

//$session->addSessionValue('TargetEnterpriseId', 'JG2BM0D3-B70KE0JH-AX30RW8X');
?>