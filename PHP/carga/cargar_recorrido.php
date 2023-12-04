<?php
include("../connection.php");

// Recibir datos del formulario
$localidadInicio = $_POST['localidadInicio'];
$localidadFin = $_POST['localidadFin'];
$cooperativa = $_POST['cooperativa'];

// Realizar la inserción en la base de datos
$query = "INSERT INTO recorridos (localidad_inicio, localidad_fin, cooperativa) VALUES ('$localidadInicio', '$localidadFin', '$cooperativa')";
$resultado = mysqli_query($con, $query);

// Devolver respuesta
if ($resultado) {
    $response = array("status" => "success", "message" => "Recorrido cargado exitosamente");
} else {
    $response = array("status" => "error", "message" => "Error al cargar el recorrido");
}

echo json_encode($response);
?>
