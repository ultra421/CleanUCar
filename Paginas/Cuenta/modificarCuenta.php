<?php 
include "../../Plantillas/startSession.php";
include "../../Plantillas/userInfoPrint.php";
include "../../Plantillas/logRequired.php";
include "../../Plantillas/DBConnect.php";

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
    <link rel="stylesheet" href="../../CSS/modificarCuenta.css">
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
    <form action="modificarUpload.php" method = "POST">
            <h2>Login</h2>
            <div class= "izquierda">
                <div class= "formInput">
                    <h3>Nombre de usuario</h4> 
                    <input type="text" name = "nombre" size="40%" placeholder = "Tu nombre" value = <?php echo $nombre ?>>
                </div>
                <div class= "formInput">
                    <h3>Contraseña</h4>
                    <input type="password" name="pass" size="40%" placeholder ="******" value = <?php echo $pass ?>>

                </div>
            </div> 
            <div class = "derecha"> 
                <div class= "formInput">
                    <h3>Email</h4>
                    <input type="email" name="email" size="40%" placeholder="CleanUCar@gmail.com" value = <?php echo $email ?>>
                </div>
                <div class= "formInput">
                    <h3>Telefono</h4>
                    <input type="text" name="telefono" size="40%" placeholder ="665602524" value = <?php echo $telefono ?>>
                </div>
                <div class= "formInput">
                    <h3>Genero</h4>
                    <select name="genero" value = <?php echo $genero ?>>
                        <option value="Hombre">Hombre</option>
                        <option value="Mujer">Mujer</option>
                        <option value="Otros">Otros</option>
                    </select>
                </div>
                <a href = "deleteCuenta.php">Eliminar la cuenta</a>
            </div>
            <div class="aux"> 
            </div>
            <div id="enviar">
            <input type="submit" value="enviar">
            </div>
    </form>
</div>

<?php
        include "../../Plantillas/bottomBar.php";
        include "../../Plantillas/bottomBarMovile.php";
?>