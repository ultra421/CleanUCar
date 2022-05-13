<?php 

// Estabelcer $log = 1 si se ha logeado

session_start();

$nombre;
$pass;
$log;

if (isset($_SESSION["userInfoClean"]["nombre"]) && isset($_SESSION["userInfoClean"]["pass"])) {

    $_SESSION["userInfoClean"]["nombre"];
    $_SESSION["userInfoClean"]["pass"];
    include "verifyLogFunction.php";
    //Comprovar que session este log establecida sino devolver
    if (verifyInfo($_SESSION["userInfoClean"]["nombre"],$_SESSION["userInfoClean"]["pass"])) {
        $log = 1;

    } else {
        $log = 0;
        $_SESSION["userInfoClean"]["nombre"] = null;
        $_SESSION["userInfoClean"]["pass"] = null;
    }

} else {

    $log = 0;
    

}
?>