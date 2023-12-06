<?php

session_start();

include("PHP/connection.php");

$veh = "SELECT * FROM vehiculos WHERE 1";
$queryVeh = mysqli_query($con, $veh);

$cho = "SELECT * FROM choferes WHERE 1";
$queryCho = mysqli_query($con, $cho);

$rec = "SELECT * FROM recorridos WHERE 1";
$queryRec = mysqli_query($con, $rec);

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
                        <th scope="col">Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    <?php while ($resVeh = mysqli_fetch_array($queryVeh)) { ?>
                        <tr class="tabla" data-id="<?php echo $resVeh["id"]; ?>" data-type="1">
                            <td><?php echo $resVeh["placa"] ?></td>
                            <td><?php echo $resVeh["modelo"] ?></td>
                            <td>
                                <button class="btn btn-primary editar-btn">Editar</button>
                                <button class="btn btn-danger eliminar-btn">Eliminar</button>
                            </td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>

        <!-- Lista de Choferes -->
        <div class="mb-5 border p-4 rounded bg-light">
            <h2> Lista de choferes </h2>
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th scope="col">Nombre</th>
                        <th scope="col">DNI</th>
                        <th scope="col">Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    <?php while ($resCho = mysqli_fetch_array($queryCho)) { ?>
                        <tr class="tabla" data-id="<?php echo $resCho["id"]; ?>" data-type="2">
                            <td><?php echo $resCho["nombre"] ?></td>
                            <td><?php echo $resCho["dni"] ?></td>
                            <td>
                                <button class="btn btn-primary editar-btn">Editar</button>
                                <button class="btn btn-danger eliminar-btn">Eliminar</button>
                            </td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>

        <!-- Lista de Recorridos -->
        <div class="mb-5 border p-4 rounded bg-light">
            <h2> Lista de recorridos </h2>
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th scope="col">Localidad inicio</th>
                        <th scope="col">Localidad fin</th>
                        <th scope="col">Cooperativa</th>
                        <th scope="col">Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    <?php while ($resRec = mysqli_fetch_array($queryRec)) { ?>
                        <tr class="tabla" data-id="<?php echo $resRec["id"]; ?>" data-type="3">
                            <td><?php echo $resRec["localidad_inicio"] ?></td>
                            <td><?php echo $resRec["localidad_fin"] ?></td>
                            <td><?php echo ($resRec["cooperativa"] == 1) ? "CESOP" : "COSYC"; ?></td>
                            <td>
                                <button class="btn btn-primary editar-btn">Editar</button>
                                <button class="btn btn-danger eliminar-btn">Eliminar</button>
                            </td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>

        <!-- Modal para editar choferes -->
        <div class="modal fade" id="modalChofer" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Editar Chofer</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <!-- Contenido del formulario de edición para choferes -->
                        <form id="formChofer">
                            <div class="mb-3">
                                <label for="nombreChofer" class="form-label">Nombre</label>
                                <input type="text" class="form-control" id="nombreChofer">
                            </div>
                            <div class="mb-3">
                                <label for="dniChofer" class="form-label">DNI</label>
                                <input type="text" class="form-control" id="dniChofer">
                            </div>
                            <!-- Otros campos específicos para choferes -->
                        </form>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                        <button type="button" class="btn btn-primary" id="updateChoferBtn">Actualizar</button>
                    </div>
                </div>
            </div>
        </div>

        <!-- Modal para editar recorridos -->
        <div class="modal fade" id="modalRecorrido" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Editar Recorrido</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <!-- Contenido del formulario de edición para recorridos -->
                        <form id="formRecorrido">
                            <div class="mb-3">
                                <label for="localidadInicio" class="form-label">Localidad Inicio</label>
                                <input type="text" class="form-control" id="localidadInicio" name="localidadInicio" >
                            </div>
                            <div class="mb-3">
                                <label for="localidadFin" class="form-label">Localidad Fin</label>
                                <input type="text" class="form-control" id="localidadFin" name="localidadFin" >
                            </div>
                            <div class="mb-3">
                                <label for="cooperativa" class="form-label">Cooperativa</label>
                                <select class="form-select" id="cooperativa" name="cooperativa">
                                    <option value="1">CESOP</option>
                                    <option value="0">COSYC</option>
                                </select>
                            </div>
                            <!-- Otros campos específicos para recorridos -->
                        </form>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                        <button type="button" class="btn btn-primary" id="updateRecorridoBtn">Actualizar</button>
                    </div>
                </div>
            </div>
        </div>


        <!-- Modal para editar vehículos -->
        <div class="modal fade" id="modalVehiculo" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Editar Vehículo</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <!-- Contenido del formulario de edición para vehículos -->
                        <form id="formVehiculo">
                            <div class="mb-3">
                                <label for="placa" class="form-label">Placa</label>
                                <input type="text" class="form-control" id="placa">
                            </div>
                            <div class="mb-3">
                                <label for="modelo" class="form-label">Modelo</label>
                                <input type="text" class="form-control" id="modelo">
                            </div>
                            <!-- Otros campos específicos para vehículos -->
                        </form>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                        <button type="button" class="btn btn-primary" id="updateVehiculoBtn">Actualizar</button>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <script src="JS/lista.js"></script>
</body>

</html>