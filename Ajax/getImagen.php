<?php 
include "../Plantillas/DBConnect.php";
//Añadir where
$query = $dbcon -> prepare(
    "SELECT direccion FROM imagenes_lavado"
);

if ($query -> execute()) {
    $result = $query -> fetch();
    $result["error"] = false;
    $resultJSON = json_encode($result);
    echo $resultJSON;
} else {
    $result = array($error = true);
    $resultJSON = json_encode($result);
    echo $resultJSON;
}
?>