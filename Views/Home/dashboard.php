<?php
    include_once  $_SERVER['DOCUMENT_ROOT'] . '/Helpers/sqlconnection_helper.php';
    include_once  $_SERVER['DOCUMENT_ROOT'] . '/Helpers/user_helper.php';
    include_once  $_SERVER['DOCUMENT_ROOT'] . '/Model/Dao/configurationDao.php';
?>
<!DOCTYPE html>
<html>
<head>
    <title>Chilli Panda | Dashboard</title>
    <?php include $_SERVER['DOCUMENT_ROOT'] . '/Layout/master.php';?>
</head>
<body class="dashboard fluid">
<div id="root">
    <?php include $_SERVER['DOCUMENT_ROOT'] . '/Layout/header.php';?>
    <div class="section-wrapper">
        <section class="web-configuration">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h4 class="panel-title">
                        <a data-toggle="collapse" href="#collapseCpAPI">
                            Chillipanda API Host
                        </a>
                    </h4>
                </div>
                <div id="collapseCpAPI" class="panel-collapse collapse in">
                    <div class="panel-body">
                        <table class="table">
                            <thead>
                            <tr>
                                <td>Host</td>
                                <td>Mode</td>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td><?php echo $webConfig->cpApiHost; ?></td>
                                <td>
                                    <?php
                                        if ($webConfig->production == true){
                                            echo "Production Mode";
                                        }else{
                                            echo "Development Mode";
                                        }
                                    ?>
                                </td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4 class="panel-title">
                            <a data-toggle="collapse" href="#collapseConnectedDb">
                                Connected Database
                            </a>
                        </h4>
                    </div>
                    <div id="collapseConnectedDb" class="panel-collapse collapse in">
                        <div class="panel-body">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <td>Host</td>
                                        <td>Port</td>
                                        <td>Username</td>
                                        <td>Database</td>
                                        <td>Status</td>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <?php
                                            $targetHost = null;
                                            $targetPort = null;
                                            $targetUsername = null;
                                            $targetDatabase = null;
                                            $userHelper = new cp_user_helper();
                                            if ($userHelper->getCurrentEnterpriseId() == $userHelper->getTargetEnterpriseId()){
                                                $targetHost = $webConfig->host;
                                                $targetPort = $webConfig->port;
                                                $targetUsername = $webConfig->username;
                                                $targetDatabase = $webConfig->database;
                                            }else{
                                                $configurationDb = new cp_configuration_dao();
                                                    $configurationRes = $configurationDb->getConfiguration(
                                                    null
                                                    , null
                                                    , "D"
                                                    , $userHelper->getTargetEnterpriseId()
                                                    , null
                                                    , null
                                                );
                                                if ($configurationRes['TotalRowsAvailable'] > 0){
                                                    $configuration = $configurationRes['Data'][0];
                                                    $targetHost = $configuration->value;
                                                    $targetPort = $configuration->value2;
                                                    $targetUsername = $configuration->value3;
                                                    $targetDatabase = $configuration->valueHash;
                                                }
                                            }
                                        ?>
                                        <td><?php echo $targetHost; ?></td>
                                        <td><?php echo $targetPort; ?></td>
                                        <td><?php echo $targetUsername; ?></td>
                                        <td><?php echo $targetDatabase; ?></td>
                                        <td>
                                            <?php
                                                $sqlConnectionHelper = new cp_sqlConnection_helper();
                                                echo $sqlConnectionHelper->dbConnect(false, false, true);
                                            ?>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

            <div class="panel panel-default">
                <div class="panel-heading">
                    <h4 class="panel-title">
                        <a data-toggle="collapse" href="#collapseMailConfig">
                            Mail Configuration
                        </a>
                    </h4>
                </div>
                <div id="collapseMailConfig" class="panel-collapse collapse in">
                    <div class="panel-body">
                        <table class="table">
                            <thead>
                                <tr>
                                    <td>Host</td>
                                    <td>Username</td>
                                    <td>Sender Mail</td>
                                    <td>Sender Name</td>
                                    <td>Reply To Mail</td>
                                    <td>Reply Name</td>
                                    <td>BCC</td>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td><?php echo $webConfig->mailHost; ?></td>
                                    <td><?php echo $webConfig->mailUsername; ?></td>
                                    <td><?php echo $webConfig->from; ?></td>
                                    <td><?php echo $webConfig->fromName; ?></td>
                                    <td><?php echo $webConfig->addReplyTo; ?></td>
                                    <td><?php echo $webConfig->addReplyName; ?></td>
                                    <td><?php echo $webConfig->addBCC; ?></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </section>
        <section>
            <h2>Management</h2>
            <p>Component management tools</p>
            <ul class="list-inline">
                <li>
                    <div class="component">
                        <a href="/enterprise" ><span class="component-icon"><i class="fa fa-building-o"></i></span><span>Enterprises</span></a>
                    </div>
                </li>
                <li>
                    <div class="component">
                        <a href="/configuration" class="disabled"><span class="component-icon"><i class="fa fa-key"></i></span><span>Configuration</span></a>
                    </div>
                </li>
                <li>
                    <div class="component">
                        <a href="/email"><span class="component-icon"><i class="fa fa-envelope"></i></span><span>Email</span></a>
                    </div>
                </li>
                <li>
                    <div class="component">
                        <a href="/phone"><span class="component-icon"><i class="fa fa-phone"></i></span><span>Phone</span></a>
                    </div>
                </li>
                <li>
                    <div class="component">
                        <a href="/image"><span class="component-icon"><i class="fa fa-picture-o"></i></span><span>Image</span></a>
                    </div>
                </li>
                <li>
                    <div class="component">
                        <a href="/address" class="disabled"><span class="component-icon"><i class="fa fa-location-arrow"></i></span><span>Address</span></a>
                    </div>
                </li>
                <li>
                    <div class="component">
                        <a  href="/entity"><span class="component-icon"><i class="fa fa-user"></i></span><span>Entities</span></a>
                    </div>
                </li>
                <li>
                    <div class="component">
                        <a href="/product"><span class="component-icon"><i class="fa fa-gift"></i></span><span>Products</span></a>
                    </div>
                </li>
                <li>
                    <div class="component">
                        <a href="/product/productRegistration"><span class="component-icon"><i class="fa fa-barcode"></i></span><span>Product Reg.</span></a>
                    </div>
                </li>
                <li>
                    <div class="component">
                        <a href="/device"><span class="component-icon"><i class="fa fa-hdd-o"></i></span><span>Devices</span></a>
                    </div>
                </li>
                <li>
                    <div class="component">
                        <a href="/log"><span class="component-icon"><i class="fa fa-rss"></i></span><span>Logs</span></a>
                    </div>
                </li>
                <li>
                    <div class="component">
                        <a href="/media"><span class="component-icon"><i class="fa fa-film"></i></span><span>Media</span></a>
                    </div>
                </li>
                <li>
                    <div class="component">
                        <a href="/message"><span class="component-icon"><i class="fa fa-comments-o"></i></span><span>Message</span></a>
                    </div>
                </li>
            </ul>
        </section>
        <section>
            <h2>Utilities</h2>
            <p>Automated coding tools</p>
            <ul class="list-inline">
                <li>
                    <div class="component">
                        <a href="/utilities/scriptGenerator"><span class="component-icon"><i class="fa fa-laptop"></i></span><span>Script Gen.</span></a>
                    </div>
                </li>
                <li>
                    <div class="component">
                        <a href="/utilities/siteScraper"><span class="component-icon"><i class="fa fa-gavel"></i></span><span>Site Scraper</span></a>
                    </div>
                </li>
            </ul>
        </section>
        <section>
            <h2>Helpers</h2>
            <p>Friendly coding functions</p>
            <ul class="list-inline">
                <li>
                    <div class="component">
                        <a href="/TestPlatform/Utils/test_idgenerator.php"><span class="component-icon"><i class="fa fa-list-alt"></i></span><span>ID Gen.</span></a>
                    </div>
                </li>
                <li>
                    <div class="component">
                        <a href="javascript:void(0)" class="disabled"><span class="component-icon"><i class="fa fa-lock"></i></span><span>Encryption</span></a>
                    </div>
                </li>
                <li>
                    <div class="component">
                        <a href="javascript:void(0)" class="disabled"><span class="component-icon"><i class="fa fa-envelope-o"></i></span><span>E-Mailing</span></a>
                    </div>
                </li>
                <li>
                    <div class="component">
                        <a href="javascript:void(0)" class="disabled"><span class="component-icon"><i class="fa fa-clock-o"></i></span><span>Session</span></a>
                    </div>
                </li>
                <li>
                    <div class="component">
                        <a href="javascript:void(0)" class="disabled"><span class="component-icon"><i class="fa fa-globe"></i></span><span>UTC</span></a>
                    </div>
                </li>
            </ul>
        </section>
        <section>
            <h2>Scripts Management</h2>
            <p>Migration, Business, Logic scripts tools.</p>
            <h3>EyeOrcas</h3>
            <ul class="list-inline">
                <li>
                    <div class="component">
                        <a href="javascript:void(0)" class="disabled"><span class="component-icon"><i class="fa fa-file-text-o"></i></span><span>EyeOrcas Products</span></a>
                    </div>
                </li>
                <li>
                    <div class="component">
                        <a href="javascript:void(0)" class="disabled"><span class="component-icon"><i class="fa fa-file-text-o"></i></span><span>Multiple User to Device Access.</span></a>
                    </div>
                </li>
            </ul>
        </section>
        <section>
            <h2>Documentation</h2>
            <p>Values and notations in database and codes</p>
            <ul class="list-inline">
                <li>
                    <div class="component">
                        <a href="javascript:void(0)" class="disabled"><span class="component-icon"><i class="fa fa-list-ul"></i></span><span>Chillipanda</span></a>
                    </div>
                </li>
                <li>
                    <div class="component">
                        <a href="javascript:void(0)" class="disabled"><span class="component-icon"><i class="fa fa-list-ul"></i></span><span>Astralink</span></a>
                    </div>
                </li>
                <li>
                    <div class="component">
                        <a href="/documentation/eyeorcas"><span class="component-icon"><i class="fa fa-list-ul"></i></span><span>EyeOrcas</span></a>
                    </div>
                </li>
            </ul>
        </section>
    </div>
</div>
<?php include $_SERVER['DOCUMENT_ROOT'] . '/Layout/footer.php';?>
</body>
<?php
if ($webConfig->production == true){
    ?>
    <script type="text/javascript">
        var _apiHost  = "<?php echo $webConfig->cpApiHost; ?>";
        var _enterpriseId = "<?php echo $userHelper->getCurrentEnterpriseId(); ?>";
        var _targetEnterpriseId = "<?php echo $userHelper->getTargetEnterpriseId(); ?>";
    </script>
<?php
}else{
?>
    <script type="text/javascript">
        var _apiHost  = "<?php echo $webConfig->cpApiHost; ?>";
        var _enterpriseId = "<?php echo $userHelper->getCurrentEnterpriseId(); ?>";
        var _targetEnterpriseId = "<?php echo $userHelper->getTargetEnterpriseId(); ?>";
    </script>
<?php
}
?>
</html>
