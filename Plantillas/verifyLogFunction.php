<?php 
/**
 * Verificar informacion
 * 
 * @param email $email
 * @param pass $pass
 * 
 * @return true si se compruevan los datos, si no false
 *   */ 
function verifyInfo($email,$pass) {

    include "DBConnect.php";
    $query = $dbcon -> prepare("SELECT pass FROM usuario WHERE email = '$email'");

    if ($query -> execute()) {

        $result = $query -> fetch(PDO::FETCH_ASSOC);

        if (password_verify($pass,$result["pass"])) {
            
            return true;

        } else {

            return false;

        }

    } else {

        return false;

    }

}

?>