<?php 

session_start();
include "../Plantillas/DBConnect.php";

$userID = $_SESSION["userID"];
$lavadoID = $_POST["lavadoID"];

$query = $dbcon -> prepare(
    "INSERT INTO pagos_lavado
    VALUES (null,true,CURDATE(),$userID,$lavadoID)");

if (!$query -> execute()) {
    $result = array("error" => true);
    echo json_encode($result);
} else {
    $result = array("error" => false);
    echo json_encode($result);
}

?>