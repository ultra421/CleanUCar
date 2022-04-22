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
    <script src="https://code.jquery.com/jquery-1.11.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/jquery.validate.min.js"></script>
    <script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/additional-methods.min.js"></script>
    <link rel="stylesheet" href="Base.css">
    <link rel="stylesheet" href="LogPage.css">
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
        <div id = LoginTitle>
            <h2>Login</h2>
        </div>
        <?php 
        if (isset($_SESSION["userInfoClean"]["error"])) {
            echo "<div id = error style = text-align:center><h3>" . $_SESSION["userInfoClean"]["error"] . "</h3></div>";
            unset($_SESSION["userInfoClean"]["error"]);
        }
        ?>
        <div id = logForm>
            <form action = "userProfile.php" method = GET id="formulario" >
                <div class = formInput>
                    <h4>Nombre de usuario</h4><input type = "text" name = "nombre" placeholder = "lorem@ipsum.com" required>
                </div>
                <div class = formInput>
                    <h4>Contraseña</h4><input type = "text" name = "pass" placeholder = "******" required>
                    <!--    <a href = "LogPage.php"><h5>Has olvidado la contraseña?</h5></a> -->
                </div>
                <div id = "logButton">
                    <input type = submit value = Logear>
                </div>
                <div id = "registerLink">
                    <a href = "RegPage.php">Pagina de registro</a>
                </div>
            </form>
        </div>
    </div>
    <div id = "bottomBar">
        <div>

        </div>

        <script>
        jQuery.validator.setDefaults({
        debug: true,
        success: "valid"
        });
        $( "#formulario" ).validate({
            rules: {    
            },
            messages:{
                nombre:{
                    required:"Este campo no puede estar vacio"
                },
                pass:{
                    required:"Este campo no puede estar vacio <br>"
                }
            }
        });
        </script>  
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