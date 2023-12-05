<?php

    session_start();

    if($_SESSION["admin"] == "1"){


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin</title>
    <?php include("PHP/head.php") ?>
</head>
<body>
    
    <?php include("PHP/header.php") ?>


    <a href="personal.php"><button type="button" class="btn btn-warning">Personal</button></a>
    <a href="admin.php"><button type="button" class="btn btn-warning">Estadisticas</button></a>

</body>
</html>

<?php 

}else{

    header("location:index.php");

} 

?>
