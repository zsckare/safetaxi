<?php

class ApiController{

    //esta accon trae todos los clientes
    public function ClientsAction()
    {
        $consulta=new ClientModel();
        $clientes=$consulta->getAll();        
        
        return new View("api/clients", ["title" => "", "layout" => "off", "nameLayout" => "dash", "clientes"=> $clientes ]); 
    }

    public function ClientAction()
    {
        $id=$_GET['id'];
        $consulta=new ClientModel();
        $cliente=$consulta->get($id);        
        
        return new View("api/client", ["title" => "", "layout" => "off", "nameLayout" => "dash", "cliente"=> $cliente ]); 
    }


    public function DriverAction()
    {
        $id=$_GET['id'];
        $consulta= new DriverModel();
        $values=$consulta->get($id);
        return new View("api/driver", ["title" => "", "layout" => "off", "nameLayout" => "dash","values"=>$values]);
    }


    public function newAction()
    {   
        return new View("api/new", ["title" => "", "layout" => "off", "nameLayout" => "dash"]);       
    }

    

}
