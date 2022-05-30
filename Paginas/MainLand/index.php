<?php 
include "../../Plantillas/startSession.php";
include "../../Plantillas/userInfoPrint.php";
?>


<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CleanUCar</title>

    <!--Importar CSS-->

    <link rel="stylesheet" href="../../CSS/Base.css">
    <link rel="stylesheet" href="../../CSS/MainLand.css">
    <link href="../../Jquery/Plugins/cdwharton-cookieCuttr-4dc24d9/cookiecuttr.css" rel="stylesheet" type="text/css"/>
    <link rel="stylesheet" href="../../CSS/MainLandFake.css">
    <!--Importar JQuery-->
    <script src="../../Jquery/jquery-3.6.0.min.js"></script>
    <script src="../../Jquery/jqueryMainLand.js" defer></script>
    <script src="../../Jquery/Plugins/jquery-cookie-master/src/jquery.cookie.js"></script>
    <script src="../../Jquery/Plugins/cdwharton-cookieCuttr-4dc24d9/jquery.cookiecuttr.js"></script>
    

</head>
<body>
    <div id="divdesaparecedor">
    </div>
    
    <div id="divemergente">
     <h2>Mas Imagenes</h2>
    </div>
<?php 
include "../../Plantillas/topBar.php";
include "../../Plantillas/topBarMovile.php";
?>
<div id = mainContent>
<div id = Reserv>
        <div id = ReservInfo>
            <h3 id = tituloLavado>null</h3>
            <div>
                <img src = "../../Imagenes/BlackStar.png">
                reviewToDo
            </div>
        </div>
        <div id = ReservButton>
            <h2 id = Precio>Precio: null</h2>
            <div id = ReservContent>
                <img id="masimagenes" src = "../../Imagenes/stucom_logo.png">
            </div>
            <div id = moveLavados>
                <button type = button id = previoLavado>Anterior lavado</button>
                <button type = button id = nextLavado>Siguiente lavado</button>
            </div>
            <div id = ReservSubmit>
                <form method= "GET" action = "../../Paginas/Pagar/Pagar.php" id = pagar>
                    <input type = hidden id = lavadoID>
                    <input type = submit value = Reservar>
                </form>
            </div>
        </div>
    </div>
    <div id = fakeMap>
        <div>
            <img id = fakeImage src = "../../Imagenes/fakemap.png">
        </div>
    </div>
    <div id = ReservMobile>
        <div id = ReservRating>
            <div>
                <img src = "../../Imagenes/BlackStar.png"><
                4,7
                <h3>Nombre Lavado</h3>
            </div>
        </div>
        <div id = ReservSubmit>
            <img id="masimagenesmovile" src = "../../Imagenes/stucom_logo.png">
            <form method= "GET" action = "../../Paginas/Pagar/Pagar.php">
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