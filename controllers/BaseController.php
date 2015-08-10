<?php
session_start();
class BaseController{

    public function indexAction($hola="hola")
    {
        if (isset($_SESSION['user'])) {
            $base = new BaseModel();
            $values=$base->getAll();
            return new View("base/index", ["title" => "Taxi Seguro", "layout" => "on", "nameLayout" => "dash","values"=>$values]);
        }else {
            Redirection::go("login");
        }
    }

    public function newAction($hola="hola")
    {
        if (isset($_SESSION['user'])) {
      
            return new View("base/new", ["title" => "Taxi Seguro | Resgistro de Autos", "layout" => "on", "nameLayout" => "dash"]);
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
        $del=$_GET['id_base'];
        $consulta= new BaseModel();
        $consulta->delete($del);
        }else {
            Redirection::go("login");
        }
    }

}
