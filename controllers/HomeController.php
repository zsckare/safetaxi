<?php
session_start();
class HomeController{

    public function indexAction($hola="hola")
    {
        if (isset($_SESSION['user'] )&& $_SESSION['type']== "admin"  ) {
      		      
            $driver = new DriverModel();
            $values=$driver->getLast();
            return new View("home/index", ["title" => "Taxi Seguro", "layout" => "on", "nameLayout" => "dash","values" => $values]);
        	
        }else {
        	Redirection::go("login");
        }
       
    }


}
