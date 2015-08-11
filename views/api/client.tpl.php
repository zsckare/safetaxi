<?php
    
    header('Content-type: application/json; charset=utf-8');
    header("Access-Control-Allow-Origin: *");
    
    $cliente_array = array();


    foreach ($cliente as $row) {
        $id=$row["id_cliente"];
        $nombre=$row["nombre"];
        $paterno =$row["paterno"];
        $materno =$row["materno"];
        $correo=$row["correo"];
        $cliente_array[]= array('id_cliente' => $id , 'nombre' => $nombre, 'paterno' => $paterno ,'materno' => $materno, 'correo' => $correo);
    }
    $cliente = array('client' => $cliente_array );
    $json =json_encode($cliente);
    echo $json;


?>