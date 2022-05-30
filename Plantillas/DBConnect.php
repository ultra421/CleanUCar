<?php 
try {
    $user = "root";
    $password = "";
    $dataName = "mysql:host=localhost;port=3306;dbname=transversal_v2";
    $dbcon = new PDO($dataName,$user,$password);

} catch (PDOException $e){echo $e -> getMessage();}
?>