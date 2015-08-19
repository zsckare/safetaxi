<?php
    
    header('Content-type: application/json; charset=utf-8');
    header("Access-Control-Allow-Origin: *");
    
    $servicio_array = array();


    foreach ($values as $row) {
        $id_servicio=$row['id_servico'];
        $id_cliente=$row['id_cliente'];
        $disponible=$row['disponible'];
        $servicio_array[]= array('id_servicio' => $id_servicio, 'disponible' => $disponible, 'id_cliente'=>$id_cliente);
    }
    $services = array('services' => $servicio_array );
    $json =json_encode($services);
    echo $json;


?>