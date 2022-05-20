<?php
include "verifyLogFunction.php";
if (isset($_SESSION["email"]) && isset($_SESSION["pass"])) {

    if (!verifyInfo($_SESSION["email"],$_SESSION["pass"])) {

        header("Location: ../Login/LogPage.php");
        session_unset();

    }
} else {
    header("Location: ../Login/LogPage.php");
}

?>