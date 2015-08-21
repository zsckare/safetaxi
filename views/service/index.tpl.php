<?php
    
    header('Content-type: application/json; charset=utf-8');
    header("Access-Control-Allow-Origin: *");
    
    $servicio_array = array();


    foreach ($services as $row) {
        $id_servicio=$row['id_servico'];
        $disponible=$row['disponible'];
        $latitud=$row['latitud'];
        $longitud=$row['longitud'];
        $dirfisica=$row['dirfisica'];
        $servicio_array[]= array('id_servicio' => $id_servicio, 'disponible' => $disponible, "latitud"=>$latitud, "longitud"=>$longitud, 'dirfisica'=>$dirfisica);
    }
    $services = array('services' => $servicio_array );
    $json =json_encode($services);
    echo $json;


?>