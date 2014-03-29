<?php
header('Access-Control-Allow-Origin: *');
include_once $_SERVER['DOCUMENT_ROOT'] . '/Helpers/router_helper.php';
include_once $_SERVER['DOCUMENT_ROOT'] . '/Controllers/UtilitiesController.php';
include_once $_SERVER['DOCUMENT_ROOT'] . '/Controllers/ErrorController.php';
include_once $_SERVER['DOCUMENT_ROOT'] . '/Controllers/HomeController.php';
include_once $_SERVER['DOCUMENT_ROOT'] . '/Controllers/AccountController.php';
include_once $_SERVER['DOCUMENT_ROOT'] . '/Controllers/ProductController.php';
include_once $_SERVER['DOCUMENT_ROOT'] . '/Controllers/EntityController.php';
include_once $_SERVER['DOCUMENT_ROOT'] . '/Controllers/DeviceController.php';
include_once $_SERVER['DOCUMENT_ROOT'] . '/Controllers/MediaController.php';
include_once $_SERVER['DOCUMENT_ROOT'] . '/Controllers/LogController.php';
include_once $_SERVER['DOCUMENT_ROOT'] . '/Controllers/EmailController.php';
include_once $_SERVER['DOCUMENT_ROOT'] . '/Controllers/PhoneController.php';
include_once $_SERVER['DOCUMENT_ROOT'] . '/Controllers/MessageController.php';
include_once $_SERVER['DOCUMENT_ROOT'] . '/Controllers/EnterpriseController.php';
include_once $_SERVER['DOCUMENT_ROOT'] . '/Controllers/ImageController.php';
include_once $_SERVER['DOCUMENT_ROOT'] . '/Controllers/ConfigurationController.php';
include_once $_SERVER['DOCUMENT_ROOT'] . '/Controllers/AddressController.php';
include_once $_SERVER['DOCUMENT_ROOT'] . '/Controllers/DocumentationController.php';

include_once $_SERVER['DOCUMENT_ROOT'] . '/Model/ResControllers/EntityResController.php';
include_once $_SERVER['DOCUMENT_ROOT'] . '/Model/ResControllers/EnterpriseResController.php';
include_once $_SERVER['DOCUMENT_ROOT'] . '/Model/ResControllers/DeviceResController.php';
include_once $_SERVER['DOCUMENT_ROOT'] . '/Model/ResControllers/DeviceValueResController.php';
include_once $_SERVER['DOCUMENT_ROOT'] . '/Model/ResControllers/DeviceSessionResController.php';
include_once $_SERVER['DOCUMENT_ROOT'] . '/Model/ResControllers/DeviceRelationshipResController.php';
include_once $_SERVER['DOCUMENT_ROOT'] . '/Model/ResControllers/DeviceRelationshipValueResController.php';
include_once $_SERVER['DOCUMENT_ROOT'] . '/Model/ResControllers/MediaResController.php';
include_once $_SERVER['DOCUMENT_ROOT'] . '/Model/ResControllers/LogResController.php';
include_once $_SERVER['DOCUMENT_ROOT'] . '/Model/ResControllers/ProductResController.php';
include_once $_SERVER['DOCUMENT_ROOT'] . '/Model/ResControllers/ProductValueResController.php';
include_once $_SERVER['DOCUMENT_ROOT'] . '/Model/ResControllers/ProductRegistrationResController.php';
include_once $_SERVER['DOCUMENT_ROOT'] . '/Model/ResControllers/EmailResController.php';
include_once $_SERVER['DOCUMENT_ROOT'] . '/Model/ResControllers/PhoneResController.php';
include_once $_SERVER['DOCUMENT_ROOT'] . '/Model/ResControllers/MessageResController.php';
include_once $_SERVER['DOCUMENT_ROOT'] . '/Model/ResControllers/ImageResController.php';
include_once $_SERVER['DOCUMENT_ROOT'] . '/Model/ResControllers/ActivityResController.php';


$utilitiesController = new UtilitiesController();
$errorController = new ErrorController();
$homeController = new HomeController();
$accountController = new AccountController();
$productController = new ProductController();
$entityController = new EntityController();
$deviceController = new DeviceController();
$mediaController = new MediaController();
$logController = new LogController();
$phoneController = new PhoneController();
$emailController = new EmailController();
$messageController = new MessageController();
$enterpriseController = new EnterpriseController();
$imageController = new ImageController();
$configurationController = new ConfigurationController();
$addressController = new AddressController();
$documentationController = new DocumentationController();


