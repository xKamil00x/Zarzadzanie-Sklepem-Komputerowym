<?php
$komunikat0 = $_GET['kg']; //pobieranie informacji, ktory z komunikatow zielonych wyswietlic
$komunikat1 = $_GET['kn']; //pobieranie informacji, ktory z komunikatow niebieskich wyswietlic
$komunikat2 = $_GET['kc']; //pobieranie informacji, ktory z komunikatow czerwonych wyswietlic
if ($komunikat0=='001')
{
echo ('<div class="alert alert-success alert-dismissable">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                    <h4>	<i class="icon fa fa-check"></i> Gratulacje!</h4>
                    Sklep został poprawnie skonfigurowany i jest gotowy do działania.
                  </div>');
}





?>
