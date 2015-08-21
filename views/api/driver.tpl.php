<?php
    
    header('Content-type: application/json; charset=utf-8');
    header("Access-Control-Allow-Origin: *");

    $cliente_array = array();
    $ruta="";
    foreach ($pic as $key) {
        $ruta=$key['ruta'];
    }
    foreach ($values as $row) {
        $id=$row["id_driver"];
        $nombre=$row["name_driver"];
        $paterno =$row["paterno_driver"];
        $materno =$row["materno_driver"];
        $correo=$row["emails_driver"];
        $imagen=$row["image_driver"];
        $cliente_array[]= array('id_driver' => $id , 'nombre' => $nombre, 'paterno' => $paterno ,'materno' => $materno, 'correo' => $correo, 'imagen'=>$ruta);
    }
    $clientes = array('driver' => $cliente_array );
    $json =json_encode($clientes);
    echo $json;


?>