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
    <link rel="stylesheet" href="Pagar.css">
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
        <img id = "logo" src = "stucom_logo.png">
        <div id = "botonesLogin">
            <?php printInfo($log,$nombre,$pass) ?> <!-- Print info del usuario/boton login -->
        </div>
        <div id = "settings">
            <a href = "Settings.php">
                <img src = "barras.png">
            </a>
        </div>
    </div>
    <div id = mainContent>
        <h1>Pagina de Pago</h1>
        <a href = "VerifyPago.php">
            <div>
                <img src = "Visa-icon.png">
                <h2>Tarjeta **** **** 1111</h2>
            </div>
        </a>
        <a href = "VerifyPago.php">
            <div>
                <img src = "Visa-icon.png">
                <h2>Tarjeta **** **** 1111</h2>
            </div>
        </a>
        <a href = "VerifyPago.php">
            <div>
                <img src = "Visa-icon.png">
                <h2>Tarjeta **** **** 1111</h2>
            </div>
        </a>
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