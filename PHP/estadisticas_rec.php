<?php

    include("connection.php");

    $id = $_POST["value_rec"];

    $contRec1 = 0;
    $contRec2 = 0;
    $contRec3 = 0;
    $contRec4 = 0;
    $contRec5 = 0;

    $rec = "SELECT * FROM cal_recorrido WHERE id_recorrido = '".$id."'";
    $queryRec = mysqli_query($con,$rec);


    while($resRec = mysqli_fetch_array($queryRec)){
        
        switch($resRec["calificacion"]){
            case 1: 
                $contRec1 = $contRec1 + 1;
            break;

            case 2: 
                $contRec2 = $contRec2 + 1;
            break;

            case 3: 
                $contRec3 = $contRec3 + 1;
            break;

            case 4: 
                $contRec4 = $contRec4 + 1;
            break;

            case 5: 
                $contRec5 = $contRec5 + 1;
            break;
        }

    }

    $recArray = array(

        "1" => $contRec1,
        "2" => $contRec2,
        "3" => $contRec3,
        "4" => $contRec4,
        "5" => $contRec5

    );

    echo json_encode($recArray);




?>