<?php
$destruir=new ServiceModel();
	$id_servicio=null;
	foreach ($values as $row) {
        $id_servicio=$row['id_servico'];
    }
	
    echo $id_servicio;

    $destruir->destroy($id_servicio);

?>