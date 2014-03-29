<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/Helpers/encryption_helper.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/Helpers/authentication_helper.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/Helpers/authorization_helper.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/Helpers/sqlconnection_helper.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/Helpers/view_helper.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/Helpers/UTCconvertor_helper.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/Helpers/user_helper.php';

class UtilitiesController
{
    public function index(){
        //default action here
        //only users are allowed;
        $authorizationHelper = new cp_authorization_helper();
        $authorizationHelper->setAdminAuthorization("/error/illegal");

    }

    public function siteScraper(){
        $view = new cp_view_helper();
        echo $view->render($_SERVER['DOCUMENT_ROOT'] . '/Views/Utilities/SiteScraper.php', array());
    }

    public function scrapeSite(){
        $html = file_get_contents('https://www.charities.gov.sg/_layouts/MCYSCPSearch/MCYSCPSearchOrgProfile.aspx?AccountId=NTQ3ZWJjMzMtNzk2NS1lMzExLTgyZGItMDA1MDU2YjMwNDg0');
        echo $html;
    }

    //Script Generator
    public function scriptGenerator(){
        $view = new cp_view_helper();
        $code = file_get_contents("/Temp/add_authentication.sql");
        echo $view->render($_SERVER['DOCUMENT_ROOT'] . '/Views/Utilities/ScriptGenerator.php', array(
                "code" => $code,
                "filename" => "add_authentication.sql"
            ));
    }

    public function getScriptTypeValues(){
        $code = file_get_contents("/Temp/add_authentication.sql");
        $scriptType = "";
        $spQuery = "CREATE FUNCTION";
        $createTableQuery = "CREATE TABLE";

        $spQuerylower = strtolower($spQuery);
        $createTableQuerylower = strtolower($createTableQuery);

        $stripIndex = null;
        $scriptStart = null;
        $scriptStringArray = null;

        if(strpos($code, $spQuery) !== false) {
            $scriptType = "function";
            $stripIndex = $spQuery;
        } else if(strpos($code, $spQuerylower) !== false) {
            $scriptType = "function";
            $stripIndex = $spQuerylower;
        } else if(strpos($code, $createTableQuery) !== false) {
            $scriptType = "creation";
            $stripIndex = $createTableQuery;
        } else if (strpos($code, $createTableQuerylower) !== false) {
            $scriptType = "creation";
            $stripIndex = $createTableQuerylower;
        }

        //get the start of the script
        if ($stripIndex != null){
            $scriptStart = strstr($code, $stripIndex);
        }else {
            //return error
        }

        if ($scriptStart != null){
            $scriptStringArray = explode(" " , $scriptStart);
            for ($i = count($scriptStringArray) - 1; $i > 0; $i--){
                if ($scriptStringArray[$i] == ""){
                    unset($scriptStringArray[$i]);
                }
            }
            var_dump($scriptStringArray);
        }else{
            //return error
        }

        if ($scriptStringArray != null){
            if ($scriptType == "function"){

                echo preg_grep("RETURNS",  $scriptStringArray);
            }
        }else{

        }
    }

    public function generateScaffoldSP(){
        $scriptType = $this->getScriptTypeValues();
        echo $scriptType;
    }

    public function generateClass(){
        $scriptType = $this->getScriptTypeValues();
        echo $scriptType;
    }

    public function generateDal(){
        $scriptType = $this->getScriptTypeValues();
        echo $scriptType;
    }

    public function generateResController(){
        $scriptType = $this->getScriptTypeValues();
        echo $scriptType;
    }

    //Script Generator
    
}
?>
