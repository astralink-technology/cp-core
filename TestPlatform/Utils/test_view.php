<?php
require ($_SERVER['DOCUMENT_ROOT'] . '/Helpers/view_helper.php');

$view = new cp_view_helper();
echo $view->render($_SERVER['DOCUMENT_ROOT'] . '/P2P/gallery.php', array());
?>