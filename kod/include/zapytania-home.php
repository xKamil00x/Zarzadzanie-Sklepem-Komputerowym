<?
$db = dbConnect();

$ilosc_zamowien = mysql_query("SELECT count(*) FROM `zamowienia` WHERE `status` = '1'");
$ilosc_zamowiena = mysql_fetch_row($ilosc_zamowien);
$ilosc_zamowien = $ilosc_zamowiena[0];

$ilosc_calkowita = mysql_query("SELECT sum(ilosc) FROM `baza`");
$ilosc_calkowitaA = mysql_fetch_row($ilosc_calkowita);
$ilosc_calkowita = $ilosc_calkowitaA[0];

$ilosc_aktualna = mysql_query("SELECT sum(ilosc_akt) FROM `baza`");
$ilosc_aktualnaA = mysql_fetch_row($ilosc_aktualna);
$ilosc_aktualna = $ilosc_aktualnaA[0];




$ilosc_kategorie = mysql_query("SELECT count(*) FROM `kategorie`");
$ilosc_kategorieA = mysql_fetch_row($ilosc_kategorie);
$ilosc_kategorie = $ilosc_kategorieA[0];

$ilosc_klient = mysql_query("SELECT count(*) FROM `klienci`");
$ilosc_klientA = mysql_fetch_row($ilosc_klient);
$ilosc_klient = $ilosc_klientA[0];




?>
