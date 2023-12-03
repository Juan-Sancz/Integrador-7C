<?php 

    session_start();
    include("../PHP/connection.php");

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {

        if(isset($_POST["log"])){
            $log=$_POST["log"];
            $log_pass=$_POST["log_pass"];

            $sel = "SELECT * FROM usuarios WHERE (username = '".$log."' OR email = '".$log."') AND password = '".$log_pass."'";
            $querySel = mysqli_query($con,$sel);
            $res = mysqli_fetch_array($querySel);


            if(isset($res["id"])){
                $response = array("status" => "success", "message" => "Sesion inciada!");
                echo json_encode($response);
                $_SESSION["id"] = $res["id"];
                $_SESSION["username"] = $res["username"];
                
            }else{
                $response = array("status" => "error", "message" => "Inicio de sesion fallido. Porfavor intente otra vez.");
                echo json_encode($response);
            }
        }
    }


?>