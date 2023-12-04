<?php

    session_start();
    include ("PHP/connection.php");

    $sel = "SELECT * FROM recorridos WHERE 1";
    $query = mysqli_query($con,$sel);


?>

<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Integrador</title>

        <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
        <link rel="stylesheet" href="CSS/style.css">
    </head>
    <body>

        <header class="p-3 bg-dark text-white">
            <div class="container">
                <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
                    <a href="/" class="d-flex align-items-center mb-2 mb-lg-0 text-white text-decoration-none">
                    <svg class="bi me-2" width="40" height="32" role="img" aria-label="Bootstrap"><use xlink:href="#bootstrap"></use></svg>
                    </a>

                    <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
                    <li><a href="#" class="nav-link px-2 text-secondary">Home</a></li>
                    <li><a href="#" class="nav-link px-2 text-white">Features</a></li>
                    <li><a href="#" class="nav-link px-2 text-white">Pricing</a></li>
                    <li><a href="#" class="nav-link px-2 text-white">FAQs</a></li>
                    <li><a href="#" class="nav-link px-2 text-white">About</a></li>
                    </ul>

                    <form class="col-12 col-lg-auto mb-3 mb-lg-0 me-lg-3">
                    <input type="search" class="form-control form-control-dark" placeholder="Search..." aria-label="Search">
                    </form>

                    <div class="text-end">
                    <?php if(!isset($_SESSION["id"])){ ?><a href="login/login.php"><button type="button" class="btn btn-outline-light me-2">Inicia sesion</button></a> <?php } ?>
                    <?php if(!isset($_SESSION["id"])){ ?><a href="login/register.php"><button type="button" class="btn btn-warning">Registrate</button></a> <?php } ?>
                    <?php if(isset($_SESSION["id"])){ ?><a href="login/cerrar_sesion.php"><button type="button" class="btn btn-warning">Cerrar Sesion</button></a> <?php } ?>
                    </div>
                </div>
            </div>
        </header>

        <div class="main-content">
                <div class="row">
                    <?php while($res=mysqli_fetch_array($query)){ ?>
                            <div class="col">
                                <div class="card" style="width: 18rem;">
                                    <img src="..." class="card-img-top" alt="...">
                                    <div class="card-body">
                                        <h5 class="card-title"> <?php echo $res["localidad-inicio"]." - ".$res["localidad-fin"];?> </h5>
                                        <p class="card-text"> <?php if($res["cooperativa"]==1){ echo "CESOP";}else{ echo "COSYC";} ?></p>
                                        <?php if(isset($_SESSION["id"])){ ?>
                                        <form action="PHP/recorrido.php" method="POST">
                                            <input type="hidden" id="id" name="id" value="<?php echo $res["id"] ?>">
                                            <button type="submit" class="btn btn-primary">Danos tu opinion!</a>
                                        </form>
                                        <?php }else{ ?>
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