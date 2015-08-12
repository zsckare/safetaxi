<?php
    
    header('Content-type: application/json; charset=utf-8');
    header("Access-Control-Allow-Origin: *");
    
    $servicio_array = array();


    foreach ($services as $row) {
        $id_servicio=$row['id_servico'];
        $disponible=$row['disponible'];
        $servicio_array[]= array('id_servicio' => $id_servicio, 'disponible' => $disponible);
    }
    $services = array('services' => $servicio_array );
    $json =json_encode($services);
    echo $json;


?>