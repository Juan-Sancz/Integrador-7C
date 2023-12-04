<!DOCTYPE html>
<html lang="en">
<head>
    <?php /*TODO: Checkeo de Sesión*/ include('PHP/head.php'); ?>
</head>
<body>
    <?php /*TODO: Incluír carga en header si ISSET admin = 1. Crear SESSION admin. */ include('PHP/header.php'); ?>
    
    <div class="container mt-5">
        <h1 class="mb-4">Formulario de Carga</h1>
        
        <!-- Formulario de Vehículos -->
        <div id="formVehiculo" class="mb-5 border p-4 rounded bg-light">
            <h2>Cargar Vehículo</h2>
            <form id="formCargaVehiculo" enctype="multipart/form-data">
                <div class="mb-3">
                    <label for="placa" class="form-label">Placa:</label>
                    <input type="text" class="form-control" id="placa" name="placa" required>
                </div>
                <div class="mb-3">
                    <label for="modelo" class="form-label">Modelo:</label>
                    <input type="text" class="form-control" id="modelo" name="modelo" required>
                </div>
                <button type="submit" class="btn btn-primary">Cargar Vehículo</button>
            </form>
        </div>
        
        <!-- Formulario de Choferes -->
        <div id="formChofer" class="mb-5 border p-4 rounded bg-light">
            <h2>Cargar Chofer</h2>
            <form id="formCargaChofer">
                <div class="mb-3">
                    <label for="nombreChofer" class="form-label">Nombre:</label>
                    <input type="text" class="form-control" id="nombreChofer" name="nombreChofer" required>
                </div>
                <div class="mb-3">
                    <label for="dniChofer" class="form-label">DNI:</label>
                    <input type="text" class="form-control" id="dniChofer" name="dniChofer" required>
                </div>
                <button type="submit" class="btn btn-primary">Cargar Chofer</button>
            </form>
        </div>

        <!-- Formulario de Recorridos -->
        <div id="formRecorrido" class="mb-5 border p-4 rounded bg-light">
            <h2>Cargar Recorrido</h2>
            <form id="formCargaRecorrido">
                <div class="mb-3">
                    <label for="localidadInicio" class="form-label">Localidad de Inicio:</label>
                    <input type="text" class="form-control" id="localidadInicio" name="localidadInicio" required>
                </div>
                <div class="mb-3">
                    <label for="localidadFin" class="form-label">Localidad de Fin:</label>
                    <input type="text" class="form-control" id="localidadFin" name="localidadFin" required>
                </div>
                <div class="mb-3">
                    <label for="cooperativa" class="form-label">Cooperativa:</label>
                    <select class="form-select" id="cooperativa" name="cooperativa" required>
                        <option value="1">CESOP</option>
                        <option value="0">COSYC</option>
                    </select>
                </div>
                <button type="submit" class="btn btn-primary">Cargar Recorrido</button>
            </form>
        </div>
    </div>

    <script src="JS/carga.js"></script>
</body>
</html>