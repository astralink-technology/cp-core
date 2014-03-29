<!DOCTYPE html>
<html>
    <head>
        <title>Chilli Panda | Already Logged In</title>
        <?php include $_SERVER['DOCUMENT_ROOT'] . '/Layout/master.php';?>
    </head>
    <body class="landing fluid">
        <div id="root">
            <?php include $_SERVER['DOCUMENT_ROOT'] . '/Layout/header.php';?>
            <section>
                <h1><i class="fa fa-smile-o"></i> <br>Hello!</h1>
                <p>You are already logged in. Return to <a href="<?php echo '/home/dashboard' ?>">dashboard</a></p>
            </section>
        </div>
    </body>
</html>
