<?php 

    session_start();
    include("../PHP/connection.php");

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {

        if(isset($_POST["username"])){
            $username=$_POST["username"];
            $email=$_POST["email"];
            $password=$_POST["password"];

            $check = "SELECT * FROM usuarios WHERE username = '".$username."' OR email = '".$email."'";
            $queryCheck = mysqli_query($con,$check);
            $resCheck = mysqli_fetch_array($queryCheck);

                if(isset($resCheck["id"])){

                    $response = array("status" => "error", "message" => "Registro fallido. Porfavor intente otra vez.");
                    echo json_encode($response);
                
            }else{

                $sql = "INSERT INTO usuarios (username, password, email) VALUES ('".$username."','".$password."','".$email."')";
                $query = mysqli_query($con,$sql);


                if($query){
                    $response = array("status" => "success", "message" => "Registro exitoso!");
                    echo json_encode($response);
                    $sel = "SELECT * FROM usuarios WHERE username = '".$username."' AND password = '".$password."' AND email = '".$email."'";
                    $querySel = mysqli_query($con,$sel);
                    if($querySel){
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

        }

    }

?>