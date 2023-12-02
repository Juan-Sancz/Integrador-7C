<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="../CSS/registro-login.css">
        <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
        <title>Registro de Sesión</title>
    </head>
    <body>
        <div id="register-form">
            <h2>Registro de Sesión</h2>
            <form>
                <input type="text"  id="username" name="username" placeholder="Nombre de usuario"> <br><br>
                <input type="text"  id="email" name="email" placeholder="Correo electrónico"> <br><br>
                <input type="password"  id="password" name="password" placeholder="Contraseña" autocomplete="off"> <br><br>
                <button type="button" name="enviar" id="enviar">Enviar</button>
                <a href="login.php"><button type="button">Login</button></a>
            </form>
            
        </div>
        <script src="../JS/register.js"></script>
    </body>
</html>
