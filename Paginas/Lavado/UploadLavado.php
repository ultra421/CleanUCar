<?php 

session_start();

include "../../Plantillas/DBConnect.php";

if (!isset($_POST["submit"])) {
    header("Location: ../Cuenta/userProfile.php");
}

var_dump($_POST);

$coche = isset($_POST["coche"]);
$moto = isset($_POST["moto"]);
$furgoneta = isset($_POST["furgoneta"]);
$camion = isset($_POST["camion"]);

$tunel = isset($_POST["tunel"]);
$presion = isset($_POST["presion"]);
$mano = isset($_POST["mano"]);
$ecologico = isset($_POST["ecologico"]);
$aspirado = isset($_POST["aspirado"]);
$cera = isset($_POST["cera"]);
$pulido = isset($_POST["pulido"]);

//Query tipo coche

$query = $dbcon -> prepare(
    "SELECT vehiculos_id FROM vehiculos 
    WHERE (coches = '$coche' and motos = '$moto' 
            and furgonetas = '$furgoneta' and camiones = '$camion')"
);
$result;
if ($query -> execute()) {
    $result = $query -> fetch();
} else {
    echo "no query coches :(";
}

echo "query de tipo coche </br>";
var_dump($result);
$cocheResult = $result["vehiculos_id"];

//QUery tipo lavado

$query = $dbcon -> prepare(
    "SELECT tipo_id FROM tipo
    WHERE (tunel = '$tunel' and presion = '$presion'
        and mano = '$mano' and ecologico = '$ecologico'
        and aspirado = '$aspirado' and cera = '$cera'
        and pulido = '$pulido')"
);

if ($query -> execute()) {
    $result = $query -> fetch();
} else {
    echo "no query tipos ):";
}

echo "query de tipo lavado </br>";
var_dump($result);
$lavadoResult = $result["tipo_id"];

// QUery userID

$email = $_SESSION["email"];
var_dump($email);
$query = $dbcon -> prepare(
    "SELECT usuario_id from usuario where email = '$email'"
);


if ($query -> execute()) {
    $result = $query -> fetch();
} else {
    echo "no query user_id :(";
}

$user_id = $result["usuario_id"];
$nombre = $_POST["nombre"];
$ubicacion = $_POST["ubicacion"];

//Comprovar que usuario no tenga ya un lavado
//Implementar ajax para la modificacion de multiples lavados (aun no)
//Query devuelve false si no hay nada

$query = $dbcon -> prepare(
    "SELECT usuario_id FROM lavado WHERE usuario_id = '$user_id'"
);

if ($query -> execute()) {
    $result = $query -> fetch();
}
echo "vardump del query comprovar";
var_dump($result);

//Si no existe devuelve false sino sera array
if ($result != false) {
    header("LOCATION: ../Cuenta/errorCreacion.php");
} else {
    
    //Query insert lavado

    $query = $dbcon -> prepare(
        "INSERT INTO lavado values 
        (null,'$nombre','$ubicacion',$user_id,$cocheResult,$lavadoResult)"
        );

    if ($query -> execute()) {
        header("LOCATION: ../Cuenta/userProfile.php");
    }
}




?>