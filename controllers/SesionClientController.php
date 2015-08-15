<?php
session_start();
class SesionClientController{

	public function indexAction()
    {
    	$correo=trim($_POST['mails']);
    	$pass=trim($_POST['password']);

    	$driver = new ClientModel();
    	$values=$driver->getSesion($correo);

        return new View("app/session", ["title" => "", "layout" => "off", "nameLayout" => "dash", "values"=> $values, "pass"=> $pass ]); 
    }
}
