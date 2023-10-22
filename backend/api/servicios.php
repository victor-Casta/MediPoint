<?php 
require_once '../config/database.php';


if ($_SERVER['REQUEST_METHOD'] === 'GET') {
    // Utiliza las variables en la consulta SQL
    $sql = "SELECT * FROM centros_medicos WHERE eps_centromed = 'Sura' AND id_ser = 102";
    $result = $conection->query($sql);

    $data = array();

    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            $data[] = $row;
        }
    }

    header('Content-Type: application/json');
    echo json_encode($data);
}

?>
