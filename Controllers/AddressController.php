<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/Helpers/view_helper.php';

class AddressController
{
    public function index(){
        //only users are allowed;
        $authorizationHelper = new cp_authorization_helper();
        $authorizationHelper->setAdminAuthorization("/error/illegal");

        //default action here
        $view = new cp_view_helper();
        echo $view->render($_SERVER['DOCUMENT_ROOT'] . '/Views/Address/address.php', array());
    }
}
?>
