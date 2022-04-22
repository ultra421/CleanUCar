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
    <script src="jquery-3.6.0.min.js"></script>
    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
    <script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
    <script src="MainLandFake.js" defer></script>
    <link rel="stylesheet" href="Base.css">
    <link rel="stylesheet" href="MainLandFake.css">
    
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
        <div id = Reserv>
            <div id = ReservInfo>
                <h3>Nombre Lavado</h3>
                <div>
                    <img src = "BlackStar.png">
                    4,7
                </div>
            </div>
            <div id = ReservButton>
                <h2>Precio: 12€</h2>
                <div class = "slider">
                    <img class = "slider_foto" src = "lavado_coche.jpg"></img>
                    <img class = "slider_foto" src = "lavado_coche2.jpeg"></img>
                    <img class = "slider_foto" src = "lavado_coche3.jpg"></img>
                </div>
                <div id = ReservSubmit>
                    <form method= "GET" action = "Pagar.php">
                        <input type = submit value = Reservar>
                    </form>
                </div>
            </div>
        </div>
        <div id = fakeMap>
            <a href = "MainLand.php">
                <div>
                    <img id = fakeImage src = "fakemap.png">
                </div>
            </a>
        </div>
        <div id = ReservMobile>
            <div id = ReservRating>
                <div>
                    <img src = "BlackStar.png">
                    4,7
                    <h3>Nombre Lavado</h3>
                </div>
            </div>
            <div id = ReservSubmit>
                <div class = "slider">
                    <img class = "slider_foto" src = "lavado_coche.jpg"></img>
                    <img class = "slider_foto" src = "lavado_coche2.jpeg"></img>
                    <img class = "slider_foto" src = "lavado_coche3.jpg"></img>
                </div>
                <form method= "GET" action = "Pagar.php">
                    <input type = submit value = Reservar>
                </form>
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