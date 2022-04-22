<?php
function printInfo ($log,$nombre,$pass) {
    if (($nombre != "null") && ($pass != "null")) {
        if ($log == 1) { ?>
            <a href = "userProfile.php">
                <h2><?php echo $nombre; ?></h2>
            </a>
            <?php 
        } else { ?>
            <a href = "../Login/LogPage.php">
                <h2>Login</h2>
            </a>
            <?php
        } 
    } else {
        ?>
        <a href = "../Login/LogPage.php">
                <h2>Login</h2>
        </a>
        <?php
    }
}
?>
