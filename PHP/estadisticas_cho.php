<?php

    include("connection.php");

    $id = $_POST["value_cho"];

    $contCho1 = 0;
    $contCho2 = 0;
    $contCho3 = 0;
    $contCho4 = 0;
    $contCho5 = 0;

    $cho = "SELECT * FROM cal_chofer WHERE id_chofer = '".$id."'";
    $queryCho = mysqli_query($con,$cho);


    while($resCho = mysqli_fetch_array($queryCho)){
        
        switch($resCho["calificacion"]){
            case 1: 
                $contCho1 = $contCho1 + 1;
            break;

            case 2: 
                $contCho2 = $contCho2 + 1;
            break;

            case 3: 
                $contCho3 = $contCho3 + 1;
            break;

            case 4: 
                $contCho4 = $contCho4 + 1;
            break;

            case 5: 
                $contCho5 = $contCho5 + 1;
            break;
        }

    }

    $choArray = array(

        "1" => $contCho1,
        "2" => $contCho2,
        "3" => $contCho3,
        "4" => $contCho4,
        "5" => $contCho5

    );

    echo json_encode($choArray);




?>