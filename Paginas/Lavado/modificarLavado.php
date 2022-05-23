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

$nombre = $result["nombre"];
$email = $result["email"];
$telefono = $result["telefono"];
$genero = $result["genero"];
$pass = $result["pass"];

//Conseguir datos para rellenar los forms

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
    <form action="modificarLavadoUpload.php" method = "POST">
        Nombre del lavado:<input type = text name = nombre placeholder = "Lavado los pepes">
        Ubicacion del lavado<input type = text name = ubicacion placeholder = "Calle ubicacion">
        <h3>Tipos de vehiculos</h3>
        <input type = checkbox name = coche require>
        <label for = coche>Acepta coches?</label>

        <input type = checkbox name = moto require>
        <label for = moto>Acepta motos?</label>

        <input type = checkbox name = furgoneta>
        <label for = furgoneta>Acepta furgonetas?</label>
        
        <input type = checkbox name = camion>
        <label for = camion>Acepta camiones?</label>

        <h3>Tipo de lavado</h3>

        <input type = checkbox name = tunel>
        <label for = tunel>Tunel</label>

        <input type = checkbox name = presion>
        <label for = presion>Presion</label>

        <input type = checkbox name =mano>
        <label for = mano>Mano</label>

        <input type = checkbox name =ecologico>
        <label for = ecologico>Ecologico</label>

        <input type = checkbox name = aspirado>
        <label for = aspirado>Aspirado</label>

        <input type = checkbox name = cera>
        <label for = cerca>Cera</label>

        <input type = checkbox name = pulido>
        <label for = pulido>Pulido</label>

        <br></br>
        <input type = submit name = submit value = "Añadir lavado">
    </form>
</div>

<?php
        include "../../Plantillas/bottomBar.php";
        include "../../Plantillas/bottomBarMovile.php";
?>