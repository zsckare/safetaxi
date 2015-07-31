<?php
session_start();
class CarsController{

    public function indexAction($hola="hola")
    {
        if (isset($_SESSION['user'])) {
            $car = new CarModel();
            $values=$car->getAll();
            return new View("car/index", ["title" => "Taxi Seguro", "layout" => "on", "nameLayout" => "dash","values"=>$values]);
        }else {
            Redirection::go("login");
        }
    }

    public function newAction($hola="hola")
    {
        if (isset($_SESSION['user'])) {
      
            return new View("car/new", ["title" => "Taxi Seguro | Resgistro de Autos", "layout" => "on", "nameLayout" => "dash"]);
        }else {
            Redirection::go("login");
        }
    }

    public function editAction(){
        if (isset($_SESSION['user'])) {
        $is=$_GET['id_auto'];
        $consulta= new CarModel();
        $values=$consulta->get($is);
        return new View("car/edit", ["title" => "Taxi Seguro", "layout" => "on", "nameLayout" => "dash","values"=>$values]);
        }else {
            Redirection::go("login");
        }
       
    }

    public function deleteAction(){
        if (isset($_SESSION['user'])) {
        $del=$_GET['id'];
        $consulta= new CarModel();
        $consulta->delete($del);
        }else {
            Redirection::go("login");
        }
    }

}
