<?
$db = dbConnect();

$konfiguracja = mysql_query("SELECT * FROM `ustawienia` WHERE `id` = '1'");
$konfiguracjaA = mysql_fetch_row($konfiguracja);
$konfiguracja = $konfiguracjaA[1];

if ($konfiguracja == NULL) {
header('Location: konfiguracja-poczatkowa.php');
}
else {}






?>
