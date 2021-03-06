<?php 
include "../../Plantillas/startSession.php";
include "../../Plantillas/userInfoPrint.php";

if (isset($_SESSION["userInfoClean"]["nombre"]) && isset($_SESSION["userInfoClean"]["pass"])) {
    //Comprovar que session este log establecida sino devolver
    $nombre = $_SESSION["userInfoClean"]["nombre"];
    $pass = $_SESSION["userInfoClean"]["pass"];
} else {
    //header("Location: ../../Paginas/LogPage.php");
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Settings</title>
    <!--Importar CSS-->

    <link rel="stylesheet" href="../../CSS/Base.css">
    <link rel="stylesheet" href="../../CSS/Settings.css">
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
        <div id = settingsMobile>
                <div class = setting>
                    <img src ="../../Imagenes/Access.png">
                    <div class = "settingText">
                        <h3>Accesibilidad</h3>
                        <h4>Escala de la interfaz, colores</h4>
                    </div>
                </div>
                <div class = setting>
                    <img src ="../../Imagenes/config-icon-26.jpg">
                    <div class = "settingText">
                        <h3>Opciones de cuenta</h3>
                        <h4>Cerrar sesion, soporte</h4>
                    </div>
                </div>
                <div class = setting>
                    <img src ="../../Imagenes/question.png">
                    <div class = "settingText">
                        <h3>Ayuda</h3>
                        <h4>Informacion app, soporte, ticket</h4>
                    </div>
                </div>
        </div>
        <div id = settingsDesktop>
            <div class = setting>
                <img src ="../../Imagenes/Access.png">
                <div class = "settingText">
                    <h3>Accesibilidad</h3>
                    <h4>Escala de la interfaz, colores</h4>
                </div>
                <div class = hiddenContent>
                    <img src = "../../Imagenes/plus+icon-1320186815691285345.png">
                </div>
            </div>
            <div class = setting>
                <img src ="../../Imagenes/config-icon-26.jpg">
                <div class = "settingText">
                    <h3>Opciones de cuenta</h3>
                    <h4>Cerrar sesion, soporte</h4>
                </div>
                <div class = hiddenContent>
                    <img src = "../../Imagenes/plus+icon-1320186815691285345.png">
                </div>
            </div>
            <div class = setting>
                <img src ="../../Imagenes/question.png">
                <div class = "settingText">
                    <h3>Ayuda</h3>
                    <h4>Informacion app, soporte, ticket</h4>
                </div>
                <div class = hiddenContent>
                    <img src = "../../Imagenes/plus+icon-1320186815691285345.png">
                </div>
            </div>
        </div>
    </div>
    <?php
        include "../../Plantillas/bottomBar.php";
        include "../../Plantillas/bottomBarMovile.php";
    ?>
</body>
</html>