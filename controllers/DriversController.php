<?php
session_start();
class DriversController{

    public function indexAction($hola="hola")
    {
        if (isset($_SESSION['user'])) {
            $driver = new DriverModel();
            $values=$driver->getAll();
            return new View("driver/index", ["title" => "Taxi Seguro", "layout" => "on", "nameLayout" => "dash","values"=>$values]);        
        }else {
            Redirection::go("login");
        }        
    }

    public function newAction($hola="hola")
    {   
        if (isset($_SESSION['user'])) {
            $cars= new CarModel();
            $values=$cars->getAll(); 
            $base =new BaseModel();
            $bases=$base->getAll();
            return new View("driver/new", ["title" => "Taxi Seguro | Resgistro de Taxistas", "layout" => "on", "nameLayout" => "dash","values"=>$values, "bases"=>$bases]);
        }else {
            Redirection::go("login");
        }
    }
    public function readAction()
    {
        if (isset($_SESSION['user'])) {
            $id=$_GET['id'];
            $consulta= new DriverModel();
            $values=$consulta->get($id);
            $foto="";
            foreach ($values as $key) {
                $id_foto=$key['image_driver'];
            }

            return new View("driver/read", ["title" => "Taxi Seguro", "layout" => "on", "nameLayout" => "dash","values"=>$values]);
        }else {
            Redirection::go("login");
        }  
        
    }
    public function editAction(){
        if (isset($_SESSION['user'])) {
            $is=$_GET['id_driver'];
            $consulta= new DriverModel();
            $values=$consulta->get($is);
            $pic= new FotoModel();
            $fotos = $pic->getAll();
            $cars= new CarModel();
            $autos=$cars->getAll(); 
            $base =new BaseModel();
            $bases=$base->getAll();
            
            return new View("driver/edit", ["title" => "Taxi Seguro", "layout" => "on", "nameLayout" => "dash","values"=>$values, "fotos"=>$fotos, "bases"=>$bases, "autos"=>$autos]);
        }else {
            Redirection::go("login");
        }
    }
    public function uploadAction()
    {
        return new View("driver/upload", ["title" => "Taxi Seguro | Resgistro de Taxistas", "layout" => "on", "nameLayout" => "dash"]);
    }
    public function deleteAction(){
        if (isset($_SESSION['user'])) {
            $del=$_GET['d'];
            $consulta= new DriverModel();
            $consulta->delete($del);
        }else {
            Redirection::go("login");
        }
    }

}
