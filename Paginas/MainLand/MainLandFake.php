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
    <link rel="stylesheet" href="../../CSS/MainLand.css">
    <link rel="stylesheet" href="../../CSS/MainLandFake.css">
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
        <div id = Reserv>
            <div id = ReservInfo>
                <h3>Nombre Lavado</h3>
                <div>
                    <img src = "../../Imagenes/BlackStar.png">
                    4,7
                </div>
            </div>
            <div id = ReservButton>
                <h2>Precio: 12€</h2>
                <div id = ReservContent>
                    <img src = "../../Imagenes/stucom_logo.png">
                    <img src = "../../Imagenes/stucom_logo.png">
                </div>
                <div id = ReservSubmit>
                    <form method= "GET" action = "Pagar.php">
                        <input type = submit value = Reservar>
                    </form>
                </div>
            </div>
        </div>
        <div id = fakeMap>
            <a href = "index.php">
                <div>
                    <img id = fakeImage src = "../../Imagenes/fakemap.png">
                </div>
            </a>
        </div>
        <div id = ReservMobile>
            <div id = ReservRating>
                <div>
                    <img src = "../../Imagenes/BlackStar.png">
                    4,7
                    <h3>Nombre Lavado</h3>
                </div>
            </div>
            <div id = ReservSubmit>
                <img src = "../../Imagenes/stucom_logo.png">
                <form method= "GET" action = "Pagar.php">
                    <input type = submit value = Reservar>
                </form>
            </div>
        </div>
    </div>
    <?php
        include "../../Plantillas/bottomBar.php";
        include "../../Plantillas/bottomBarMovile.php";
    ?>
</body>
</html>