<?php 
session_start();
$_SESSION["nombre"] = null;
$_SESSION["pass"] = null;
$_SESSION["email"] = null;
$_SESSION["log"] = null;
header("LOCATION: ../Login/LogPage.php");
?>