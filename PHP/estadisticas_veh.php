<?php

    include("connection.php");

    $id = $_POST["value_veh"];

    $contVeh1 = 0;
    $contVeh2 = 0;
    $contVeh3 = 0;
    $contVeh4 = 0;
    $contVeh5 = 0;

    $veh = "SELECT * FROM cal_vehiculo  WHERE id_vehiculo = '".$id."'";
    $queryVeh = mysqli_query($con,$veh);



    while($resVeh = mysqli_fetch_array($queryVeh)){
        
        switch($resVeh["calificacion"]){
            case '1': 
                $contVeh1 = $contVeh1 + 1;
            break;

            case 2: 
                $contVeh2 = $contVeh2 + 1;
            break;

            case '3': 
                $contVeh3 = $contVeh3 + 1;
            break;

            case '4': 
                $contVeh4 = $contVeh4 + 1;
            break;

            case '5': 
                $contVeh5 = $contVeh5 + 1;
            break;
        }

    }

    $vehArray = array(

        "1" => $contVeh1,
        "2" => $contVeh2,
        "3" => $contVeh3,
        "4" => $contVeh4,
        "5" => $contVeh5

    );

    echo json_encode($vehArray);




?>