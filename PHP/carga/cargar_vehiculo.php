<?php
include("../connection.php");

// Recibir datos del formulario
$placa = $_POST['placa'];
$modelo = $_POST['modelo'];


// Realizar la inserción en la base de datos
$query = "INSERT INTO vehiculos (placa, modelo) VALUES ('$placa', '$modelo')";
$resultado = mysqli_query($con, $query);

// Devolver respuesta
if ($resultado) {
    $response = array("status" => "success", "message" => "Vehículo cargado exitosamente");
} else {
    $response = array("status" => "error", "message" => "Error al cargar el vehículo");
}

echo json_encode($response);
