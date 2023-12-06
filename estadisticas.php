<?php

    session_start();

    include("PHP/connection.php");

    $veh = "SELECT * FROM vehiculos WHERE 1";
    $queryVeh = mysqli_query($con,$veh);

    $cho = "SELECT * FROM choferes WHERE 1";
    $queryCho = mysqli_query($con,$cho);

    $rec = "SELECT * FROM recorridos WHERE 1";
    $queryRec = mysqli_query($con,$rec);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <?php /*TODO: Checkeo de Sesión*/ include('PHP/head.php'); ?>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

</head>
<body>
    <?php /*TODO: Incluír carga en header si ISSET admin = 1. Crear SESSION admin. */ include('PHP/header.php'); ?>
    <div class="container mt-5">
        <h1 class="mb-4">Estadisticas</h1>

        <div class="stats-buttons">

            <div class="select">
                <h2> Selecciona un vehiculo </h2> 
                <select id="select_veh" class="form-select">
                    <?php while($resVeh = mysqli_fetch_array($queryVeh)){ ?>
                        <option value="<?php echo $resVeh["id"];?>"><?php echo $resVeh["placa"]; ?>
                    <?php } ?>
                </select>

                <button type="button" class="btn btn-primary" id="boton_veh"> Calcular vehiculo </button>
            </div>
            <div class="select">
                <h2> Selecciona un chofer </h2> 
                <select id="select_cho" class="form-select">
                    <?php while($resCho = mysqli_fetch_array($queryCho)){ ?>
                        <option value="<?php echo $resCho["id"];?>"><?php echo $resCho["dni"]; ?>
                    <?php } ?>
                </select>

                <button type="button" class="btn btn-primary" id="boton_cho"> Calcular chofere </button>
            </div>
            <div class="select">
                <h2> Selecciona un recorrido </h2> 
                <select id="select_rec" class="form-select">
                    <?php while($resRec = mysqli_fetch_array($queryRec)){ ?>
                        <option value="<?php echo $resRec["id"];?>"><?php echo $resRec["localidad_inicio"]."-".$resRec["localidad_fin"]; ?>
                    <?php } ?>
                </select>

                <button type="button" class="btn btn-primary" id="boton_rec"> Calcular recorrido </button>
            </div>
        </div>
        
        <!-- Lista de Vehículos -->
        <div class="mb-5 border p-4 rounded bg-light">
                <h2 id="titulo_stats"></h2>
                <div class="chart-container">
                    <canvas id="myPieChart" width="200" height="200"></canvas>
                </div>
            </div>

        <div class="mb-5 border p-4 rounded bg-light">
            <canvas id="barChart" width="400" height="200"></canvas>
        </div>
        
    </div>

    <script src="JS/estadisticas.js"></script>
</body>
</html>

