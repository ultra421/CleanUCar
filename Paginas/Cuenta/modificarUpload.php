<?php 
session_start();
include "../../Plantillas/DBConnect.php";

$nombre = $_POST["nombre"];
$pass = $_POST["pass"];
$email = $_POST["email"];
$telefono = $_POST["telefono"];
$genero = $_POST["genero"];
$oldEmail = $_SESSION["email"];

$query = $dbcon -> prepare("UPDATE usuario 
                            set nombre = '$nombre',pass = '$pass', email = '$email', telefono = '$telefono', genero = '$genero'
                            where email = '$oldEmail';");

if ($query -> execute()) {
    $_SESSION["email"] = $email;
    $_SESSION["pass"] = $pass;
    header("LOCATION: ../Login/LogUser.php"); // enviar info a logUser 
} else {
    header("LOCATION: ../Login/LogPage.php");
}

?>