<?php 

if (!(isset($_GET["register"])) && !(isset($_GET["login"]))) {

    header("Location: test3_login.php");

}

$mysqli = new mysqli("localhost:3306","root","","transversal");

    if ($mysqli -> connect_errno) {

        echo "Failed to connect: " . $mysqli->connect_error;
    
    } else {
    
        echo "Yes connection </br>";
    
    }
    
    $nombre = $_GET["username"];
    $pass = $_GET["password"];
    
    if (isset($_GET["register"])) {

        echo " </br> in register </br>";

        $sql = "SELECT nombre from usuarios";

        $result = $mysqli -> query($sql); // Query de username

        while ($row = $result -> fetch_assoc()) {

            if ($row["nombre"] == $nombre) {

                $nameExist = 1;
                break;

            }

        }

        // Confirm pass, si nombre ya existe no seguir

        if (!isset($nameExist) && strlen($pass) > 7 && strlen($pass) < 20 // Long-7and20
            &&preg_match('`[A-Z]`',$pass) // Mayus 
            && preg_match('`[a-z]`',$pass) // Mins
            && preg_match('`[0-9]`',$pass)) { // Num (Fin de condicion)

            echo "pass valida </br>";

            $insert = "INSERT INTO usuarios (nombre,pass) VALUES ('$nombre','$pass')";

            if ($mysqli ->query($insert) == true) {

                echo "insert exito </br>";
                $nombreRegister = $mysqli -> query("SELECT nombre from usuarios where nombre = '$nombre'") -> fetch_assoc()["nombre"];
                echo $nombreRegister . " registrado!";
                
            } else {
                
                echo "no exito: " . $mysqli -> error . "</br>";
                
            }

        } else if (isset($nameExist) == 1) {

           //echo "Ese nombre ya esta ocupado";

        } else {

            //echo "Error de contraseña";

        }

    }

    if (isset($_GET["login"])) {

        $sql = "SELECT pass FROM usuarios where nombre = '$nombre';";

        $result = $mysqli -> query($sql) -> fetch_assoc()["pass"]; // Result = password

        echo $result;

        if ($pass == $result) {

            echo "Sesion iniciada";

        } else {

            echo "Usuario o contraseña incorrecta";
            
            header("Location: test3_login.php");

        }

    }

    //$result->free_result(); // Liberar memoria
    $mysqli->close(); // Cerrar conexion con BD
    

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <a href = "test3_login.php">Volver login</a>
    <a href = "test3_register.php">Volver Register</a>
</body>
</html>