<?php 
session_start();
include "../../Plantillas/startSession.php";
include "../../Plantillas/userInfoPrint.php";


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
    //header("Location: ../../Paginas/LogPage.php");
}
/*
if (verifyInfo($nombre,$pass)) {
    $log = 1;
    $_SESSION["userInfoClean"]["log"] = $log; 
} else {
    $log = 0;
    unset($_SESSION["userInfoClean"]["nombre"]);
    unset($_SESSION["userInfoClean"]["pass"]);
    echo "<h1>AAAAAAAAAAAAAAAAa</h1>";
    $_SESSION["userInfoClean"]["error"] = "Has introducido el usuario/contraseña mal";
    //header("Location: ../../Paginas/Login/LogPage.php");
}
*/
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
    <link rel="stylesheet" href="../../CSS/userProfile.css">
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
        <div id = profileMobile>
            <div id = userInfo>
                <div id = userImage>
                    <img src = "../../Imagenes/IconoUsuario.png">
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
                            <img src = "../../Imagenes/BlackStar.png">
                            <h3>4,7</h3>
                        </div>
                        <div class = reviewText>
                            <p>Lorem ipsum Lorem ipsum Lorem ipsumLorem ipsum Lorem ipsum</p>
                        </div>
                    </div>
                    <div class = review>
                        <div>
                            <img src = "../../Imagenes/BlackStar.png">
                            <h3>4,7</h3>
                        </div>
                        <div class = reviewText>
                            <p>Lorem ipsum Lorem ipsum Lorem ipsumLorem ipsum Lorem ipsum</p>
                        </div>
                    </div>
                    <div class = review>
                        <div>
                            <img src = "../../Imagenes/BlackStar.png">
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
                    <img src = "../../Imagenes/IconoUsuario.png">
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
                        <img src = "../../Imagenes/BlackStar.png">
                        <h3>4,7</h3>
                    </div>
                    <div class = reviewText>
                        <p>Lorem ipsum Lorem ipsum Lorem ipsumLorem ipsum Lorem ipsum</p>
                    </div>
                </div>
                <div class = review>
                    <div>
                        <img src = "../../Imagenes/BlackStar.png">
                        <h3>4,7</h3>
                    </div>
                    <div class = reviewText>
                        <p>Lorem ipsum Lorem ipsum Lorem ipsumLorem ipsum Lorem ipsum</p>
                    </div>
                </div>
                <div class = review>
                    <div>
                        <img src = "../../Imagenes/BlackStar.png">
                        <h3>4,7</h3>
                    </div>
                    <div class = reviewText>
                        <p>Lorem ipsum Lorem ipsum Lorem ipsumLorem ipsum Lorem ipsum</p>
                    </div>
                </div>
                <div class = review>
                    <div>
                        <img src = "../../Imagenes/BlackStar.png">
                        <h3>4,7</h3>
                    </div>
                    <div class = reviewText>
                        <p>Lorem ipsum Lorem ipsum Lorem ipsumLorem ipsum Lorem ipsum</p>
                    </div>
                </div>
                <div class = review>
                    <div>
                        <img src = "../../Imagenes/BlackStar.png">
                        <h3>4,7</h3>
                    </div>
                    <div class = ../../Imagenes/reviewText>
                        <p>Lorem ipsum Lorem ipsum Lorem ipsumLorem ipsum Lorem ipsum</p>
                    </div>
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