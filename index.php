<?php

session_start();
include("PHP/connection.php");

$sel = "SELECT * FROM recorridos WHERE 1";
$query = mysqli_query($con, $sel);

$sel2 = "SELECT * FROM choferes WHERE 1";
$query2 = mysqli_query($con, $sel2);

$sel3 = "SELECT * FROM vehiculos WHERE 1";
$query3 = mysqli_query($con, $sel3);


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Integrador</title>

    <?php
    include('PHP/head.php');
    ?>
</head>

<body>

    <?php
    include('PHP/header.php');
    ?>

    <div id="main-content" class="main-content">
        <div id="recorridos" name="recorridos">
            <div class="row">
                <?php while ($res = mysqli_fetch_array($query)) { ?>
                    <div class="col">
                        <div class="card" style="width: 18rem;">
                            <img src=" <?php if ($res["cooperativa"] == 1) { echo "images/cesop.jpg";}else{ echo "images/cosyc.jpeg";}?>" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title"> <?php echo $res["localidad_inicio"] . " - " . $res["localidad_fin"]; ?> </h5>
                                <p class="card-text"> <?php if ($res["cooperativa"] == 1) {
                                                            echo "CESOP";
                                                        } else {
                                                            echo "COSYC";
                                                        } ?></p>
                                <?php if (isset($_SESSION["id"])) { ?>
                                    <form action="recorrido.php" method="POST">
                                        <input type="hidden" id="id" name="id" value="<?php echo $res["id"] ?>">
                                        <button type="submit" class="btn btn-primary">Danos tu opinion!</a>
                                    </form>
                                <?php } else { ?>
                                    <a href="login/login.php"><button class="btn btn-primary"> Inicia sesion para compartir tu opinon! </button></a>
                                <?php } ?>
                            </div>
                        </div>
                    </div>
                <?php } ?>

            </div>
        </div>

    </div>

    <!--<script src="JS/app.js"></script>->

    </body>
</html>