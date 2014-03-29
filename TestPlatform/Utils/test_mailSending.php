<?php
require_once ($_SERVER['DOCUMENT_ROOT'] . '/Helpers/mailSender_helper.php');

$mailSenderHelper = new cp_mailSender_helper();

$receiverName = "Fong Shi Wei";
$receiverEmail = "shiweifong@gmail.com";
$isHtml = FALSE;
$subject = "Test";
$htmlBody = NULL;
$plainTextBody = "This is a test message";

$response = $mailSenderHelper->sendMail(
            $receiverName
            , $receiverEmail
            , $isHtml
            , $subject
            , $htmlBody
            , $plainTextBody
        );
echo $response;

?>