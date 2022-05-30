<?php 
include "../../Plantillas/startSession.php";
include "../../Plantillas/userInfoPrint.php";
include "../../Plantillas/logRequired.php";
?>

<!DOCTYPE html>
<html lang="en">
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CleanUCar</title>

    <!--Importar CSS-->

    <link rel="stylesheet" href="../../CSS/Base.css">
    <link rel="stylesheet" href="../../CSS/VerifyPago.css">
    <link href="../../Jquery/Plugins/cdwharton-cookieCuttr-4dc24d9/cookiecuttr.css" rel="stylesheet" type="text/css"/>

    <!--Importar JQuery-->
    <script src="../../Jquery/jquery-3.6.0.min.js"></script>
    <script src="../../Jquery/jqueryVerifyPago.js" defer></script>
    <script src="../../Jquery/Plugins/jquery-cookie-master/src/jquery.cookie.js"></script>
    <script src="../../Jquery/Plugins/cdwharton-cookieCuttr-4dc24d9/jquery.cookiecuttr.js"></script>
    

</head>
<body>
<?php 
include "../../Plantillas/topBar.php";
include "../../Plantillas/topBarMovile.php";
?>
    <div id = mainContent>
        <div id = pagos>
            <button id = cargarPagos>Cargar pagos</button>
        </div>
        <div class = "mobileQR">
            <h2>Pago verificado</h2>
            <h3>En: Lorem Ipsum</h3>
            <img src = "../../Imagenes/qr-code.png">
        </div>
        <div class = "mobileQR">
            <h2>Pago verificado</h2>
            <h3>En: Lorem Ipsum</h3>
            <img src = "../../Imagenes/qr-code.png">
        </div>
    </div>
    <?php
        include "../../Plantillas/bottomBar.php";
        include "../../Plantillas/bottomBarMovile.php";
    ?>
</body>
</html>