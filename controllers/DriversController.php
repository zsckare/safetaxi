<?php

class DriversController{

    public function indexAction($hola="hola")
    {
      	$driver = new DriverModel();
      	$values=$driver->getAll();
        return new View("driver/index", ["title" => "Taxi Seguro", "layout" => "on", "nameLayout" => "layout","values"=>$values]);
    }

    public function newAction($hola="hola")
    {
      
        return new View("driver/new", ["title" => "Taxi Seguro | Resgistro de Taxistas", "layout" => "on", "nameLayout" => "layout"]);
    }

}
