<!DOCTYPE html>
<html>
<head>
    <title>Chilli Panda | Home</title>
    <?php include $_SERVER['DOCUMENT_ROOT'] . '/Layout/master.php';?>
</head>
<body class="home fluid">
<div id="root">
    <?php include $_SERVER['DOCUMENT_ROOT'] . '/Layout/header.php';?>
    <div class="section-wrapper">
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
                        <a href="/configuration"><span class="component-icon"><i class="fa fa-key"></i></span><span>Configuration</span></a>
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
                        <a href="/address"><span class="component-icon"><i class="fa fa-location-arrow"></i></span><span>Address</span></a>
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
if ($production == true){
    ?>
    <script data-main="/js/home/home.js" src="/cp-front/js/requireJs/require-jquery.js"></script>
<?php
}else{
?>
    <script data-main="/js/home/home.js" src="/cp-front/js/requireJs/require-jquery.js"></script>
<?php
}
?>
</html>
