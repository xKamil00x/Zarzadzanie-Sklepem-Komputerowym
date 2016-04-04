<?php
require("./header.php");
?>


<b> Zalogowano poprawnie!<br><b>
Nazwa uzytkownika: <b><?php echo $_SESSION['username'];?></b><br>
Kod uprawnien: <b><?php echo useraccess($_SESSION['username']); ?></b>

<br><br><a href="./logout.php">WYLOGUJ</a>
<?
require("./footer.php");
?>
