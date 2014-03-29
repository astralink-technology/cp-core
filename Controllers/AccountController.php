<?php
require_once  $_SERVER['DOCUMENT_ROOT'] . '/Helpers/view_helper.php';
require_once  $_SERVER['DOCUMENT_ROOT'] . '/Helpers/session_helper.php';

class AccountController
{
    public function index(){
        //default action here
    }

    public function loggedin(){
        //only users are allowed;
        $authorizationHelper = new cp_authorization_helper();
        $authorizationHelper->setUserAuthorization("/home");

        $viewHelper = new cp_view_helper();
        echo $viewHelper->render($_SERVER['DOCUMENT_ROOT'] . '/Views/Account/loggedIn.php', array());
        return;
    }

    public function login(){
        if (isset($_POST['json'])){
            $userHelper = new cp_user_helper();
            $dataResponse = new cp_resData_helper();
            $entityId = $userHelper->getCurrentEntityId();

            $jsonPost = $_POST['json'];
            $newentity = json_decode($jsonPost, true);

            $username = $newentity['Username'];
            $password = $newentity['Password'];
            $authenticationHelper = new cp_authentication_helper();
            $resLogin = $authenticationHelper->authenticateUser($username, $password);
            if ($resLogin != false){
                $dataResponse->dataResponse($resLogin, null, "Authenticated", false);
            }else{
                $dataResponse->dataResponse(null, -1, "Invalid Credentials", true);
            }
            return;
        }else{
            $userHelper = new cp_user_helper();
            $entityId = $userHelper->getCurrentEntityId();
            if ($entityId != null){
                header( 'Location:/account/loggedin');
                return;
            }
            //displays the page
            $viewHelper = new cp_view_helper();
            echo $viewHelper->render($_SERVER['DOCUMENT_ROOT'] . '/Views/Account/login.php', array());
            return;
        }
    }

    public function logout(){
        $authentication = new cp_authentication_helper();
        $logoutRes = $authentication->destroyAuthentication();
        if ($logoutRes == true){
            header( 'Location:/');
        }else{
            header( 'Location:/home/dashboard');
        }
        return;
    }

    public function changeTargetEnterprise(){
        //only users are allowed;
        $authorizationHelper = new cp_authorization_helper();
        $authorizationHelper->setAdminAuthorization("/error/illegal");

        $sessionHelper = new cp_session_helper();

        $enterpriseId = null;
        $enterpriseName = null;

        if (isset($_GET['EnterpriseId'])){ $enterpriseId = $_GET['EnterpriseId']; };
        if (isset($_GET['Name'])){ $enterpriseName = $_GET['Name']; };

        if ($enterpriseId != null){
            $sessionHelper->addSessionValue('TargetEnterpriseId', $enterpriseId);
            $sessionHelper->addSessionValue('TargetEnterpriseName', $enterpriseName);
        }

        header( 'Location:/');
    }
}
?>
