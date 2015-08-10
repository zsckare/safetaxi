<?php
class Consumer
{
	public function sendPost($nombre, $paterno, $materno, $correo, $pass )
    {
        $data = array("nombre" => $nombre, "paterno"=> $paterno, "materno" => $materno, "correo" => $correo, "password" => $pass, "activo" => 1  );
        
        //$data = array("title" => "otro libro", "isbn" => "998-84-8184-1", "author" => "otro autor :)");
        $ch = curl_init("http://safetaxi.esy.es/api/client/");
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
        curl_setopt($ch, CURLOPT_POSTFIELDS,http_build_query($data));
        $response = curl_exec($ch);
        curl_close($ch);
        if(!$response) 
        {
            return false;
        }
        else
        {
            var_dump($response);
        }
    }
 
    public function sendPut($id)
    {
        //$data = array("title" => "libro actualizado", "isbn" => "978-74-3456-2", "author" => "juan", "id" => $id);
        $ch = curl_init("http://safetaxi.esy.es/api/client/");
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "PUT");
        curl_setopt($ch, CURLOPT_POSTFIELDS,http_build_query($data));
        $response = curl_exec($ch);
        curl_close($ch);
        if(!$response) 
        {
            return false;
        }
        else
        {
            var_dump($response);
        }
    }
 
    public function sendGetAll()
    {
        $ch = curl_init("http://safetaxi.esy.es/client/");
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "GET");
        $response = curl_exec($ch);
        curl_close($ch);
        if(!$response) 
        {
            return false;
        }
        else
        {
            var_dump($response);
        }
    }

    public function sendGetById($id)
    {
        $ch = curl_init("http://safetaxi.esy.es/api/client/$id");
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "GET");
        $response = curl_exec($ch);
        curl_close($ch);
        if(!$response) 
        {
            return false;
        }
        else
        {
            var_dump($response);
        }
    }
 
    
}

$curl = new Consumer();
//$curl->sendPost("Astra","Alvarez","Guevara","astra@gmail.com","asdfghjklñ");
$curl->sendGetAll();
