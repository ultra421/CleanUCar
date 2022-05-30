<?php 
include "../Plantillas/DBConnect.php";
//Añadir where
$query = $dbcon -> prepare(
    "SELECT nombre,precio,lavado_id FROM lavado"
);

if ($query -> execute()) {
    $result = $query -> fetch();
    $resultJSON = json_encode($result);
    echo $resultJSON;
}
?>