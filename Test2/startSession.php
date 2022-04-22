<?php 

session_start();

if (isset($_SESSION["userInfoClean"]["nombre"]) && isset($_SESSION["userInfoClean"]["pass"])) {
    //Comprovar que session este log establecida sino devolver
    $nombre = $_SESSION["userInfoClean"]["nombre"];
    $pass = $_SESSION["userInfoClean"]["pass"];
} else {
    $nombre = "null";
    $pass = "null";
}

if (isset($_SESSION["userInfoClean"]["log"])) {
    $log = $_SESSION["userInfoClean"]["log"];
} else {
    $log = 0;

}

?>