<?php
include("../connection.php");

// Recibir datos del formulario
$nombreChofer = $_POST['nombreChofer'];
$dniChofer = $_POST['dniChofer'];

// Realizar la inserción en la base de datos
$query = "INSERT INTO choferes (nombre, dni) VALUES ('$nombreChofer', '$dniChofer')";
$resultado = mysqli_query($con, $query);

// Devolver respuesta
if ($resultado) {
    $response = array("status" => "success", "message" => "Chofer cargado exitosamente");
} else {
    $response = array("status" => "error", "message" => "Error al cargar el chofer");
}

echo json_encode($response);
?>
