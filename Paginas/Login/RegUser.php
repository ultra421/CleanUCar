<?php 
include "../../Plantillas/DBConnect.php";

session_start();

$nombre = $_POST["nombre"];
$pass = $_POST["pass"];
$email = $_POST["email"];
$telefono = $_POST["telefono"];
$genero = $_POST["genero"];

$query = $dbcon -> prepare(
    "SELECT count(email) FROM usuario WHERE email = '$email'"
);
if ($query -> execute()) {

    $result = $query -> fetch();
    var_dump($result);

    if (intval($result[0]) == 0) { // Count sera 0 si no hay ninguna cuenta registrada

        $query = $dbcon -> prepare(
            //Si auto increment es = NULL entonces se autoincrementa solo?
            "INSERT INTO usuario values (NULL,'$nombre','$pass','$email',CURDATE(),'$telefono','$genero',0,0,0)"
        );

        if ($query -> execute()) {

            header("LOCATION: LogPage.php");
        
        }

    } else {

        header("LOCATION: LogPage.php");

    }
}

?>