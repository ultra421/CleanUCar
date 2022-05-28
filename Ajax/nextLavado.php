<?php 
include "../Plantillas/DBConnect.php";
//Añadir where
$lavadoID = intval($_POST["lavado"]);
$query = $dbcon -> prepare(
    "SELECT nombre,precio,lavado_id FROM lavado 
    WHERE lavado_id = (SELECT min(lavado_id) FROM lavado WHERE lavado_id > $lavadoID)"
);

if ($query -> execute()) {
    $result = $query -> fetch();
    $resultJSON = json_encode($result);
    echo $resultJSON;
}
?>