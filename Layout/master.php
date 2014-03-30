<?php
    include_once $_SERVER['DOCUMENT_ROOT'] . '/Config/webConfig.php';
    include_once $_SERVER['DOCUMENT_ROOT'] . '/Helpers/user_helper.php';

    $userHelper = new cp_user_helper();

    $webConfig = new webConfig();
    $webConfig->dbConfig();
    $webConfig->cpApiConfig();
    $webConfig->mailConfig();
    $webConfig->productionConfig();
?>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<link rel="icon" href="/img/cpico.ico" type="image/x-icon" />

<script type="text/javascript" src="/cp-front/js/jquery-1.9.1/jquery.min.js"></script>
<link rel="stylesheet" href="/cp-front/css/font-awesome-4.0.3/css/font-awesome.min.css">
<link rel="stylesheet" href="/cp-front/js/bootstrap-3.0.2/css/bootstrap.min.css">
<script src="//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>

<?php if ($webConfig->production == false){ ?>
    <link href="/css/compiled/site-cp-core.css" rel="stylesheet" />
<?php }else{ ?>
    <link href="/css/compiled/site-cp-core.min.css" rel="stylesheet" />
<?php } ?>

<!-- bootstrap -->
<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.0.2/css/bootstrap.min.css">
<link href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet">
<link href="/cp-front/js/google-code-prettify/desert.css" rel="stylesheet">

<link href="/cp-front/js/kendo/styles/kendo.common.min.css" rel="stylesheet" />
<link href="/cp-front/js/kendo/styles/kendo.default.min.css" rel="stylesheet" />

<script src="//netdna.bootstrapcdn.com/bootstrap/3.0.2/js/bootstrap.min.js"></script>
<script type="text/javascript" src="/cp-front/js/kendo/js/kendo.web.min.js"></script>
<script src="/cp-front/js/google-code-prettify/prettify.js"></script>
<script src="/cp-front/js/google-code-prettify/lang-sql.js"></script>

<script type="text/javascript" src="/js/main.js"></script>

<link href='http://fonts.googleapis.com/css?family=Roboto:400,400italic,500,500italic,700,700italic,900,900italic,100,100italic,300,300italic' rel='stylesheet' type='text/css'>

<!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
<!--[if lt IE 9]></script>
    <script type="text/javascript" src="/cp-front/js/html5shiv.js"></script>
    <style>
    /*html5*/

figure {
display: block;
margin:  1em 40px;
}
    </style>
<![endif]-->
