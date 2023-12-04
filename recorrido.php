<?php

    session_start();
    include ("PHP/connection.php");

    if(isset($_SESSION["id"])){

        $sel = "SELECT * FROM recorridos WHERE id = '".$_SESSION["id"]."'";
        $query = mysqli_query($con,$sel);
        $res = mysqli_fetch_array($query);

?>

        <!DOCTYPE html>
        <html lang="en">
            <head>
                <meta charset="UTF-8">
                <meta name="viewport" content="width=device-width, initial-scale=1.0">
                <title>Califica tu recorrido</title>

                <?php
                    include('PHP/head.php');
                ?>

            </head>
            <body>
                
            <?php
                include('PHP/header.php');
            ?>

                <div class="main-content">
                    <h2> <?php echo $res["localidad-inicio"]." - ".$res["localidad-fin"];?> </h2>

                    <div class="rating">
                        <input type="radio" name="rating" id="star1" onclick="rate(1)">
                        <label for="star1"></label>
                        <input type="radio" name="rating" id="star2" onclick="rate(2)">
                        <label for="star2"></label>
                        <input type="radio" name="rating" id="star3" onclick="rate(3)">
                        <label for="star3"></label>
                        <input type="radio" name="rating" id="star4" onclick="rate(4)">
                        <label for="star4"></label>
                        <input type="radio" name="rating" id="star5" onclick="rate(5)">
                        <label for="star5"></label>
                    </div>

                        <div id="result"></div>

                </div>

                <script src="JS/app.js"></script>
            </body>
        </html>

<?php 

    }else{
        header("Location: login/login.php");
    }

?>