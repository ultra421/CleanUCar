<?php

function verifyInfo($nombre,$pass) {

    if (isset($nombre) && isset($pass)) { // valores no null

        $mysqli = new mysqli("localhost:3306","root","","transversal");

        if ($mysqli -> connect_errno) {

            echo "Failed to connect: " . $mysqli->connect_error;

            return false;

        } else {

            //echo "Yes connection </br>";

        }

        $sql = "SELECT pass FROM usuarios where nombre = '$nombre';";

        $result = $mysqli -> query($sql) -> fetch_assoc()["pass"]; // Result = password

        //echo $result;

        if ($pass == $result) {

            $mysqli->close();
            return true;

            //echo "Sesion iniciada";

        } else {

            return false;
                
            header("Location: test3_login.php");

        }

    } else {

        return false;

    }

}

?>