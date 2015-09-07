<?php

class AdminController{

    public function indexAction()
    {
        $consulta=new ServiceModel();
        $values=$consulta->getAllOrder();        
        
        return new View("admin/services", ["title" => "", "layout" => "on", "nameLayout" => "dash", "values"=> $values ]); 
    }


}
