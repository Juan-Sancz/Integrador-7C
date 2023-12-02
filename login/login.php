<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../CSS/registro-login.css">
    <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <title>Iniciar Sesión</title>
</head>
<body>
    <div id="login-container">
        <h2>Iniciar Sesión</h2>
        <form>
            <input type="text" id="log" name="log" placeholder="Nombre de usuario o correo">
            <input type="password" id="log_pass" name="log_pass" placeholder="Contraseña" autocomplete="off">
            <button type="button" id="enviar" name="enviar">Ingresar</button>
            <a href="register.php"><button type="button">Registro</button></a>
        </form>
        
    </div>
    <script src="../JS/login.js"></script>
</body>
</html>


