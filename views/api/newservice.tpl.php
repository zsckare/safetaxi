<?php
        header("Access-Control-Allow-Origin: *");     
        header("Access-Control-Allow-Methods: GET, POST, PUT, DELETE");   

	if (isset($_POST['id'])) {
		$consulta = new ServiceModel();
		return $consulta->create([			
			"id"=> $_POST['id'],
			"pass"=>"0",
			"latitud"=>$_POST['latitud'],
			"longitud"=>$_POST['longitud'],
			"dirfisica"=>$_POST['dirfisica'],
			"referencias"=>$_POST['ref']
			]);
	}
	else{
		echo "no existe";
	}
?>
