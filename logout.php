<?php
require_once("database/config.php");
session_destroy();
header('Location: '.$_SERVER['HTTP_REFERER']);
?>
