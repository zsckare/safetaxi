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
        foreach ($values as $key) {
                $id_foto=$key['image_driver'];
            }
        $fotos=new FotoModel();
        $pic=$fotos->get($id_foto);

        return new View("api/driver", ["title" => "", "layout" => "off", "nameLayout" => "dash","values"=>$values, "pic"=>$pic]);
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
    
    public function destroyServiceAction()
    {
        $id_cliente=$_REQUEST['id_cliente'];

        $servicio=new ServiceModel();
        $values = $servicio->ultimo($_GET['id_cliente']);

        return new View("api/destroyservice", ["title" => "", "layout" => "off", "nameLayout" => "dash", "values"=>$values]); 
    }

    public function CalificarAction()
    {
        if (isset($_REQUEST['id_servicio'])) {
            $id_servicio=$_REQUEST['id_servicio'];
            $comentarios=$_POST['comentarios'];
            $rate=$_POST['rate'];
            $calificacion= new RateModel();

            $calificacion->create([            
            "id_servicio"=> $id_servicio,
            "comentarios"=> $comentarios,
            "rate"=>$rate
            ]);
        }
    }

    public function dataServiceAction()
    {   
        $servicio=new ServiceModel();
        $values = $servicio->get($_GET['id_servicio']);
        return new View("api/dataservice", ["title" => "", "layout" => "off", "nameLayout" => "dash", "values"=>$values]);  
    }

}
