<?php

class SessionClientController{

    public function indexAction()
    {
    	$consulta = new ClientModel();
		$values = $consulta->get(["correo"=> $_POST['correo'], "contraseña"=> $_POST['password']]);
        return new View("app/session", ["layout" => "off", "values"=> $values ]);
    }
}
