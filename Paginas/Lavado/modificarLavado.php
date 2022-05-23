<?php 
include "../../Plantillas/startSession.php";
include "../../Plantillas/userInfoPrint.php";
include "../../Plantillas/logRequired.php";
include "../../Plantillas/DBConnect.php";

//Plan: SELECT todos los lavados relacionados con el propietario(user)
//mostrar todos en la lista

$email = $_SESSION["email"]; // Email del usuario del sessions
$query = $dbcon -> prepare("SELECT * FROM usuario WHERE email = '$email'");

if ($query -> execute()) {
    $result = $query -> fetch();
    var_dump($result);
} else {
    header ("LOCATION: userProfile.php");
}

//Sacar de la pagina si no tiene ningun lavado

$usuario_id = $result["usuario_id"];
$query = $dbcon -> prepare("SELECT count(usuario_id) from lavado where usuario_id = '$usuario_id'");
if ($query -> execute()) {
    $result = $query -> fetch();
}
if ($result[0] == 0) {
    header ("LOCATION: CrearLavado.php");
}

//Conseguir datos del lavado

$query = $dbcon ->prepare("SELECT * from lavado where usuario_id = '$usuario_id'");
if ($query -> execute()) {
    $result = $query -> fetch();
} else {
    header ("LOCATION: error.php");
}
$lavadoResult = $result;

//Conseguir datos de los tipos de vehiculos

$vehiculos_id = $lavadoResult["vehiculos"];
$query = $dbcon -> prepare(
    "SELECT * from vehiculos where vehiculos_id = '$vehiculos_id'"
);
if ($query -> execute()) {
    $result = $query -> fetch();
}
$vehiculoResult = $result;

//Conseguir datos de los tipo de lavado

$tipo_id = $lavadoResult["tipo"];
$query = $dbcon -> prepare(
    "SELECT * from tipo where tipo_id = '$tipo_id'"
);
if ($query -> execute()) {
    $result = $query -> fetch();
}
$tipoResult = $result;

//Funcion para pasar si true para el html

function passToHtml ($input) {
    if ($input == 0) {
        echo "";
    } else {
        echo "checked";
    }
}

echo "</br>LAVADO RESULT</br>";
var_dump($lavadoResult);
echo "</br>VEHICULO RESULT</br>";
var_dump($vehiculoResult);
echo "</br>TIPO RESULT</br>";
var_dump($tipoResult);
$nombreLavado = $lavadoResult["nombre"];
$ubicacion = $lavadoResult["ubicacion"];


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CleanUCar</title>

    <!--Importar CSS-->

    <link rel="stylesheet" href="../../CSS/Base.css">
    <link rel="stylesheet" href="../../CSS/MainLand.css">
    <link rel="stylesheet" href="../../CSS/modificarLavado.css">
    <link href="../../Jquery/Plugins/cdwharton-cookieCuttr-4dc24d9/cookiecuttr.css" rel="stylesheet" type="text/css"/>

    <!--Importar JQuery-->
    <script src="../../Jquery/jquery-3.6.0.min.js"></script>
    <script src="../../Jquery/Plugins/jquery-cookie-master/src/jquery.cookie.js"></script>
    <script src="../../Jquery/Plugins/cdwharton-cookieCuttr-4dc24d9/jquery.cookiecuttr.js"></script>
    
</head>
<body>
<?php 
include "../../Plantillas/topBar.php";
include "../../Plantillas/topBarMovile.php";
?>

<div id = mainContent>
    <h2>Modificar Lavado</h2>
    <form action="modificarLavadoUpload.php" method = "POST">
        Nombre del lavado:<input type = text name = nombre placeholder = "Lavado los pepes" value = <?php echo $nombreLavado ?>>
        Ubicacion del lavado<input type = text name = ubicacion placeholder = "Calle ubicacion" value = <?php echo $ubicacion ?>>
        <h3>Tipos de vehiculos</h3>
        <input type = checkbox name = coche <?php passToHtml($vehiculoResult[1]) ?>>
        <label for = coche>Acepta coches?</label>

        <input type = checkbox name = moto <?php passToHtml($vehiculoResult[2]) ?>>
        <label for = moto>Acepta motos?</label>

        <input type = checkbox name = furgoneta <?php passToHtml($vehiculoResult[3]) ?> >
        <label for = furgoneta>Acepta furgonetas?</label>
        
        <input type = checkbox name = camion <?php passToHtml($vehiculoResult[4]) ?>>
        <label for = camion>Acepta camiones?</label>

        <h3>Tipo de lavado</h3>

        <input type = checkbox name = tunel <?php passToHtml($tipoResult[1]) ?>>
        <label for = tunel>Tunel</label>

        <input type = checkbox name = presion <?php passToHtml($tipoResult[2]) ?>>
        <label for = presion>Presion</label>

        <input type = checkbox name = mano <?php passToHtml($tipoResult[3]) ?>>
        <label for = mano>Mano</label>

        <input type = checkbox name =ecologico <?php passToHtml($tipoResult[4]) ?>>
        <label for = ecologico>Ecologico</label>

        <input type = checkbox name = aspirado <?php passToHtml($tipoResult[5]) ?>>
        <label for = aspirado>Aspirado</label>

        <input type = checkbox name = cera <?php passToHtml($tipoResult[6]) ?>>
        <label for = cerca>Cera</label>

        <input type = checkbox name = pulido <?php passToHtml($tipoResult[7]) ?>>
        <label for = pulido>Pulido</label>

        <br></br>
        <input type = submit name = submit value = "Modificar lavado">
    </form>
    <form action = eliminarLavado.php method = "POST">
        <!-- Input para enviar la id de lavado -->
        <input type = hidden name = lavado_id value = <?php echo $lavadoResult["lavado_id"]; ?>>
        <input type = submit name = submit value = "Eliminar lavado">
    </form>
</div>

<?php
        include "../../Plantillas/bottomBar.php";
        include "../../Plantillas/bottomBarMovile.php";
?>