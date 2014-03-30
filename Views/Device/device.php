<!DOCTYPE html>
<html>
    <head>
        <title>Chilli Panda | Device Administration</title>
        <?php include $_SERVER['DOCUMENT_ROOT'] . '/Layout/master.php';?>
    </head>
    <body class="fluid">
        <div id="root">
            <?php include $_SERVER['DOCUMENT_ROOT'] . '/Layout/header.php';?>
            <div class="section-wrapper">
                <div class="breadcrumbs-wrapper">
                    <ol class="breadcrumb">
                        <li><a href="/home">Home</a></li>
                        <li class="active">Device Administration</li>
                    </ol>
                </div>
                <h1 class="administration-title">Device Administration</h1>
                <div class="administration-controls">
                    <ul class="list-inline">
                        <li><button class="btn btn-default" id="btn-documentation" disabled>Documentation</button></li>
                    </ul>
                </div>
                <div id="device-grid-wrapper"></div>
            </div>
        </div>
            <?php include $_SERVER['DOCUMENT_ROOT'] . '/Layout/footer.php';?>
    </body>
    <?php
    if ($webConfig->production == true){
        ?>
        <script data-main="/js/device/index-built.js" src="/cp-front/js/requireJs/require-jquery.js"></script>
        <script type="text/javascript">
            var _apiHost  = "<?php echo $webConfig->cpApiHost; ?>";
            var _enterpriseId = "<?php echo $userHelper->getCurrentEnterpriseId(); ?>";
            var _targetEnterpriseId = "<?php echo $userHelper->getTargetEnterpriseId(); ?>";
        </script>
    <?php
    }else{
    ?>
        <script data-main="/js/device/index.js" src="/cp-front/js/requireJs/require-jquery.js"></script>
        <script type="text/javascript">
            var _apiHost  = "<?php echo $webConfig->cpApiHost; ?>";
            var _enterpriseId = "<?php echo $userHelper->getCurrentEnterpriseId(); ?>";
            var _targetEnterpriseId = "<?php echo $userHelper->getTargetEnterpriseId(); ?>";
        </script>
    <?php
    }
    ?>
</html>
