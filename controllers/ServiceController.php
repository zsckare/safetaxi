<?php

class ServiceController{

    public function indexAction()
    {
        $consulta=new ServiceModel();
        $services=$consulta->getAll();        
        
        return new View("service/index", ["title" => "", "layout" => "off", "nameLayout" => "dash", "services"=> $services ]); 
    }
    public function newAction($hola="hola")
    {   
        return new View("service/new", ["title" => "", "layout" => "off", "nameLayout" => "dash"]);       
    }

    public function tomarServicoAction()
    {
         return new View("service/take", ["title" => "", "layout" => "off", "nameLayout" => "dash" ]); 
    }


}
