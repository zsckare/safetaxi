<?php
    
    header('Content-type: application/json; charset=utf-8');
    header("Access-Control-Allow-Origin: *");
    
    $servicio_array = array();


    foreach ($values as $row) {
        $id_servicio=$row['id_servico'];
        $id_cliente=$row['id_cliente'];
        $disponible=$row['disponible'];
        $id_driver=$row['id_driver'];
        $dirfisica=$row['dirfisica'];
        $servicio_array[]= array('id_servicio' => $id_servicio, 'disponible' => $disponible, 'id_cliente'=>$id_cliente, 'id_driver' => $id_driver, 'dirfisica'=> $dirfisica);
    }
    $services = array('services' => $servicio_array );
    $json =json_encode($services);
    echo $json;


?>