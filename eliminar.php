<?php
session_start();
include("PHP/connection.php");

// Verificar si se recibieron los datos esperados
if (isset($_POST['id']) && isset($_POST['type'])) {
    $id = $_POST['id'];
    $type = $_POST['type'];

    // Lógica para eliminar la entidad según el tipo
    switch ($type) {
        case 1: // Vehículo
            $query = "DELETE FROM vehiculos WHERE id = $id";
            break;
        case 2: // Chofer
            $query = "DELETE FROM choferes WHERE id = $id";
            break;
        case 3: // Recorrido
            $query = "DELETE FROM recorridos WHERE id = $id";
            break;
        // Agregar más casos según otros tipos de entidad si es necesario
        default:
            $query = "";
            break;
    }

    if (!empty($query)) {
        $result = mysqli_query($con, $query);

        // Verificar si la eliminación fue exitosa
        if ($result) {
            echo json_encode(['success' => true]);
            exit;
        }
    }
}

// Si llegamos aquí, hubo un error en la eliminación
echo json_encode(['success' => false]);
?>
