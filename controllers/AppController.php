<?php
session_start();
class AppController{

    public function IndexAction($value='')
    {
        if (isset($_SESSION['user']) && $_SESSION['type']=="client" ) {
            return new View("app/index", ["title" => "", "layout" => "on", "nameLayout" => "app"]);       
        }else{
            Redirection::go('app/signup');
        }     
    }

    public function MyUbicationAction()
    {
        return new View("app/myubication", ["title" => "Mi Ubicacion", "layout" => "on", "nameLayout" => "app"]);    
    }

    public function PedirAction()
    {
        return new View("app/pedir", ["title" => "Mi Ubicacion", "layout" => "on", "nameLayout" => "app"]);    
    }

    public function AccountAction()
    {
      return new View("app/index", ["title" => "", "layout" => "on", "nameLayout" => "app"]);     
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
        return new View("app/about", ["title" => "Acerca de ", "layout" => "on", "nameLayout" => "app"]);    
    }
    public function LogoutAction()
    {
        session_destroy();
        Redirection::go("app"); 
    }
    
}
