<?
    
    header('Content-type: application/json; charset=utf-8');
    header("Access-Control-Allow-Origin: *");
    header('Access-Control-Allow-Methods: POST, GET, OPTIONS');
	$cliente_array = array();
    foreach ($clientes as $row) {
        $id=$row["id_cliente"];
        $nombre=$row["nombre"];
        $paterno =$row["paterno"];
        $materno =$row["materno"];
        $correo=$row["correo"];
        $cliente_array[]= array('id_cliente' => $id , 'nombre' => $nombre, 'paterno' => $paterno ,'materno' => $materno, 'correo' => $correo);
    }
    $clientes = array('items' => $cliente_array );
	$json =json_encode($clientes);
	echo $json;


?>