<?php 
session_start();
unset($_SESSION["userInfoClean"]);
header ("Location: LogPage.php")
?>