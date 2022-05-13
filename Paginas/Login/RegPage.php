<?php 
include "../../Plantillas/startSession.php";
include "../../Plantillas/userInfoPrint.php";
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
    <link rel="stylesheet" href="../../CSS/LogPage.css">
    <link rel="stylesheet" href="../../CSS/RegPage.css">
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
        <form action="RegisVerify.php">
            <h2>Login</h2>
            <div class= "izquierda">
                <div class= "formInput">
                    <h3>Nombre de usuario</h4> 
                    <input type="text" name = "nombre" size="40%" placeholder = "Tu nombre">
                </div>
                <div class= "formInput">
                    <h3>Contraseña</h4>
                    <input type="password" name="pass" size="40%" placeholder ="******">

                </div>
                <div class= "formInput">
                    <h3>Repetir Contraseña</h4>
                    <input type="password" name="pass2" size="40%" placeholder ="******">

                </div>

            </div> 
            <div class = "derecha"> 
                <div class= "formInput">
                    <h3>Email</h4>
                    <input type="email" name="email" size="40%" placeholder="CleanUCar@gmail.com">
                </div>
                <div class= "formInput">
                    <h3>Telefono</h4>
                    <input type="text" name="telefono" size="40%" placeholder ="665602524">
                </div>
                <div class= "formInput">
                    <h3>Genero</h4>
                    <select name="genero" >
                        <option value="Hombre">Hombre</option>
                        <option value="Mujer">Mujer</option>
                        <option value="Otros">Otros</option>
                    </select>
                </div>
            </div>
            <div class="aux">        
            </div>
            <div id="enviar">
            <input type="submit" value="enviar">
            </div>
        </form>
    <?php
        include "../../Plantillas/bottomBar.php";
        include "../../Plantillas/bottomBarMovile.php";
    ?>
</body>
</html>