<?php
        header("Access-Control-Allow-Origin: *");     
        header("Access-Control-Allow-Methods: GET, POST, PUT, DELETE");   

	if (isset($_POST['id'])) {
		$consulta = new ServiceModel();
		return $consulta->create([			
			"id_cliente"=> $_POST['id'],
			"pass"=>"0"
			]);
	}
	else{
		echo "ni madres";
	}
?>
