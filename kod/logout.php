<?
session_start();
session_destroy();
header('Location: login.php');
require('include/functions.inc.php');
?>
