<?php

session_start();
include("PHP/connection.php");

$sel = "SELECT * FROM recorridos WHERE 1";
$query = mysqli_query($con, $sel);


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

    <div class="main-content">
        <div class="row">
            <?php while ($res = mysqli_fetch_array($query)) { ?>
                <div class="col">
                    <div class="card" style="width: 18rem;">
                        <img src="..." class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title"> <?php echo $res["localidad-inicio"] . " - " . $res["localidad-fin"]; ?> </h5>
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

    <!--<script src="JS/app.js"></script>->

    </body>
</html>