$entityResController = new cp_EntityResController();
$enterpriseResController = new cp_EnterpriseResController();
$emailResController = new cp_EmailResController();
$phoneResController = new cp_PhoneResController();
$deviceResController = new cp_DeviceResController();
$deviceValueResController = new cp_DeviceValueResController();
$deviceSessionResController = new cp_DeviceSessionResController();
$deviceRelationshipResController = new cp_DeviceRelationshipResController();
$deviceRelationshipValueResController = new cp_DeviceRelationshipValueResController();
$mediaResController = new cp_MediaResController();
$logResController = new cp_LogResController();
$productResController = new cp_ProductResController();
$productRegistrationResController = new cp_ProductRegistrationResController();
$productValueResController = new cp_ProductValueResController();
$messageResController = new cp_MessageResController();
$imageResController = new cp_ImageResController();
$activityResController = new cp_ActivityResController();


$router = new cp_router_helper();

//Utilities Controls
$router->add("utilities", $utilitiesController, "scriptGenerator");
$router->add("utilities", $utilitiesController, "siteScraper");
$router->add("utilities", $utilitiesController, "scrapeSite");
$router->add("utilities", $utilitiesController, "getScriptTypeValues");
$router->add("utilities", $utilitiesController, "generateScaffoldSP");
$router->add("utilities", $utilitiesController, "generateClass");
$router->add("utilities", $utilitiesController, "generateDal");
$router->add("utilities", $utilitiesController, "generateResController");
//Account Controls
$router->add("account", $accountController, "loggedin");
$router->add("account", $accountController, "login");
$router->add("account", $accountController, "logout");
$router->add("account", $accountController, "changeTargetEnterprise");
//Documentation Controls
$router->add("documentation", $documentationController, "astralink");
$router->add("documentation", $documentationController, "eyeorcas");
$router->add("documentation", $documentationController, "chillipanda");
//Error Controls
$router->add("error", $errorController, "missing");
$router->add("error", $errorController, "illegal");
$router->add("error", $errorController, "invalid");
//HomeControls
$router->add("home", $homeController, "landing");
$router->add("home", $homeController, "index");
$router->add("home", $homeController, "dashboard");
//EnterpriseControls
$router->add("enterprise", $enterpriseController, "index");
//ConfigurationControls
$router->add("configuration", $configurationController, "index");
//MessageControls
$router->add("message", $messageController, "index");
//AddressControls
$router->add("address", $addressController, "index");
//ImageControls
$router->add("image", $imageController, "index");
//EntityControls
$router->add("entity", $entityController, "index");
//DeviceControls
$router->add("device", $deviceController, "index");
//MediaControls
$router->add("media", $mediaController, "index");
//LogControls
$router->add("log", $logController, "index");
//PhoneControls
$router->add("phone", $phoneController, "index");
//EmailControls
$router->add("email", $emailController, "index");
//ProductControls
$router->add("product", $productController, "index");
$router->add("product", $productController, "productRegistration");

//EntityRes Controller
$router->add("EntityResController", $entityResController, "getEntity");
$router->add("EntityResController", $entityResController, "getAdminEntityDetails");

//EnterpriseRes Controller
$router->add("EnterpriseResController", $enterpriseResController, "getEnterprises");
$router->add("EnterpriseResController", $enterpriseResController, "addEnterprise");
$router->add("EnterpriseResController", $enterpriseResController, "updateEnterprise");
$router->add("EnterpriseResController", $enterpriseResController , "removeEnterprise");

//EmailRes Controller
$router->add("EmailResController", $emailResController, "getEmails");
$router->add("EmailResController", $emailResController, "addEmail");
$router->add("EmailResController", $emailResController, "updateEmail");
$router->add("EmailResController", $emailResController, "removeEmail");

//MessageRes Controller
$router->add("MessageResController", $messageResController, "getMessages");
$router->add("MessageResController", $messageResController, "addMessage");
$router->add("MessageResController", $messageResController, "updateMessage");
$router->add("MessageResController", $messageResController, "removeMessage");
$router->add("MessageResController", $messageResController, "removeMessageByDeviceId");
$router->add("MessageResController", $messageResController, "removeMessageByOwnerId");
$router->add("MessageResController", $messageResController, "getMessagesByEntity");


//PhoneRes Controller
$router->add("PhoneResController", $phoneResController, "getPhones");
$router->add("PhoneResController", $phoneResController, "addPhone");
$router->add("PhoneResController", $phoneResController, "updatePhone");
$router->add("PhoneResController", $phoneResController, "removePhone");

//DeviceRes Controller
$router->add("DeviceResController", $deviceResController, "getDevices");
$router->add("DeviceResController", $deviceResController, "getDeviceDetails");
$router->add("DeviceResController", $deviceResController, "addDeviceWithValues");
$router->add("DeviceResController", $deviceResController, "addDevice");
$router->add("DeviceResController", $deviceResController, "updateDevice");
$router->add("DeviceResController", $deviceResController, "removeDevice");
$router->add("DeviceResController", $deviceResController, "addDeviceFromApp");
$router->add("DeviceResController", $deviceResController, "removeDeviceFromApp");
$router->add("DeviceResController", $deviceResController, "getDevicesFromApp");
$router->add("DeviceResController", $deviceResController, "updateDeviceFromApp");

