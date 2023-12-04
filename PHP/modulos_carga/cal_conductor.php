<?php

    session_start();
    include("../connection.php");

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {

        if(isset($_POST["value"])){

            $calificacion = $_POST["value"];
            $recorrido_id = $_POST["recorrido_id"];
            $usuario_id = $_POST["usuario_id"];

            $cal = "INSERT INTO cal_chofer (calificacion, id_recorrido, id_usuario) VALUES ('".$calificacion."','".$recorrido_id."', '".$usuario_id."')";
            $query = mysqli_query($con, $cal);

        }
    }

?>