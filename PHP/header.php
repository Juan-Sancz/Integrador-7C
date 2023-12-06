<header class="p-3 bg-dark text-white">
    <div class="container">
        <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">

            <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
                <li><a href="./index.php" class="nav-link px-2 text-white"><h5>Inicio</h5></a></li>
                <?php if (isset($_SESSION["admin"]) && $_SESSION["admin"] == "1") { ?>
                    <li><a href="./personal.php" class="nav-link px-2 text-white"><h5>Personal</h5></a></li>
                    <li><a href="./carga.php" class="nav-link px-2 text-white"><h5>Carga</h5></a></li>
                    <li><a href="./estadisticas.php" class="nav-link px-2 text-white"><h5>Estadísticas</h5></a></li>
                <?php } ?>
            </ul>

            <form class="col-12 col-lg-auto mb-3 mb-lg-0 me-lg-3">
                <div>
                    <?php if (isset($_SESSION["id"])) { ?> <h5><span class="badge bg-secondary"><?php echo $_SESSION["username"] ?></span> <h5><?php } ?>
                </div>
            </form>

            <div class="text-end">
                <?php if (!isset($_SESSION["id"])) { ?><a href="login/login.php"><button type="button" class="btn btn-outline-light me-2">Inicia sesion</button></a> <?php } ?>
                <?php if (!isset($_SESSION["id"])) { ?><a href="login/register.php"><button type="button" class="btn btn-warning">Registrate</button></a> <?php } ?>
                <?php if (isset($_SESSION["id"])) { ?><a href="login/cerrar_sesion.php"><button type="button" class="btn btn-warning">Cerrar Sesion</button></a> <?php } ?>
            </div>
        </div>
    </div>
</header>
