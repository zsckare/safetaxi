<?php
session_start();
class FotosController{

    public function indexAction($hola="hola")
    {
        if (isset($_SESSION['user'])) {
            $driver = new FotoModel();
            $values=$driver->getAll();
            return new View("fotos/index", ["title" => "Taxi Seguro", "layout" => "on", "nameLayout" => "dash","values"=>$values]);        
        }else {
            Redirection::go("login");
        }        
    }

    public function deleteAction(){
        if (isset($_SESSION['user'])) {
            $del=$_GET['id'];
            $consulta= new FotoModel();
            $consulta->delete($del);
        }else {
            Redirection::go("login");
        }
    }

}
