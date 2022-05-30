<?php 
include "../../Plantillas/DBConnect.php";

//codigo para añadir todas las posibles opciones de coches

$coches = array(0,1);
$motos = array(0,1);
$furgonetas = array(0,1);
$camiones = array(0,1);

foreach ($coches as $a) {
    foreach ($motos as $b) {
        foreach ($furgonetas as $c) {
            foreach($camiones as $d) {

                $query = $dbcon -> prepare("INSERT INTO vehiculos VALUES (null,$a,$b,$c,$d)");
                $query -> execute();

            }
        }
    }

}

?>