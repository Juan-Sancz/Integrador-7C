<?php

    session_start();
    include ("PHP/connection.php");

    if(isset($_SESSION["id"])){

        $sel = "SELECT * FROM recorridos WHERE id = '".$_POST["id"]."'";
        $query = mysqli_query($con,$sel);
        $res = mysqli_fetch_array($query);

?>

        <!DOCTYPE html>
        <html lang="en">
            <head>
                <meta charset="UTF-8">
                <meta name="viewport" content="width=device-width, initial-scale=1.0">
                <title>Califica tu recorrido</title>

                <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
                <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
                <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
                <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
                <link rel="stylesheet" href="CSS/recorrido.css">

            </head>
            <body>
                
                <?php include("PHP/header.php") ?>

                <div class="main-content">
                    <div class="container mt-5">
                    <h2 class="reco"> <?php echo $res["localidad_inicio"]." - ".$res["localidad_fin"];?> </h2>

                    <input type="hidden" id="recorrido_id" value="<?php echo $res["id"] ?>">
                    <input type="hidden" id="usuario_id" value="<?php echo $_SESSION["id"] ?>">
                    <div class="mb-5 border p-4 rounded bg-light">
                        <h3> Califica tu vehiculo! </h3>
                        <div class="rating">
                            <h7 class="in">Insatisfecho</h7>
                            <input type="radio" name="rating" id="star1" onclick="rateV(1)">
                            <label for="star1"></label>
                            <input type="radio" name="rating" id="star2" onclick="rateV(2)">
                            <label for="star2"></label>
                            <input type="radio" name="rating" id="star3" onclick="rateV(3)">
                            <label for="star3"></label>
                            <input type="radio" name="rating" id="star4" onclick="rateV(4)">
                            <label for="star4"></label>
                            <input type="radio" name="rating" id="star5" onclick="rateV(5)">
                            <label for="star5"></label>
                            <h7 class="sat">Muy satisfecho</h7  >
                        </div>
                    </div>
                    <br>

                    <div class="mb-5 border p-4 rounded bg-light">
                        <h3> Califica tu conductor! </h3>
                        <div class="rating">
                            <h7 class="in">Insatisfecho</h7>
                            <input type="radio" name="ratingC" id="star1C" onclick="rateC(1)">
                            <label for="star1C"></label>
                            <input type="radio" name="ratingC" id="star2C" onclick="rateC(2)">
                            <label for="star2C"></label>
                            <input type="radio" name="ratingC" id="star3C" onclick="rateC(3)">
                            <label for="star3C"></label>
                            <input type="radio" name="ratingC" id="star4C" onclick="rateC(4)">
                            <label for="star4C"></label>
                            <input type="radio" name="ratingC" id="star5C" onclick="rateC(5)">
                            <label for="star5C"></label>
                            <h7 class="sat">Muy satisfecho</h7  >
                        </div>
                    </div>
                    <br>

                    <div class="mb-5 border p-4 rounded bg-light">
                        <h3> Califica tu recorrido! </h3>
                        <div class="rating">
                            <h7 class="in">Insatisfecho</h7>
                            <input type="radio" name="ratingR" id="star1R" onclick="rateR(1)">
                            <label for="star1R"></label>
                            <input type="radio" name="ratingR" id="star2R" onclick="rateR(2)">
                            <label for="star2R"></label>
                            <input type="radio" name="ratingR" id="star3R" onclick="rateR(3)">
                            <label for="star3R"></label>
                            <input type="radio" name="ratingR" id="star4R" onclick="rateR(4)">
                            <label for="star4R"></label>
                            <input type="radio" name="ratingR" id="star5R" onclick="rateR(5)">
                            <label for="star5R"></label>
                            <h7 class="sat">Muy satisfecho</h7  >
                        </div>
                    </div>
                </div>  
                </div>

                <script src="JS/app.js"></script>
            </body>
        </html>

<?php 

    }else{
        header("Location: ../login/login.php");
    }

?>