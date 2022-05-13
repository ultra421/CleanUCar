<?php 
include "../../Plantillas/DBConnect.php";

session_start();

$nombre = $_POST["nombre"];
$pass = $_POST["pass"];
$email = $_POST["email"];
$telefono = $_POST["telefono"];
$genero = $_POST["genero"];

$query = $dbcon -> prepare(
    //Si auto increment es = NULL entonces se autoincrementa solo?
    "INSERT INTO usuario values (NULL,'$nombre','$pass','$email',CURDATE(),'$telefono','$genero',0,0,0)"
);

if ($query -> execute()) {

    header("LOCATION: LogPage.php");

}
?>