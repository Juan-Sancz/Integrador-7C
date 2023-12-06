<header class="p-3 bg-dark text-white">
    <div class="container">
        <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
            <a href="/" class="d-flex align-items-center mb-2 mb-lg-0 text-white text-decoration-none">
                <svg class="bi me-2" width="40" height="32" role="img" aria-label="Bootstrap">
                    <use xlink:href="#bootstrap"></use>
                </svg>
            </a>

            <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
                <li><a href="./index.php" class="nav-link px-2 text-white"><h5>Inicio</a><h5></li>
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
                <?php if (isset($_SESSION["admin"])) {if($_SESSION["admin"] == "1"){ ?><a href="admin.php"><button type="button" class="btn btn-warning">Admin</button></a> <?php }} ?>
            </div>
        </div>
    </div>
</header>