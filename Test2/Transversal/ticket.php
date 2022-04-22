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
    <link rel="stylesheet" href="ticket.css">
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
        <div id = form>
            <form action = ticket.php id="formulario" method = POST>
                <h2>Enviar ticket</h2>
                <h5>Envianos tu problema para que lo podamos resolver</h4>
                <label>Tu email: </label><input type = text name = email placeholder="lorem@ipsum.com"  required>
                <textarea placeholder = "Escribe aqui tu problema" required name="texto"></textarea>
                <input type = submit name = submitTicket value = Enviar>
            </form>
            <script>
                jQuery.validator.setDefaults({
                debug: true,
                success: "valid"
            });
            $( "#formulario" ).validate({
                rules: {    
                },
                messages:{
                    email:{
                        required:"<br>Este campo no puede estar vacio <br>"
                    },
                    texto:{
                        required:"Este campo no puede estar vacio <br>"
                    }
            }
        });
        </script>  








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