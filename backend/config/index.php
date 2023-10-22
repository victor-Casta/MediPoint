<?php
    require_once "./database.php";

    $sql = "SELECT * FROM servicios";
    $result = $conection -> query($sql);
?>