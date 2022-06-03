<?php 

session_start();
//Recibir de forms y enviar a logFunc y volver a userProfile
include "../../Plantillas/verifyLogFunction.php";
include "../../Plantillas/DBConnect.php";

if (!isset($_POST["submit"])) {
    //header ("LOCATION: LogPage.php");
   
}

$email = $_POST["email"];
$pass = $_POST["pass"];

if (verifyInfo($email,$pass)) {
    
    //$query = $dbcon -> prepare("SELECT pass FROM usuario WHERE email = '$email'");
    $query = $dbcon -> prepare("SELECT nombre,pass,email,usuario_id FROM usuario where email = '$email'");

    if ($query -> execute()) { // Si se ejecuta

        $result = $query -> fetch(PDO::FETCH_ASSOC);

        if (password_verify($pass,$result["pass"])) {

            $log = 1;
            $_SESSION["log"] = $log;
            $_SESSION["nombre"] = $result["nombre"];
            $_SESSION["pass"] = $_POST["pass"];
            $_SESSION["email"] = $result["email"];
            $_SESSION["userID"] = $result["usuario_id"];
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