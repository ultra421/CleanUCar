<?php
include "../../Plantillas/startSession.php";
include "../../Plantillas/userInfoPrint.php";
include "../../Plantillas/logRequired.php";
include "../../Plantillas/DBConnect.php";

$lavado_id = $_POST["lavado_id"];

if (!isset($_POST["submit"])) {
    //header ("LOCATION: ../Login/LogPage.php");
}

$lavado_id = intval($lavado_id);
$query = $dbcon -> prepare(
    "DELETE FROM lavado WHERE lavado_id = $lavado_id"
    //DELETE FROM table_name WHERE condition;
);

if ($query -> execute()) {
    header("LOCATION: ../Cuenta/userProfile.php");
}

?>