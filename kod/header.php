<?
error_reporting(0);
ob_start();
require('include/functions.inc.php');
?>
<!DOCTYPE html>
<!-- pliki HTML --!>
<?session_start();
if(!$_SESSION['username']){
require("./login.php");
die('');
} ?>

  
<!-- PLIKI NAGLOWKOWE SRONY --!>

