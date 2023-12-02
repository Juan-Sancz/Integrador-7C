<?php 

    session_start();
    include("../PHP/connection.php");

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {

        if(isset($_POST["log"])){
            $log=$_POST["log"];
            $log_pass=$_POST["log_pass"];

            $sel = "SELECT * FROM usuarios WHERE username = '".$log."' OR email = '".$log."' AND password = '".$log_pass."'";
            $querySel = mysqli_query($con,$sel);

            if($querySel){
                echo "hola";
                $res = mysqli_fetch_array($querySel);
                $_SESSION["id"] = $res["id"];
                $_SESSION["username"] = $res["username"];
                
                }else{
                    $_SESSION["username"] = "error";
                }
            }else{
                echo "chau";
            }
        }


?>