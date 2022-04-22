<?php


$contador = 2;
$return = 0;
function incrementar_contador($incrementa = 1){
    
    global $contador;
    $contador += $incrementa;
    echo " " . $contador;
    return 1;

}

for ($i = 0; $i < 30; $i++) {

    $return += incrementar_contador($contador);
    
}

echo "</br></br> Cuantos returns? = " . $return . "</br>";

$contador = 2;
echo "</br></br>";

    for ($i = 0; $i < 30; $i++) {

        incrementar_contador($contador);
        incrementar_contador();

    }


