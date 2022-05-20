<?php 
include "../../Plantillas/DBConnect.php";

//codigo para añadir todas las posibles opciones de lavados

$tunel = array(0,1);
$presion = array(0,1);
$mano = array(0,1);
$ecologico = array(0,1);
$aspirado = array(0,1);
$cera = array(0,1);
$pulido = array(0,1);

foreach ($tunel as $a) {
    foreach ($presion as $b) {
        foreach ($mano as $c) {
            foreach($ecologico as $d) {
                foreach($aspirado as $e) {
                    foreach ($cera as $f) {
                        foreach ($pulido as $g) {

                            echo $a.$b.$c.$d.$e.$f.$g."</br>";
                            $query = $dbcon -> prepare("INSERT INTO tipo VALUES (null,$a,$b,$c,$d,$e,$f,$g)");
                            $query -> execute();

                        }
                    }
                }

            }
        }
    }

}

?>