<?php

    session_start();
    include("../connection.php");

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {

        if(isset($_POST["value"])){

            echo $_POST["value"];

        }
    }

?>