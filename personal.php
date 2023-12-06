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
</head>
<body>
    <?php /*TODO: Incluír carga en header si ISSET admin = 1. Crear SESSION admin. */ include('PHP/header.php'); ?>
    
    <div class="container mt-5">
        <h1 class="mb-4">Personal activo</h1>
        
        <!-- Lista de Vehículos -->
        <div class="mb-5 border p-4 rounded bg-light">
            <h2> Lista de vehiculos </h2>
            <table class="table table-hover">
                <thead>
                    <tr>
                    <th scope="col">Placa</th>
                    <th scope="col">Modelo</th>
                    <th scope="col">Capacidad  de pasajeros</th>
                    </tr>
                </thead>
                <tbody>
                    <?php while($resVeh = mysqli_fetch_array($queryVeh)){ ?>
                        <tr id="tabla" onclick="tipo(1)" value="<?php echo $resVeh["id"]; ?>">
                            <td><?php echo $resVeh["placa"] ?></td>
                            <td><?php echo $resVeh["modelo"] ?></td>
                            <td><?php echo $resVeh["capacidad_pasajeros"] ?></td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
        <div class="mb-5 border p-4 rounded bg-light">
            <h2> Lista de choferes </h2>
            <table class="table table-hover">
                <thead>
                    <tr>
                    <th scope="col">Nombre</th>
                    <th scope="col">DNI</th>
                    </tr>
                </thead>
                <tbody>
                    <?php while($resCho = mysqli_fetch_array($queryCho)){ ?>
                        <tr id="tabla" onclick="tipo(2)" value="<?php echo $resCho["id"]; ?>">
                            <td><?php echo $resCho["nombre"] ?></td>
                            <td><?php echo $resCho["dni"] ?></td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
        <div class="mb-5 border p-4 rounded bg-light">
            <h2> Lista de recorridos </h2>
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th scope="col">Localidad inicio</th>
                        <th scope="col">Localidad fin</th>
                        <th scope="col">Cooperativa</th>
                    </tr>
                </thead>
                <tbody>
                    <?php while($resRec = mysqli_fetch_array($queryRec)){ ?>
                        <tr id="tabla" onclick="tipo(3)" value="<?php echo $resRec["id"]; ?>">
                            <td><?php echo $resRec["localidad_inicio"] ?></td>
                            <td><?php echo $resRec["localidad_fin"] ?></td>
                            <td><?php if($resRec["cooperativa"] == 1){
                                echo "CESOP";
                            }else{
                                echo "COSYC";
                            } ?></td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
        
    </div>

    <script src="JS/lista.js"></script>
</body>
</html>

