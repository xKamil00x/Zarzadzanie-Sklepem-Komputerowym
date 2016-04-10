<?
ob_start();
session_start();
error_reporting(0);
require('include/functions.inc.php');
$db = dbConnect();

$konfiguracja = mysql_query("SELECT * FROM `ustawienia` WHERE `id` = '1'");
$konfiguracjaA = mysql_fetch_row($konfiguracja);
$konfiguracja = $konfiguracjaA[1];

if ($konfiguracja != NULL) {
header('Location: home.php');
}
else {
?>


<!DOCTYPE html>
<html >
  <head>
    <meta charset="UTF-8">
    <title>Konfiguracja :: Komputerex</title>
    
    
    <link rel="stylesheet" href="login/css/reset.css">

    <link rel='stylesheet prefetch' href='http://fonts.googleapis.com/css?family=Roboto:400,100,300,500,700,900'>
<link rel='stylesheet prefetch' href='http://fonts.googleapis.com/css?family=Montserrat:400,700'>
<link rel='stylesheet prefetch' href='https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css'>

        <link rel="stylesheet" href="login/css/style.css">

    
    
    
  </head>

  <body>

    
<div class="container">
  <div class="info">
    <h1>Komputerex</h1>
  </div>
</div>
<div class="form">

 

<?
if(useraccess($_SESSION['username'])=='1'){
?>

  <form class="login-form" action="./zapis-konfiguracja.php" method='POST'>
    <input type="text" placeholder="Nazwa Sklepu" name="nazwa"/><br>
    <input type="text" placeholder="Punkty do rabatu" name="punkty"/><br>Wprowadź ilość punktów, dzięki którym klient otrzyma zniżkę 10%. Punkty sumują się i naliczają większą obniżkę. Za każdą wydaną złotówkę, system dodaje 1 punkt do konta danego klienta (tylko w przypadku zamówień rejestrowanych). Jeśli nie chcesz wprowadzić systemu punktowego, wprowadź wartość 0<br><br>
    <button class="button submit" data-analytics="sign-in" type="submit" id="Submit" name="Submit">Zapisz dane i rozpocznij</button>
    
  </form>
  <br><br><hr><br><br>
  <form class="login-form" action="./logout.php" method='POST'>
  
  Jeśli nie chcesz teraz wprowadzać danych, wyloguj się. Bez podania powyższych informacji, nie możesz przejść do widoku panelu sprzedażowego. Jako administrator, masz możliwość późniejszej zmiany wyżej podanych danych. <br><br>
  
  <button class="button submit" data-analytics="sign-in" type="submit" id="Submit" name="Submit">Wyloguj się</button>
  
  </form>
  
  <?
  }
  else {?>

  <form class="login-form" action="./logout.php" method='POST'>
  
  Przepraszamy, twoje uprawnienia nie są wystarczające, by zarządzać ustawieniami sklepu. <br><br>
  
  <button class="button submit" data-analytics="sign-in" type="submit" id="Submit" name="Submit">Wyloguj się</button>
  
  </form>
  <?}
  ?>
  
  
</div>

    <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>

        <script src="login/js/index.js"></script>

    <p><center><h1>Flat Login Form</h1><span>Made with <i class="fa fa-heart"></i> by <a href="http://andytran.me">Andy Tran</a></span></center></p>
    
 
</body>
</html>
<? }?>
