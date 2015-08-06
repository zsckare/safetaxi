<?php
header("Access-Control-Allow-Origin: *");
	if (isset($_POST['nombre'])) {
		$consulta = new ClientModel();
		return $consulta->create([			
			"nombre"=> $_POST['nombre'],
			"paterno"=> $_POST['paterno'],
			"materno"=> $_POST['materno'],
			"calle"=> $_POST['calle'],
			"colonia"=> $_POST['colonia'],
			"numero"=> $_POST['numero'],
			"correo"=> $_POST['correo'],
			"password"=> $_POST['password']
			]);
	}
?>
