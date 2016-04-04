<?
ob_start();
session_start();
require('include/functions.inc.php');
$db = dbConnect();

  if(isset($_SESSION['username']) && $db->numRows("SELECT * FROM uzytkownik WHERE nazwa = '".$_SESSION['username']."'") > 0) {
    header('Location: home.php');
  } else {
?>

<!-- KOD LOGOWANIA -->

<? 
  function form($error)
  { if($error){ 	echo '<section class="login"> <center>'.$error.'</center></section>'; } else { echo ''; }}
?> 

<form id="login-form" accept-charset="utf-8" action="" method='POST'>
<h1>Logowanie do systemu</h1>
<input type="text" value="" placeholder="username" tabindex="20" name="username">
  <div class="password-container">
<input type="password" placeholder="password" tabindex="21" name="password">

</div>
<button class="button submit" data-analytics="sign-in" type="submit" id="Submit" name="Submit">Zaloguj</button>
  </section>
  <br><br>
 <section class="login">
<center><small>Stopka</small></center>
</section>

<?
  
  if(isset($_REQUEST['Submit'])) {
    if(!$_POST['username'] || !$_POST['password']) {
      $error = 'Blad: Wszystkie pola sa wymagane';
      echo form($error);
    } else {
      if (login_check($_POST['username'],$_POST['password'])) {
        header('Location: home.php');
        $_SESSION["ip"] = getenv('REMOTE_ADDR');
        $_SESSION["username"] = $_POST['username'];
        $_SESSION["password"] = $_POST['password'];
            } else {
        $error = "Bledna nazwa uzytkownika, lub password";
        echo form($error);
      }
    }
  } else {
    if(isset($_GET['logout'])) {
      session_destroy();
          } else { 
      if (isset($_SESSION['username'])) { 
        if (login_check($_SESSION['username'],$_SESSION['password'])) { 
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




