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
    public function readAction()
    {
        $id=$_GET['id'];
        $consulta= new DriverModel();
        $values=$consulta->get($id);
        return new View("driver/read", ["title" => "Taxi Seguro", "layout" => "on", "nameLayout" => "layout","values"=>$values]);
   
        
    }
    public function editAction(){
        $is=$_GET['id_driver'];
        $consulta= new DriverModel();
        $values=$consulta->get($is);
        return new View("driver/edit", ["title" => "Taxi Seguro", "layout" => "on", "nameLayout" => "layout","values"=>$values]);
       
    }
    public function deleteAction(){
        $del=$_GET['d'];
        $consulta= new DriverModel();
        $consulta->delete($del);
    }

}
