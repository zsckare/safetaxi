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


    public function newserviceAction()
    {   
        return new View("api/newservice", ["title" => "", "layout" => "off", "nameLayout" => "dash"]);       
    }

    public function ServiceAction()
    {
        $servicio=new ServiceModel();
        $values = $servicio->ultimo($_GET['id_cliente']);
        return new View("api/service", ["title" => "", "layout" => "off", "nameLayout" => "dash", "values"=>$values]);  
    }
    

}
