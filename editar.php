<?php

    session_start();
    include("PHP/connection.php");

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {

        if(isset($_POST["id"])){

            $id = $_POST["id"];
            $type = $_POST["type"];

            echo $id;
            echo $type;

        }
    }

?>
