<?php
require_once '../config/database.php';
header("Access-Control-Allow-Origin: http://localhost:4321");
header("Access-Control-Allow-Headers: Content-Type");
header("Access-Control-Allow-Methods: POST, OPTIONS");

$epsData = $_POST['eps'];
$servicioData = $_POST['servicio'];

// Mapeo de servicios a números
$servicesMapping = [
    'adultos' => 101,
    'pediatria' => 102,
    'odontologia' => 103
];

// Verifica si el servicio está en el mapeo
if (!isset($servicesMapping[$servicioData])) {
    echo json_encode(['error' => 'Servicio no válido']);
} else {
    $servicioNumerico = $servicesMapping[$servicioData];

    // Realiza una consulta a la base de datos con los datos recibidos
    $sql = "SELECT * FROM centros_medicos WHERE eps_centromed = '$epsData' AND id_ser = $servicioNumerico";
    $result = $conection->query($sql);

    if ($result && $result->num_rows > 0) {
        $data = $result->fetch_all(MYSQLI_ASSOC);   

        // Crea un objeto o arreglo asociativo para almacenar los datos
        $response = [
            'eps' => $epsData,
            'servicio' => $servicioNumerico,
            'data' => $data
        ];
    } else {
        $response = ['error' => 'No se encontraron resultados'];
    }

    // Establecer el encabezado JSON
    header("Content-Type: application/json");

    // Devolver los datos en formato JSON
    echo json_encode($response);
}
?>
