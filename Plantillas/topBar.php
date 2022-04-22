<div id = "topBar">
    <div id = "logo">
        <img src = "../../Imagenes/stucom_logo.png">
    </div>
    <div id = "navigation">
        <div>
            <a href = "../../Paginas/Cuenta/userProfile.php">
                <img src = "../../Imagenes/IconoUsuario.png">
            </a>
        </div>
        <div>
            <a href = "../../Paginas/MainLand/index.php">
                <img src = "../../Imagenes/Gps_icono.png">
            </a>
        </div>
        <div>
            <a href = "../../Paginas/PagosRealizados/VerifyPago.php">
                <img src = "../../Imagenes/IconoVerificarPago.png">
            </a>
        </div>
    </div>
    <div id = "botonesLogin">
        <?php printInfo($log,$nombre,$pass) ?> <!-- Print info del usuario/boton login -->
    </div>
    <div id = "settings">
        <a href = "Settings.php">
            <img src = "../../Imagenes/barras.png">
        </a>
    </div>
</div>