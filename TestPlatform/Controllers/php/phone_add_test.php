<?php
require $_SERVER['DOCUMENT_ROOT'] . ('/cp-core/Model/Dao/phoneDao.php');
$phoneDao = new cp_phone_dao();

$pPhoneDigits = "87654321";
$pCountryCode = "+65";
$pCode = "019";
$pEntityId = "1111";


$retData = $phoneDao->createPhone(
	    $pPhoneDigits
            , $pCountryCode
            , $pCode
	    , $pEntityId
        );


echo $retData;
var_dump($retData);
echo $retData['Id'];
?>
