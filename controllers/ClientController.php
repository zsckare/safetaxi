<?php

class ClientController{

    public function indexAction()
    {
        $consulta=new ClientModel();
        $clientes=$consulta->getAll();        
        
        return new View("client/index", ["title" => "", "layout" => "off", "nameLayout" => "dash", "clientes"=> $clientes ]); 
    }
    public function newAction($hola="hola")
    {   
        return new View("client/new", ["title" => "", "layout" => "on", "nameLayout" => "dash"]);       
    }

    public function readAction()
    {        
        $id=$_GET['id'];
        $consulta= new ClientModel();
        $values=$consulta->get($id);
        return new View("client/read", ["title" => "", "layout" => "on", "nameLayout" => "dash","values"=>$values]);        
    }
    
    public function editAction(){        
        $is=$_GET['id_cliente'];
        $consulta= new ClientModel();
        $values=$consulta->get($is);
        return new View("client/edit", ["title" => "", "layout" => "on", "nameLayout" => "dash","values"=>$values]);       
    }



}
