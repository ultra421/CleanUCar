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
        <div id = LoginTitle>
            <h2>Login</h2>
        </div>
        <div id = logForm>
            <form action = "RegisVerify.php" method = GET >
                <h3>La contraseña debe tener un minimo de 7 caracteres, una mayuscula y una minuscula</h3>
                <div class = formInput>
                    <h4>Nombre de usuario</h4><input type = text name = nombre placeholder = lorem@ipsum.com>
                    <input type = "hidden" value = "true" name = "register">
                </div>
                <div class = formInput>
                    <h4>Contraseña</h4><input type = text name = pass placeholder = ******>
                </div>
                <div class = formInput>
                    <h4>Verifica Contraseña</h4><input type = text name = passVerify placeholder = ******>
                    <a href = "LogPage.php"><h5>Has olvidado la contraseña?</h5></a>
                </div>
                <div>
                    <input type = submit value = Registrar>
                </div>
            </form>
        </div>
    </div>
    <?php
        include "../../Plantillas/bottomBar.php";
        include "../../Plantillas/bottomBarMovile.php";
    ?>
</body>
</html>