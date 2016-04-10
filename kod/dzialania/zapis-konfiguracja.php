<?
require('../include/functions.inc.php');
$db = dbConnect();

$nazwa = $_POST['nazwa'];
$punkty = $_POST['punkty'];
mysql_query("UPDATE `ustawienia` SET `nazwa` = '$nazwa', `punkty` = '$punkty' WHERE `ustawienia`.`id` =1;");
?>


<META HTTP-EQUIV="REFRESH" CONTENT="0; URL='../home.php?kg=001'"> 

