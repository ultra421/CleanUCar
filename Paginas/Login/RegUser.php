<?php 
include "../../Plantillas/DBConnect.php";

session_start();

$nombre = $_POST["nombre"];
$pass = $_POST["pass"];
$pass2 = $_POST["pass2"];
var_dump($_POST);

//Encryptar contraseña
$passEncrypt = password_hash($pass , PASSWORD_DEFAULT);
$email = $_POST["email"];
$telefono = $_POST["telefono"];
$genero = $_POST["genero"];

$query = $dbcon -> prepare(
    "SELECT count(email) FROM usuario WHERE email = '$email'"
);
if ($query -> execute() && ($pass == $pass2) && strlen($telefono) > 8 && filter_Var($email, FILTER_VALIDATE_EMAIL)) {

    $result = $query -> fetch();
    var_dump($result);

    if (intval($result[0]) == 0) { // Count sera 0 si no hay ninguna cuenta registrada

        $query = $dbcon -> prepare(
            //Si auto increment es = NULL entonces se autoincrementa solo?
            "INSERT INTO usuario values (NULL,'$nombre','$passEncrypt','$email',CURDATE(),'$telefono','$genero',0,0,0)"
        );

        if ($query -> execute()) {

            header("LOCATION: LogPage.php");
        
        }

    } else {

        header("LOCATION: LogPage.php");

    }
} else {
    header("LOCATION: RegPage.php");
}

?>