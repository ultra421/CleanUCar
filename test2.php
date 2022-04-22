<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method = POST>
        <input type = text name = nombre required>
        <input type = number name = edad required>
        <input type = text name = clase required>
        <input type = submit>
    </form>
</body>
</html>

<?php

$mysqli = new mysqli("localhost:3306","root","","testing1");

if ($mysqli -> connect_errno) {

    echo "Failed to connect: " . $mysqli->connect_error;

} else {

    echo "in? </br>";

}

$sql = "SELECT * from alumno";

$insert = "INSERT INTO alumno (Nombre,Edad,Clase) VALUES ('Antonio',125,'2F')";

if ($mysqli ->query($insert) == true) {

    echo "insert exito";

} else {

    echo "no exito: " . $mysqli -> error . "</br>";

}

$result = $mysqli->query($sql);

while($row = $result->fetch_assoc()){  // Devuelve array con claves con el nombre de los campos, devuelve false si no quedan mas?

    echo $row["ID"] . " - ";
    echo $row["Nombre"]. " - ";
    echo $row["Edad"]. " - ";
    echo $row["Clase"]. "</br>";

}

$result->free_result(); // Liberar memoria
$mysqli->close(); // Cerrar conexion con BD
