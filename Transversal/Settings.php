<?php 
include "../startSession.php";
include "../userInfoPrint.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="Base.css">
    <link rel="stylesheet" href="Settings.css">
</head>
<body>
    <div id = "topBar">
        <div id = "logo">
            <img src = "stucom_logo.png">
        </div>
        <div id = "navigation">
            <div>
                <a href = "userProfile.php">
                    <img src = "IconoUsuario.png">
                </a>
            </div>
            <div>
                <a href = "MainLand.php">
                    <img src = "Gps_icono.png">
                </a>
            </div>
            <div>
                <a href = "VerifyPago.php">
                    <img src = "IconoVerificarPago.png">
                </a>
            </div>
        </div>
        <div id = "botonesLogin">
            <?php printInfo($log,$nombre,$pass) ?> <!-- Print info del usuario/boton login -->
        </div>
        <div id = "settings">
            <a href = "Settings.php">
                <img src = "barras.png">
            </a>
        </div>
    </div>
    <div id = "topBarMobile">
        <div id = "settingsLogoDiv">
            <img id = settingsIcon src = "config-icon-26.jpg">
            <h2>Configuración</h2>
        </div>
        <div></div>
    </div>
    <div id = mainContent>
        <div id = settingsMobile>
                <div class = setting>
                    <img src ="Access.png">
                    <div class = "settingText">
                        <h3>Accesibilidad</h3>
                        <h4>Escala de la interfaz, colores</h4>
                    </div>
                </div>
                <div class = setting>
                    <img src ="config-icon-26.jpg">
                    <div class = "settingText">
                        <h3>Opciones de cuenta</h3>
                        <h4>Cerrar sesion, soporte</h4>
                    </div>
                </div>
                <a href = "ticket.php">
                    <div class = setting>
                        <img src ="question.png">
                        <div class = "settingText">
                            <h3>Ayuda</h3>
                            <h4>Informacion app, soporte, ticket</h4>
                        </div>
                    </div>
                </a>
        </div>
        <div id = settingsDesktop>
            <div class = setting>
                <img src ="Access.png">
                <div class = "settingText">
                    <h3>Accesibilidad</h3>
                    <h4>Escala de la interfaz, colores</h4>
                </div>
                <div class = hiddenContent>
                    <img src = "plus+icon-1320186815691285345.png">
                </div>
            </div>
            <div class = setting>
                <img src ="config-icon-26.jpg">
                <div class = "settingText">
                    <h3>Opciones de cuenta</h3>
                    <h4>Cerrar sesion, soporte</h4>
                </div>
                <div class = hiddenContent>
                    <img src = "plus+icon-1320186815691285345.png">
                </div>
            </div>
            <a href = "ticket.php">
                    <div class = setting>
                        <img src ="question.png">
                        <div class = "settingText">
                            <h3>Ayuda</h3>
                            <h4>Informacion app, soporte, ticket</h4>
                        </div>
                    </div>
            </a>
        </div>
    </div>
    <div id = "bottomBar">
        <div> 
        </div>
    </div>
    <div id =bottomBarMobile>
        <div id = "navigation">
                        <div>
                <a href = "userProfile.php">
                    <img src = "IconoUsuario.png">
                </a>
            </div>
            <div>
                <a href = "MainLand.php">
                    <img src = "Gps_icono.png">
                </a>
            </div>
            <div>
                <a href = "VerifyPago.php">
                    <img src = "IconoVerificarPago.png">
                </a>
            </div>
        </div>
    </div>
</body>
</html>