//Device Session Res Controller
$router->add("DeviceSessionResController", $deviceSessionResController, "getDeviceSession");
$router->add("DeviceSessionResController", $deviceSessionResController, "addDeviceSession");
$router->add("DeviceSessionResController", $deviceSessionResController, "updateDeviceSession");
$router->add("DeviceSessionResController", $deviceSessionResController, "removeDeviceSession");

//Device Relationship Res Controller
$router->add("DeviceRelationshipResController", $deviceRelationshipResController, "getDeviceRelationships");
$router->add("DeviceRelationshipResController", $deviceRelationshipResController, "addDeviceRelationship");
$router->add("DeviceRelationshipResController", $deviceRelationshipResController, "updateDeviceRelationship");
$router->add("DeviceRelationshipResController", $deviceRelationshipResController, "removeDeviceRelationship");
$router->add("DeviceRelationshipResController", $deviceRelationshipResController, "getEntityDeviceRelationship");
$router->add("DeviceRelationshipResController", $deviceRelationshipResController, "getEntityDeviceRelationshipDetails");
$router->add("DeviceRelationshipResController", $deviceRelationshipResController, "getDeviceRelationshipMedia");
$router->add("DeviceRelationshipResController", $deviceRelationshipResController, "addEntityDeviceRelationshipWithValues");
$router->add("DeviceRelationshipResController", $deviceRelationshipResController, "removeEntityDeviceRelationshipWithValues");
$router->add("DeviceRelationshipResController", $deviceRelationshipResController, "updateDeviceAndDeviceRelationshipWithValues");

//Device Relationship Value Res Controller
$router->add("DeviceRelationshipValueResController", $deviceRelationshipValueResController, "getDeviceRelationshipValue");
$router->add("DeviceRelationshipValueResController", $deviceRelationshipValueResController, "addDeviceRelationshipValue");
$router->add("DeviceRelationshipValueResController", $deviceRelationshipValueResController, "updateDeviceRelationshipValue");
$router->add("DeviceRelationshipValueResController", $deviceRelationshipValueResController, "removeDeviceRelationshipValue");

//Device Value Res Controller
$router->add("DeviceValueResController", $deviceValueResController, "getDeviceValue");
$router->add("DeviceValueResController", $deviceValueResController, "addDeviceValue");
$router->add("DeviceValueResController", $deviceValueResController, "updateDeviceValue");
$router->add("DeviceValueResController", $deviceValueResController, "removeDeviceValue");

//MediaRes Controller
$router->add("MediaResController", $mediaResController, "getMedia");
$router->add("MediaResController", $mediaResController, "getMediaByEntity");
$router->add("MediaResController", $mediaResController, "addMedia");
$router->add("MediaResController", $mediaResController, "addMediaFromHXS");
$router->add("MediaResController", $mediaResController, "updateMedia");
$router->add("MediaResController", $mediaResController, "removeMedia");

//LogRes Controller
$router->add("LogResController", $logResController, "getLogs");
$router->add("LogResController", $logResController, "addLog");
$router->add("LogResController", $logResController, "updateLog");
$router->add("LogResController", $logResController, "removeLog");
$router->add("LogResController", $logResController, "addLogFromServer");

//ProductController
$router->add("ProductResController", $productResController, "getProducts");
$router->add("ProductResController", $productResController, "addProduct");
$router->add("ProductResController", $productResController, "updateProduct");
$router->add("ProductResController", $productResController, "removeProduct");

//ProductRegistration controller
$router->add("ProductRegistrationResController", $productRegistrationResController, "getProductRegistrations");
$router->add("ProductRegistrationResController", $productRegistrationResController, "getProductEntityRegistrationDetails");
$router->add("ProductRegistrationResController", $productRegistrationResController, "addProductRegistration");
$router->add("ProductRegistrationResController", $productRegistrationResController, "updateProductRegistration");
$router->add("ProductRegistrationResController", $productRegistrationResController, "removeProductRegistration");

//ProductValue Controller
$router->add("ProductValueResController", $productValueResController, "getProductValues");
$router->add("ProductValueResController", $productValueResController, "addProductValue");
$router->add("ProductValueResController", $productValueResController, "addProductValue");
$router->add("ProductValueResController", $productValueResController, "updateProductValue");
$router->add("ProductValueResController", $productValueResController, "removeProductValue");

//Image Controller
$router->add("ImageResController", $imageResController, "getImages");
$router->add("ImageResController", $imageResController, "addImage");
$router->add("ImageResController", $imageResController, "updateImage");
$router->add("ImageResController", $imageResController, "removeImage");

//Image Controller
$router->add("ActivityResController", $activityResController, "getActivities");

//Enter and handles not found
$router->submit('/home', '/error/missing');
?>
