<?php 
session_start();
include "..//verifyLogFunction.php";
include "..//userInfoPrint.php";

if (isset($_GET["nombre"]) && isset($_GET["pass"])) {
    //Comprovar Gets
    $nombre = $_GET["nombre"];
    $pass = $_GET["pass"];
    $_SESSION["userInfoClean"]["nombre"] = $nombre;
    $_SESSION["userInfoClean"]["pass"] = $pass;

}else if (isset($_SESSION["userInfoClean"]["nombre"]) && isset($_SESSION["userInfoClean"]["pass"])) {
    //Comprovar que session este log establecida sino devolver
    $nombre = $_SESSION["userInfoClean"]["nombre"];
    $pass = $_SESSION["userInfoClean"]["pass"];
} else {
    header("Location: LogPage.php");
}

if (verifyInfo($nombre,$pass)) {
    $log = 1;
    $_SESSION["userInfoClean"]["log"] = $log; 
} else {
    $log = 0;
    unset($_SESSION["userInfoClean"]["nombre"]);
    unset($_SESSION["userInfoClean"]["pass"]);
    echo "<h1>AAAAAAAAAAAAAAAAa</h1>";
    $_SESSION["userInfoClean"]["error"] = "Has introducido el usuario/contraseña mal";
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
    <link rel="stylesheet" href="userProfile.css">
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
            <?php
            if ($log == 1) { ?>
                <a href = "userProfile.php">
                    <h2><?php echo $nombre; ?></h2>
                </a>
            <?php 
            } else { ?>
                <a href = "LogPage.php">
                    <h2>Login</h2>
                </a>
                <?php
            } 
            ?>
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
            <a href = "LogPage.php">
                <h2>Login</h2>
            </a>
        </div>
        <div id = "settings">
            <a href = "Settings.php">
                <img src = "barras.png">
            </a>
        </div>
    </div>
    <div id = mainContent>
        <div id = profileMobile>
            <div id = userInfo>
                <div id = userImage>
                    <img src = "IconoUsuario.png">
                </div>
                <div id = userName>
                    <h2><?php echo $nombre ?></h2>
                </div>
                <div> <!-- Añadir este div a base y separar pagina en includes!! -->
                    <a href = "cerrarSession.php">Cerrar Session</a>
                </div>
            </div>
            <div id = "userReview">
                <div>
                    <h2>Reseñas</h2>
                    <div class = review>
                        <div>
                            <img src = "BlackStar.png">
                            <h3>4,7</h3>
                        </div>
                        <div class = reviewText>
                            <p>Lorem ipsum Lorem ipsum Lorem ipsumLorem ipsum Lorem ipsum</p>
                        </div>
                    </div>
                    <div class = review>
                        <div>
                            <img src = "BlackStar.png">
                            <h3>4,7</h3>
                        </div>
                        <div class = reviewText>
                            <p>Lorem ipsum Lorem ipsum Lorem ipsumLorem ipsum Lorem ipsum</p>
                        </div>
                    </div>
                    <div class = review>
                        <div>
                            <img src = "BlackStar.png">
                            <h3>4,7</h3>
                        </div>
                        <div class = reviewText>
                            <p>Lorem ipsum Lorem ipsum Lorem ipsumLorem ipsum Lorem ipsum</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div id = profileDesktop>
            <div id = userInfo>
                <div id = userImage>
                    <img src = "IconoUsuario.png">
                </div>
                <div id = userName>
                    <h3><?php echo $nombre ?></h3>
                </div>
                <div> <!-- Añadir este div a base y separar pagina en includes!! -->
                    <a href = "cerrarSession.php">Cerrar Session</a>
                </div>
            </div>
            <div id = userReview>
                <h1>Reseñas</h1>
                <div class = review>
                    <div>
                        <img src = "BlackStar.png">
                        <h3>4,7</h3>
                    </div>
                    <div class = reviewText>
                        <p>Lorem ipsum Lorem ipsum Lorem ipsumLorem ipsum Lorem ipsum</p>
                    </div>
                </div>
                <div class = review>
                    <div>
                        <img src = "BlackStar.png">
                        <h3>4,7</h3>
                    </div>
                    <div class = reviewText>
                        <p>Lorem ipsum Lorem ipsum Lorem ipsumLorem ipsum Lorem ipsum</p>
                    </div>
                </div>
                <div class = review>
                    <div>
                        <img src = "BlackStar.png">
                        <h3>4,7</h3>
                    </div>
                    <div class = reviewText>
                        <p>Lorem ipsum Lorem ipsum Lorem ipsumLorem ipsum Lorem ipsum</p>
                    </div>
                </div>
                <div class = review>
                    <div>
                        <img src = "BlackStar.png">
                        <h3>4,7</h3>
                    </div>
                    <div class = reviewText>
                        <p>Lorem ipsum Lorem ipsum Lorem ipsumLorem ipsum Lorem ipsum</p>
                    </div>
                </div>
                <div class = review>
                    <div>
                        <img src = "BlackStar.png">
                        <h3>4,7</h3>
                    </div>
                    <div class = reviewText>
                        <p>Lorem ipsum Lorem ipsum Lorem ipsumLorem ipsum Lorem ipsum</p>
                    </div>
                </div>
            </div>
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