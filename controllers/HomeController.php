<?php

class HomeController{

    public function indexAction($hola="hola")
    {
        
             
            $driver = new DriverModel();
            $values=$driver->getLast();
            return new View("home/index", ["title" => "Taxi Seguro", "layout" => "on", "nameLayout" => "dash","values" => $values]);
       
    }

}
