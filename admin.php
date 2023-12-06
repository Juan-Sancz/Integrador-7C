<?php

    session_start();

    if($_SESSION["admin"] == "1"){


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin</title>
    <?php include("PHP/head.php") ?>
    <link rel="stylesheet" href="CSS/admin.css">
</head>
<body>
    
    <?php include("PHP/header.php") ?>


    <div id="container">
        <div class="half" id="leftHalf">
            <div class="personal" onclick="redirect1()">
                <h1 class="centered-text"> Personal </h1>
            </div>
        </div>
        <div class="half" id="rightHalf">
            <div class="estadisticas" onclick="redirect2()">
                <h1 class="centered-text"> Estadisticas </h1>
            </div>
        </div>
    </div>

    <script>

        function redirect1(){
            window.location.href = "personal.php";
        }

        function redirect2(){
            window.location.href = "estadisticas.php";
        }

    </script>

</body>
</html>

<?php 

}else{

    header("location:index.php");

} 

?>
