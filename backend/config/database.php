<?php
    $serverName = "localhost";
    $userName = "root";
    $password = "";
    $database = "medipoint";

    $conection = new mysqli($serverName, $userName, $password, $database);

    if($conection -> connect_error) {
        die("Error de la conexion" . $conection ->connect_error);
    }
?>