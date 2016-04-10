<div class="box">
                <div class="box-header">
                  <h3 class="box-title">Spis produktów</h3>
                </div><!-- /.box-header -->
                <div class="box-body">
                  <table id="example1" class="table table-bordered table-striped">
                                    <thead>
                                        <tr>
                                            <th>Nazwa produktu</th>
                                            <th>Koszt</th>
                                            <th class="hidden-phone">Kategoria</th>
                                            <th class="hidden-phone">Ilość dostępna</th>
                                            <th class="hidden-phone">EAN</th>
                                            <th class="hidden-phone"></th>
                                          
                                            
                                        </tr>
                                        </thead>   <tbody>
  <?
$zapytanie2 = "SELECT * FROM `baza`";
$wynik2 = mysql_query($zapytanie2);
while ( $rowaa = mysql_fetch_row($wynik2) ) {
$id= $rowaa[0];
$nazwa= $rowaa[1];
$cena= $rowaa[2];
$kat= $rowaa[3];
$ilosc_akt= $rowaa[4];
$ilosc_cal= $rowaa[5];
$ean= $rowaa[6];

$nazwa_kat = mysql_query("SELECT * FROM `kategorie` WHERE `id` = '$kat'");
$nazwa_katA = mysql_fetch_row($nazwa_kat);
$nazwa_kat = $nazwa_katA[1];

echo ("<tr class='odd gradeX'><td>$nazwa</td><td>$cena</td><td>$nazwa_kat</td>");

if ($ilosc_akt =='0') {echo("<td><button class='btn btn-bg btn-danger btn-xs'>Brak na stanie</button></td>");}
else{ echo("<td>$ilosc_akt/$ilosc_cal</td>"); }
echo("<td>$ean</td>");
                                      
if ($ilosc_akt =='0'){echo("<td><a class='btn btn-block btn-default btn-sm'>Sprzedaj</a></td>");}else{                                       
echo("<td><a class='btn btn-block btn-info btn-sm'>Sprzedaj</a></td>");}

echo ("</tr>");

}

?>
                                        
                                    
                                      
                                      
                                      
                                    
                                    </tbody>
                                    </table>
                              </div></div>
                
