<?
ob_start();
session_start();
require('include/functions.inc.php');
$db = dbConnect();

  if(isset($_SESSION['nazwa_uzytkownika']) && $db->numRows("SELECT * FROM uzytkownik WHERE nazwa = '".$_SESSION['nazwa_uzytkownika']."'") > 0) {
    header('Location: home.php');
  } else {
?>

<!-- KOD LOGOWANIA -->

<? 
  function form($error)
  { if($error){ 	echo '<section class="login"> <center>'.$error.'</center></section>'; } else { echo ''; }
?> 

<form id="login-form" accept-charset="utf-8" action="" method='POST'>
<h1>Logowanie do systemu</h1>
<input type="text" value="" placeholder="nazwa_uzytkownika" tabindex="20" name="nazwa_uzytkownika">
  <div class="haslo-container">
<input type="haslo" placeholder="haslo" tabindex="21" name="haslo">

</div>
<button class="button submit" data-analytics="sign-in" type="submit" id="Submit" name="Submit">Zaloguj</button>
  </section>
  <br><br>
 <section class="login">
<center><small>Stopka</small></center>
</section>

<?
  }
  if(isset($_REQUEST['Submit'])) {
    if(!$_POST['nazwa_uzytkownika'] || !$_POST['haslo']) {
      $error = 'Blad: Wszystkie pola sa wymagane';
      echo form($error);
    } else {
      if (login_check($_POST['nazwa_uzytkownika'],$_POST['haslo'])) {
        header('Location: home.php');
        $_SESSION["ip"] = getenv('REMOTE_ADDR');
        $_SESSION["nazwa_uzytkownika"] = $_POST['nazwa_uzytkownika'];
        $_SESSION["haslo"] = $_POST['haslo'];
            } else {
        $error = "Bledna nazwa uzytkownika, lub haslo";
        echo form($error);
      }
    }
  } else {
    if(isset($_GET['logout'])) {
      session_destroy();
          } else { 
      if (isset($_SESSION['nazwa_uzytkownika'])) { 
        if (login_check($_SESSION['nazwa_uzytkownika'],$_SESSION['haslo'])) { 
        } else { 
          
        } 
      } else { 
        
      } 
    } 
  } 
?>
</body>
</html>
<?
}
?>




