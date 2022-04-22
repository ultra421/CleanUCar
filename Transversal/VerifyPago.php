<?php 
include "../startSession.php";
include "../userInfoPrint.php";

if (isset($_SESSION["userInfoClean"]["nombre"]) && isset($_SESSION["userInfoClean"]["pass"])) {
    //Comprovar que session este log establecida sino devolver
    $nombre = $_SESSION["userInfoClean"]["nombre"];
    $pass = $_SESSION["userInfoClean"]["pass"];
} else {
    header("Location: LogPage.php");
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="Base.css">
    <link rel="stylesheet" href="VerifyPago.css">
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
            <?php 
            printInfo($log,$nombre,$pass) ?> <!-- Print info del usuario/boton login -->
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
        <div class = deskQR>
            <h2>Pago verificado</h2>
            <h3>En: Lorem Ipsum</h3>
            <img src = "qr-code.png">
        </div>
        <div class = deskQR>
            <h2>Pago verificado</h2>
            <h3>En: Lorem Ipsum</h3>
            <img src = "qr-code.png">
        </div>
        <div class = deskQR>
            <h2>Pago verificado</h2>
            <h3>En: Lorem Ipsum</h3>
            <img src = "qr-code.png">
        </div>
        <div class = deskQR>
            <h2>Pago verificado</h2>
            <h3>En: Lorem Ipsum</h3>
            <img src = "qr-code.png">
        </div>
        <div class = "mobileQR">
            <h2>Pago verificado</h2>
            <h3>En: Lorem Ipsum</h3>
            <img src = "qr-code.png">
        </div>
        <div class = "mobileQR">
            <h2>Pago verificado</h2>
            <h3>En: Lorem Ipsum</h3>
            <img src = "qr-code.png">
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