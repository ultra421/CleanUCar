<?php 
session_start();
include "../../Plantillas/DBConnect.php";

$nombre = $_POST["nombre"];
$pass = $_POST["pass"];
//Encyrptar pass
$passEncrypt = password_hash($pass, PASSWORD_DEFAULT);
$email = $_POST["email"];
$telefono = $_POST["telefono"];
$genero = $_POST["genero"];
$oldEmail = $_SESSION["email"];

if (isset($pass)) {
    $query = $dbcon -> prepare("UPDATE usuario 
                            set nombre = '$nombre',pass = '$passEncrypt', email = '$email', telefono = '$telefono', genero = '$genero'
                            where email = '$oldEmail';");
} else {
    $query = $dbcon -> prepare("UPDATE usuario 
                            set nombre = '$nombre', email = '$email', telefono = '$telefono', genero = '$genero'
                            where email = '$oldEmail';");
}



if ($query -> execute()) {
    $_SESSION["email"] = $email;
    $_SESSION["pass"] = $pass;
    header("LOCATION: ../Login/LogUser.php"); // enviar info a logUser 
} else {
    header("LOCATION: ../Login/LogPage.php");
}

?>