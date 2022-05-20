<?php 

session_start();
include "../../Plantillas/DBConnect.php";
$email = $_SESSION["email"];

$query = $dbcon -> prepare("DELETE FROM usuario WHERE email = '$email'");

if ($query -> execute()) {
    header("LOCATION: ../Login/LogPage.php");
    session_unset();
} else {
    echo "error al eliminar";
}

?>