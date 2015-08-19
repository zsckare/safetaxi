<?php

//renombre este archivo para que funconara en el servidor
session_start();
class DriverController{

    public function IndexAction($value='')
    {
    	if (isset($_SESSION['user']) && $_SESSION['type']=="driver" ) {
        	return new View("appdriver/index", ["title" => "Taxi Seguro Alianza APP 
                Driver", "layout" => "on", "nameLayout" => "appdriver"]); 
        }else{
            Redirection::go('driver/login');
        }        
    }


    public function MyUbicationAction()
    {

        if (isset($_SESSION['user']) && $_SESSION['type']=="driver" ) {
            return new View("appdriver/myubication", ["title" => "Mi Ubicacion", "layout" => "on", "nameLayout" => "appdriver"]);    
        }else{
            Redirection::go('driver/signup');
        }  
    }

    public function AccountAction()
    {
        if (isset($_SESSION['user']) && $_SESSION['type']=="driver" ) {

            $cliente = new DriverModel();

            $values=$cliente->get($_SESSION['id_user']);

            return new View("appdriver/account", ["title" => "", "layout" => "on", "nameLayout" => "appdriver", "values"=>$values]);     
        }else{
            Redirection::go('driver/signup');
        }  
    }

    public function AboutAction()
    {

        if (isset($_SESSION['user']) && $_SESSION['type']=="driver" ) {
            return new View("appdriver/about", ["title" => "Acerca de ", "layout" => "on", "nameLayout" => "appdriver"]);    
        }else{
            Redirection::go('driver/signup');
        }  
    }
    // ----------------------------------- manejo de sesiones --------------------------------------
    public function LoginAction()
    {
      return new View("appdriver/login", ["title" => "", "layout" => "off", "nameLayout" => "app"]);     
    }
    public function LogoutAction()
    {
        session_destroy();
        Redirection::go("driver"); 
    }

}
