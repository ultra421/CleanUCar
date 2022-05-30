<?php 
session_start();
include "../Plantillas/DBConnect.php";

if (!isset($_POST["lastPagoID"])) {
    $error = array("error" => true);
    echo (json_encode($error));
    return false;
}

$userID = $_SESSION["userID"];
$lastPagoID = $_POST["lastPagoID"];

$query = $dbcon -> prepare(
    "SELECT * FROM pagos_lavado WHERE 
    (usuario_id = '$userID' AND
    pago_id > '$lastPagoID')"
);

if ($query -> execute()) {

    $resultFinal = $query -> fetch(PDO::FETCH_ASSOC);
    if (is_bool($resultFinal)){
        $error = array("error" => true);
        echo (json_encode($error));
        return false;
    }

    $lavadoID = $resultFinal["lavado_id"];

    $query = $dbcon -> prepare(
        "SELECT nombre FROM lavado
        WHERE lavado_id = '$lavadoID'"
    );

    if ($query -> execute()) { // final correct
        $result = $query -> fetch(PDO::FETCH_ASSOC);
        $resultFinal["nombre"] = $result["nombre"];
        $resultFinal["error"] = false;
    } else {
        $error = array("error" => true);
        echo (json_encode($error));
        return false;
    }

    $resultJSON = json_encode($resultFinal);
    echo $resultJSON;

} else {
    $error = array("error" => true);
    echo (json_encode($error));
    return false;
}

?>