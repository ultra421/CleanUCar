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
    <link rel="stylesheet" href="../../CSS/uploadReview.css">
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
    <form action = "uploadReview.php" method = post>
        <label>Review<textarea name = reviewContent></textarea></label>
        <label>Rating<input type = number min = 0 max = 5></label>
        <label>Imagen<input type = file name = reviewImage accept = "image/*"></label>
        <input type = submit>
    </form>
</div>
    <?php
        include "../../Plantillas/bottomBar.php";
        include "../../Plantillas/bottomBarMovile.php";
    ?>
</body>
</html>