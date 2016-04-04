<?php
require("./header.php");
?>


<b> Zalogowano poprawnie!<br><b>
Nazwa uzytkownika: <b><?php echo $_SESSION['username'];?></b><br>
Kod uprawnien: <b><?php echo useraccess($_SESSION['username']); ?></b><br>

Uprawnienia: <b><?php if(useraccess($_SESSION['username'])=='1'){ echo "Administrator"; } if(useraccess($_SESSION['username'])=='2'){ echo "Magazynier"; } ?></b><br>

<br><br><a href="./logout.php">WYLOGUJ</a>
<?
require("./footer.php");
?>
