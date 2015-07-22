<?php

class MetasController{

    public function indexAction($hola="hola")
    {
      $driver = new MetasModel();
      $values=$driver->getAll();
        return new View("metas/index", ["title" => "Metas", "layout" => "on", "nameLayout" => "layout","values"=>$values]);
    }

    public function newAction($hola="hola")
    {
      
        return new View("metas/new", ["title" => "Nueva Meta", "layout" => "on", "nameLayout" => "layout"]);
    }

    
}
