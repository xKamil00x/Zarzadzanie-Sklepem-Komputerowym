<?
ob_start();
session_start();
require('include/functions.inc.php');
$db = dbConnect();

  if(isset($_SESSION['username']) && $db->numRows("SELECT * FROM uzytkownik WHERE nazwa = '".$_SESSION['username']."'") > 0) {
    header('Location: home.php');
  } else {
?>


<!DOCTYPE html>
<html >
  <head>
    <meta charset="UTF-8">
    <title>Logowanie :: Komputerex</title>
    
    
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
  <div class="thumbnail"><img src="login/images/k.png"/></div>
 



  <form class="login-form" action="" method='POST'>
    <input type="text" placeholder="username" name="username"/>
    <input type="password" placeholder="password" name="password"/>
    <button class="button submit" data-analytics="sign-in" type="submit" id="Submit" name="Submit">login</button>
    
  </form>
</div>

    <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>

        <script src="login/js/index.js"></script>

    <p><center><h1>Flat Login Form</h1><span>Made with <i class="fa fa-heart"></i> by <a href="http://andytran.me">Andy Tran</a></span></center></p>
    
  <?
  
  if(isset($_REQUEST['Submit'])) {
    if(!$_POST['username'] || !$_POST['password']) {
      ?>
      <script type="text/javascript">alert("Wszystkie pola są wymagane");</script>
      <?
    } else {
      if (login_check($_POST['username'],$_POST['password'])) {
        header('Location: home.php');
        $_SESSION["ip"] = getenv('REMOTE_ADDR');
        $_SESSION["username"] = $_POST['username'];
        $_SESSION["password"] = $_POST['password'];
            } else {
       
        ?>
        <script type="text/javascript">alert("Błedna nazwa użytkownika, lub hasło");</script>
        <?
       
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
