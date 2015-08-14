<?php
session_start();
class AppController{

    public function IndexAction($value='')
    {
        if (isset($_SESSION['user'])) {
        return new View("app/index", ["title" => "", "layout" => "on", "nameLayout" => "app"]);   
        }else {
            Redirection::go("app/signup");
        }    
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

    
}
