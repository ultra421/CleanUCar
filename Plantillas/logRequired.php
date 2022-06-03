<?php
include "verifyLogFunction.php";
if (isset($_SESSION["email"]) && isset($_SESSION["pass"])) {

    if (!verifyInfo($_SESSION["email"],$_SESSION["pass"])) {

        session_unset();
        header("Location: ../Login/LogPage.php");

    }
} else {
    header("Location: ../Login/LogPage.php");
}

?>