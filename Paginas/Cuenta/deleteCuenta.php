<?php 

session_start();
include "../../Plantillas/DBConnect.php";
$email = $_SESSION["email"];

$query = $dbcon -> prepare("DELETE FROM usuario WHERE email = '$email'");

if ($query -> execute()) {
    header("LOCATION: LogPage.php");
} else {
    echo "error al eliminar";
}

?>