<?php 
include "../../Plantillas/startSession.php";
include "../../Plantillas/userInfoPrint.php";
include "../../Plantillas/logRequired.php";
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pagar</title>
    <link rel="stylesheet" href="../../CSS/Base.css">
    <link rel="stylesheet" href="../../CSS/Pagar.css">
      
    <!--Importar CSS-->

    <link rel="stylesheet" href="../../CSS/Base.css">
    <link rel="stylesheet" href="../../CSS/MainLand.css">
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
        <h1>Pagina de Pago</h1>
        <a href = "../../Paginas/PagosRealizados/VerifyPago.php">
            <div>
                <img src = "../../Imagenes/Visa-icon.png">
                <h2>Tarjeta **** **** 1111</h2>
            </div>
        </a>
        <a href = "../../Paginas/PagosRealizados/VerifyPago.php">
            <div>
                <img src = "../../Imagenes/Visa-icon.png">
                <h2>Tarjeta **** ***     * 1111</h2>
            </div>
        </a>
        <a href = "../../Paginas/PagosRealizados/VerifyPago.php">
            <div>
                <img src = "../../Imagenes/Visa-icon.png">
                <h2>Tarjeta **** **** 1111</h2>
            </div>
        </a>
    </div>
    <?php
        include "../../Plantillas/bottomBar.php";
        include "../../Plantillas/bottomBarMovile.php";
    ?>
</body>
</html>