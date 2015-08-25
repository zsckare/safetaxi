<?php
session_start();
class AppController{

    public function IndexAction($value='')
    {
        if (isset($_SESSION['user']) && $_SESSION['type']=="client" ) {
            return new View("app/index", ["title" => "", "layout" => "on", "nameLayout" => "app"]);       
        }else{
            Redirection::go('app/signin');
        }     
    }

    public function MyUbicationAction()
    {

        if (isset($_SESSION['user']) && $_SESSION['type']=="client" ) {
            return new View("app/myubication", ["title" => "Mi Ubicacion", "layout" => "on", "nameLayout" => "app"]);    
        }else{
            Redirection::go('app/signin');
        }  
    }

    public function PedirAction()
    {
        if (isset($_SESSION['user']) && $_SESSION['type']=="client" ) {
            return new View("app/pedir", ["title" => "Pedir Taxi", "layout" => "on", "nameLayout" => "app"]);    
         }else{
            Redirection::go('app/signin');
        }  
    }

    public function AccountAction()
    {
        if (isset($_SESSION['user']) && $_SESSION['type']=="client" ) {

            $cliente = new ClientModel();

            $values=$cliente->get($_SESSION['id_user']);

            return new View("app/account", ["title" => "", "layout" => "on", "nameLayout" => "app", "values"=>$values]);     
        }else{
            Redirection::go('app/signin');
        }  
    }
    public function SignupAction()
    {
        return new View("app/registrarse", ["title" => "Registrarse", "layout" => "off", "nameLayout" => "app"]);            
    	
    }

    public function SigninAction()
    {
    	return new View("app/logearse", ["title" => "Iniciar Sesion", "layout" => "off", "nameLayout" => "app"]);     
    }

    public function LoginAction()
    {
      return new View("app/index", ["title" => "", "layout" => "on", "nameLayout" => "app"]);     
    }

    public function AboutAction()
    {

        if (isset($_SESSION['user']) && $_SESSION['type']=="client" ) {
            return new View("app/about", ["title" => "Acerca de ", "layout" => "on", "nameLayout" => "app"]);    
        }else{
            Redirection::go('app/signin');
        }  
    }
    public function LogoutAction()
    {
        session_destroy();
        Redirection::go("app"); 
    }
    /*------------------ Acciones de la APP de Tacistas---------------------------- */

    public function IndexDriverAction($value='')
    {
        if (isset($_SESSION['user']) && $_SESSION['type']=="driver" ) {
            return new View("appdriver/index", ["title" => "Taxi Seguro Alianza APP 
                Driver", "layout" => "on", "nameLayout" => "appdriver"]); 
        }else{
            Redirection::go('app/logindriver');
        }        
    }


    public function MyUbicationDriverAction()
    {

        if (isset($_SESSION['user']) && $_SESSION['type']=="driver" ) {
            return new View("appdriver/myubication", ["title" => "Mi Ubicacion", "layout" => "on", "nameLayout" => "appdriver"]);    
        }else{
            Redirection::go('app/logindriver');
        }  
    }
    public function ServicesDriverAction()
    {

        if (isset($_SESSION['user']) && $_SESSION['type']=="driver" ) {
            return new View("appdriver/services", ["title" => "Buscando Servicios", "layout" => "on", "nameLayout" => "appdriver"]);    
        }else{
            Redirection::go('app/logindriver');
        }  
    }
    public function AccountDriverAction()
    {
        if (isset($_SESSION['user']) && $_SESSION['type']=="driver" ) {

            $cliente = new DriverModel();

            $values=$cliente->get($_SESSION['id_user']);

            return new View("appdriver/account", ["title" => "", "layout" => "on", "nameLayout" => "appdriver", "values"=>$values]);     
        }else{
            Redirection::go('app/logindriver');
        }  
    }

    public function AboutDriverAction()
    {

        if (isset($_SESSION['user']) && $_SESSION['type']=="driver" ) {
            return new View("appdriver/about", ["title" => "Acerca de ", "layout" => "on", "nameLayout" => "appdriver"]);    
        }else{
            Redirection::go('driver/signup');
        }  
    }
    // ----------------------------------- manejo de sesiones --------------------------------------
    public function LoginDriverAction()
    {
      return new View("appdriver/login", ["title" => "", "layout" => "off", "nameLayout" => "app"]);     
    }
    public function LogoutDriverAction()
    {
        session_destroy();
        Redirection::go("driver"); 
    }

    
}
