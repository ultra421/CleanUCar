<?php 

session_start();

include "../../Plantillas/DBConnect.php";

if (!isset($_POST["submit"])) {
    header("Location: ../Cuenta/userProfile.php");
}

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

//Tipos de lavado/vehiculos, hay campos en la base de datos con todas las posibles combinaciones
//entra las opciones, cada uno con una id unica, esta se enlaza a el lavado en sus propeidades

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

if ($result["vehiculos_id"] == 1112) { // 1112 es el tipo de coches donde no se cumple ningu ncampo (todo false)
    header("LOCATION: CrearLavado.php");
}

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

if ($result["tipo_id"] == 129) { // 129 es el lavado donde no se cumple ningun campo (todo false)
    header("LOCATION: CrearLavado.php");
}

$lavadoResult = $result["tipo_id"];

// QUery userID

$email = $_SESSION["email"];
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
$precio = $_POST["precio"];

//Comprovar que usuario no tenga ya un lavado
//Query devuelve false si no hay nada

$query = $dbcon -> prepare(
    "SELECT usuario_id FROM lavado WHERE usuario_id = '$user_id'"
);

if ($query -> execute()) {
    $result = $query -> fetch();
}

//Si no existe devuelve false sino sera array, solo queremos un lavado por usuario demomento
if ($result != false) {
    header("LOCATION: ../Cuenta/userProfile.php");
} else {
    
    //Query insert lavado
    $dbcon -> beginTransaction();
    $query = $dbcon -> prepare(
        "INSERT INTO lavado values 
        (null,'$nombre','$ubicacion',$precio,$user_id,$cocheResult,$lavadoResult)"
        );

    if (!($query -> execute())) {
        $dbcon -> rollback();
        echo "error insert lavado";
        header("LOCATION: CrearLavado.php");
    }

    //Query insertar imagen

    $infoFile = $_FILES["imagen"];
    $fileName = $infoFile["name"];
    $tempName = $infoFile["tmp_name"];

    //Necesitamos la id del lavado

    $query = $dbcon -> prepare (
        "SELECT lavado_id FROM lavado WHERE usuario_id = '$user_id'"
    );

    if (!($query -> execute())) {
        $dbcon -> rollback();
        echo "Fail de sleect id lavaos";
    }
    
    $result = $query -> fetch();
    $lavado_id = $result["lavado_id"];
    $extension = pathinfo($fileName, PATHINFO_EXTENSION);
    $hashedName = hash('md5',$fileName.rand(0,99999999)); // Evitar nombres repetidos (muchas imagenes se llaman unnamed.jpg por ejemplo)
    $path = $hashedName.".".$extension; // Archivo.extension

    $query = $dbcon -> prepare("INSERT INTO imagenes_lavado values (null,'$lavado_id','$path','no desc')");

    if ($query -> execute()) {  
        
        $finalRoute = "../../Imagenes/lavados/".$path;

        if (move_uploaded_file($tempName,$finalRoute)) {
            $dbcon -> commit();
            header('location: ../Cuenta/userProfile.php');
        } else {
            $dbcon -> rollback();
            echo "error";
        }

    }

}

?>