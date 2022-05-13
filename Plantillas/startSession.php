<?php 

// Estabelcer $log = 1 si se ha logeado

session_start();

$nombre = null; // Nombre a mostrar la web
$email = null; // Email para log en cada pagina
$pass = null; //
$log = null;

if (isset($_SESSION["nombre"]) && isset($_SESSION["pass"]) && $_SESSION["email"] && $_SESSION["log"]) { // Si ya existe session
    $nombre = $_SESSION["nombre"];
    $pass = $_SESSION["pass"];
    $email = $_SESSION["email"];
    $log = $_SESSION["log"];
} else {

    $log = 0;
}
?>