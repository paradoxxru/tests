<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
require_once "../app/config/config.php";
?>

<?php

$controller = CRouter::getController();
$controller->render();
?>
