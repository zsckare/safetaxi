<?php

class CarsController{

    public function indexAction($hola="hola")
    {
        
        $car = new CarModel();
        $values=$car->getAll();
        return new View("car/index", ["title" => "Taxi Seguro", "layout" => "on", "nameLayout" => "dash","values"=>$values]);
        
    }

    public function newAction($hola="hola")
    {
      
        return new View("car/new", ["title" => "Taxi Seguro | Resgistro de Autos", "layout" => "on", "nameLayout" => "dash"]);
    }

    public function editAction(){
        $is=$_GET['id_auto'];
        $consulta= new CarModel();
        $values=$consulta->get($is);
        return new View("car/edit", ["title" => "Taxi Seguro", "layout" => "on", "nameLayout" => "dash","values"=>$values]);
       
    }

    public function deleteAction(){
        $del=$_GET['id'];
        $consulta= new CarModel();
        $consulta->delete($del);
    }

}
