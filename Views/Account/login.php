<!DOCTYPE html>
<html>
    <head>
        <title>Chilli Panda | Log In</title>
        <?php include $_SERVER['DOCUMENT_ROOT'] . '/Layout/master.php';?>
    </head>
    <body class="login fluid">
        <div id="root">
            <section>
                <div class="login-form-wrapper">
                    <div class="logo"><a href="/"><img src="/img/cp.png" /></a></div>
                    <div class="introduction">
                        <h2>Code, Manage, Automate. Develop faster.</h2>
                        <p>Spice it up with your administrator account</p>
                    </div>
                    <div class="login-form">
                        <div class="alert alert-main" id="login-error" style="display:none;"></div>
                        <div class="full-block">
                            <label>Email</label>
                            <input id="tb-username" type="email" tabindex="1" />
                            <div class="alert alert-danger alert-sm" id="val-loginUsername" style="display:none"></div>
                        </div>
                        <div class="full-block">
                            <div class="label-group">
                                <label class="password-label">Password</label>
                            </div>
                            <input id="tb-password" type="password"  tabindex="2"/>
                            <div class="alert alert-danger alert-sm" id="val-loginPassword" style="display:none"></div>
                        </div>
                        <div class="full-block">
                            <button class="btn btn-primary btn-login" id="btn-login" tabindex="3">Log in</button>
                        </div>
                    </div>
                </div>
                <div id="modalAjaxLoader"></div>
             </section>
        </div>
    </body>
    <?php
        if ($webConfig->production == true){
    ?>
            <script data-main="/js/account/login-built.js" src="/cp-front/js/requireJs/require-jquery.js"></script>
            <script type="text/javascript">
                var _apiHost = "<?php echo $webConfig->cpApiHost; ?>";
            </script>
    <?php
        }else{
    ?>
            <script data-main="/js/account/login.js" src="/cp-front/js/requireJs/require-jquery.js"></script>
            <script type="text/javascript">
                var _apiHost  = "<?php echo $webConfig->cpApiHost; ?>";
            </script>
    <?php
        }
    ?>
</html>
