<?php
/*
 * Copyright Chilli Panda
 * Created on 03-22-2013
 * Created by Shi Wei Eamon
 */
?>

<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Chilli Panda Admin</title>
        <?php include $_SERVER['DOCUMENT_ROOT'] . '/ChilliPanda/Admin/master/adminMaster.php' ?>
    </head>
    <body>
        <?php include $_SERVER['DOCUMENT_ROOT'] . '/ChilliPanda/Admin/widgets/headerWidget.php' ?>
        <div class="cpa-main-content-wrapper">
            <div class="cpa-main-content">
                <div class="cpa-main-content-container">
                    <h1 class="cpa-page-title cpa-index-list-title">Select Module To Begin</h1>
                    <div class="cpa-index-menu">
                        <ul>
                            <li><a href="/ChilliPanda/Admin/content/Authentication/Users.php">Users</a></li>
                            <li><a href="/ChilliPanda/Admin/content/Enterprise/Enterprise.php">Enterprises</a></li>
                            <li><a href="/ChilliPanda/Admin/content/Entity/Entity.php">Entities</a></li>
                            <li><a href="/ChilliPanda/Admin/content/Products/Product.php">Products</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <?php include $_SERVER['DOCUMENT_ROOT'] . '/ChilliPanda/Admin/widgets/footerWidget.php' ?>
    </body>
</html>
