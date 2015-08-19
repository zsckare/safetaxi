<?php

class SearchController{

    public function indexAction($hola="hola")
    {
       

      		$buscar=$_POST['buscar'];
            $driver = new DriverModel();
            $values=$driver->search($buscar);
            return new View("search/index", ["title" => "Taxi Seguro", "layout" => "on", "nameLayout" => "dash","values" => $values]);

       
    }


}
