<?php 
$cliente_array = array();
            foreach ($clientes as $row) {
                $id=$row["id_cliente"];
                $nombre=$row["nombre"];
                $paterno =$row["paterno"];
                $materno =$row["materno"];
                $correo=$row["correo"];

                $cliente_array[]= array('id_cliente' => $id , 'nombre' => $nombre, 'paterno' => $paterno ,'materno' => $materno, 'correo' => $correo);
            }
 $json =json_encode($cliente_array);
 echo $json;


 ?>