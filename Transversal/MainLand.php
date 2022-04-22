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
    <link rel="stylesheet" href="MainLand.css">
    <script src="https://code.jquery.com/jquery-1.11.2.min.js"></script>
    <script src="Plugins/jquery-cookie-master/src/jquery.cookie.js"></script>
    <script src="Plugins/jquery.cookiecuttr.js"></script>
    <script type="text/javascript">
	$( document ).ready(function() {
		$('#menu_on').click(function(){ // Al hacer click...
		   $('body').toggleClass('visible_menu'); // Añadimos o eliminamos la clase 'visible_menu' al body
		 })
	});
    </script>
    <link href="Plugins/cookiecuttr.css" rel="stylesheet" type="text/css"/>

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
                <a href = "/practica04/Transversal/MainLand.php">
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
        <a id = fakeMap href = "MainLandFake.php">
            <div>
                <img src = "fakemap.png" >
            </div>
        </a>
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
    <script type="text/javascript" defer>
			$.cookieCuttr({
				cookieCutter: true,
				cookieDisable: '.hide-cookies',
				cookieNotificationLocationBottom: true,
				cookieAnalytics: true, 
				cookiePolicyPageMessage: 'Por favor lea la siguiente información y elija una de las siguientes opciones',
				cookiePolicyLink: '/politica-cookies',
				cookieMessage: 'Utilizamos cookies en nuestro website. Puede leer nuestra <a href="{{cookiePolicyLink}}" title="Política de cookies">política de cookies</a>',
				cookieAnalyticsMessage: 'Utilizamos cookies sólo para recoger estadísticas de uso sin almacenar datos personales. <a href="/politica-cookies" title="Política de cookies">Política de cookies</a>',
				cookieErrorMessage: "Lo sentimos. Esta funcionalidad está desactivada en su navegador. <br>Para seguir utilizando esta funcionalidad, por favor pulse",
				cookieWhatAreTheyLink: "/sobre-las-cookies",
				cookieAcceptButtonText: "ACEPTAR COOKIES",
				cookieDeclineButtonText: "NO USAR COOKIES",
				cookieResetButtonText: "BORRAR COOKIES",
				cookieWhatAreLinkText: "¿Qué son las cookies?",
				cookieDiscreetLinkText: "¿Utilizar cookies?",
        cookieExpires: 1,
			});
		</script>	
</body>
</html>