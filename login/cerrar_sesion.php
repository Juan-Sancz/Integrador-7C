<?php

    session_start();
    $_SESSION["id"] = null;
    $_SESSION["username"] = null; 
    session_destroy();

    header("location:../index.php");

?>