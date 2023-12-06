<?php
session_start();

include("PHP/connection.php");

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    // Obtener datos del formulario AJAX
    $id = $_POST["id"];
    $type = $_POST["type"];

    // Lógica para manejar diferentes tipos de entidades
    switch ($type) {
        case 1: // Vehículo
            // Recuperar datos específicos para vehículos (ajusta según tu estructura de base de datos)
            $placa = $_POST["placa"];
            $modelo = $_POST["modelo"];

            // Actualizar la base de datos (ejemplo)
            $updateQuery = "UPDATE vehiculos SET placa = '$placa', modelo = '$modelo' WHERE id = $id";
            mysqli_query($con, $updateQuery);
            break;

        case 2: // Chofer
            // Recuperar datos específicos para choferes (ajusta según tu estructura de base de datos)
            $nombreChofer = $_POST["nombreChofer"];
            $dniChofer = $_POST["dniChofer"];

            // Actualizar la base de datos (ejemplo)
            $updateQuery = "UPDATE choferes SET nombre = '$nombreChofer', dni = '$dniChofer' WHERE id = $id";
            mysqli_query($con, $updateQuery);
            break;

        case 3: // Recorrido
            // Recuperar datos específicos para recorridos (ajusta según tu estructura de base de datos)
            $localidadInicio = $_POST["localidadInicio"];
            $localidadFin = $_POST["localidadFin"];
            $cooperativa = $_POST["cooperativa"];

            // Actualizar la base de datos (ejemplo)
            $updateQuery = "UPDATE recorridos SET localidad_inicio = '$localidadInicio', localidad_fin = '$localidadFin', cooperativa = $cooperativa WHERE id = $id";
            mysqli_query($con, $updateQuery);
            break;

        default:
            // Tipo no reconocido
            echo json_encode(["error" => "Tipo de entidad no reconocido"]);
            exit;
    }

    // Puedes devolver una respuesta exitosa si es necesario
    echo json_encode(["success" => true]);
} else {
    // Si la solicitud no es de tipo POST, devolver un error
    echo json_encode(["error" => "Método de solicitud no válido"]);
}
?>
