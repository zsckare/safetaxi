<?php
	header("Access-Control-Allow-Origin: *");     
	header("Access-Control-Allow-Methods: GET, POST, PUT, DELETE");  
	 
	if (isset($_POST['id_driver'])) {
		$consulta = new ServiceModel();
		return $consulta->update([			
			"id_driver"=>$_POST['id_driver'],
			"id_servicio"=> $_POST['id_servicio']
			]);
	}
 ?>