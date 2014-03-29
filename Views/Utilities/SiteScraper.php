<!DOCTYPE html>
<html>
<head>
    <title>Chilli Panda | Site Scraper</title>
    <?php include ($_SERVER['DOCUMENT_ROOT'] . '/Layout/master.php');?>
</head>
<body class="dashboard fluid">
<div id="root">
    <?php include ($_SERVER['DOCUMENT_ROOT'] . '/Layout/header.php');?>
    <div class="section-wrapper">
        <div class="breadcrumbs-wrapper">
            <ol class="breadcrumb">
                <li><a href="/home">Home</a></li>
                <li class="active">Site Scraper</li>
            </ol>
        </div>
        <div class="main-section">
            <h1>Site Scraper</h1>
            <div id="site-scraper"></div>
        </div>
    </div>
</div>
<?php include ($_SERVER['DOCUMENT_ROOT'] . '/Layout/footer.php');?>
</body>
<?php
if ($webConfig->production == true){
    ?>
    <script data-main="/js/utilities/site-scraper.js" src="/cp-front/js/requireJs/require-jquery.js"></script>
<?php
}else{
?>
    <script data-main="/js/utilities/site-scraper.js" src="/cp-front/js/requireJs/require-jquery.js"></script>
<?php
}
?>
</html>