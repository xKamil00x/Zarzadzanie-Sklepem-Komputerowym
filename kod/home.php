<?php
require("./header.php");
?>


<b> Zalogowano poprawnie!<br><b>
Nazwa uzytkownika: <b><?php echo $_SESSION['nazwa_uzytkownika'];?></b><br>
Kod uprawnien: <b><?php echo useraccess($_SESSION['nazwa_uzytkownika']); ?></b>


<?
require("./footer.php");
?>
