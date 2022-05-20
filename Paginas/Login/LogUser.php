<?php 

session_start();
//Recibir de forms y enviar a logFunc y volver a userProfile
include "../../Plantillas/verifyLogFunction.php";
include "../../Plantillas/DBConnect.php";

if (!isset($_POST["submit"])) {
    header ("LOCATION: LogPage.php");
   
} /* else if ($_SESSION["email"] !== null && $_SESSION["pass"] !== null ) {
    header ("LOCATION: LogPage.php");
} Cambiar esto hacer que funciona */

$email = $_POST["email"];
$pass = $_POST["pass"];

if (verifyInfo($email,$pass)) {
    
    //$query = $dbcon -> prepare("SELECT pass FROM usuario WHERE email = '$email'");
    $query = $dbcon -> prepare("SELECT nombre,pass,email FROM usuario where email = '$email'");

    if ($query -> execute()) { // Si se ejecuta

        $result = $query -> fetch(PDO::FETCH_ASSOC);

        if ($result["pass"] == $pass) {

            $log = 1;
            $_SESSION["log"] = $log;
            $_SESSION["nombre"] = $result["nombre"];
            $_SESSION["pass"] = $result["pass"];
            $_SESSION["email"] = $result["email"];
            header("LOCATION: ../Cuenta/userProfile.php");

        } else {

            header("LOCATION: LogPage.php");
            $_SESSION["log"] = $log;
            $log = 0;

        }

    } else {

        header("LOCATION: LogPage.php");
        $_SESSION["log"] = $log;
        $log = 0;

    }


} else {

    header("LOCATION: LogPage.php");
    $_SESSION["log"] = $log;
    $log = 0;

}

?>