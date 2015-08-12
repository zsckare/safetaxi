<?php
session_start();
class SearchController{

    public function indexAction($hola="hola")
    {
        if (isset($_SESSION['user'])) {

      		$buscar=$_POST['buscar'];
            $driver = new DriverModel();
            $values=$driver->search($buscar);
            return new View("search/index", ["title" => "Taxi Seguro", "layout" => "on", "nameLayout" => "dash","values" => $values]);
        	
        }else {
        	Redirection::go("login");
        }
       
    }


}
