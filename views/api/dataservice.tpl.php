<?php
    
    header('Content-type: application/json; charset=utf-8');
    header("Access-Control-Allow-Origin: *");
    
    $servicio_array = array();


    foreach ($values as $row) {
        $id_servicio=$row['id_servico'];
        $dirfisica=$row['dirfisica'];
        $ref=$row['referencias'];
        $servicio_array[]= array('id_servicio' => $id_servicio, 'referencias' => $ref, 'dirfisica'=> $dirfisica);
    }
    $services = array('services' => $servicio_array );
    $json =json_encode($services);
    echo $json;


?>