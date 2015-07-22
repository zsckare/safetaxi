<?php

class HomeController{

    public function indexAction($hola="hola")
    {
      // Controlador principal en esta carpeta crear los demas controladores.
        $driver = new DriverModel();
        $values=$driver->getLast();
        return new View("home/index", ["title" => "Taxi Seguro", "layout" => "on", "nameLayout" => "layout","values" => $values]);
    }
        public function newAction($hola="hola")
    {
      // Controlador principal en esta carpeta crear los demas controladores.
        return new View("home/new", ["title" => "Framework", "layout" => "on", "nameLayout" => "layout"]);
    }
}
