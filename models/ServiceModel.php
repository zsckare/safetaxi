<?php

  class ServiceModel{

    protected $consult;
    public $rows;

    public function __construct()
    {
        $this->consult = new Querys();
    }


    public function get($value = null)
    {
        $query = $this->consult->getConsultar("
            SELECT *
            FROM servicio
            WHERE $id_servicio = '$value'
        ");

        while($row = $query->fetch_array(MYSQLI_ASSOC)){
            $this->rows[] = $row;
        }

        return $this->rows;

    }

    public function ultimo($value=null)
    {
        $query = $this->consult->getConsultar("
            SELECT * FROM `servicio` WHERE id_cliente = '$value' ORDER BY `id_servico` DESC LIMIT 1 
        ");

        while($row = $query->fetch_array(MYSQLI_ASSOC)){
            $this->rows[] = $row;
        }

        return $this->rows;

    }

    public function getAll( $value = null)
    {
        $query = $this->consult->getConsultar("
            SELECT *
            FROM servicio WHERE disponible=1
        ");

        while($row = $query->fetch_array(MYSQLI_ASSOC)){
            $this->rows[] = $row;
        }

        return $this->rows;

    }
    
    public function create($values = array())
    {
      extract($values);
      $fecha=Date::getFecha();
      $id_cliente=$id;
      if($this->consult->getConsultar("
              INSERT INTO `servicio` (`id_servico`, `id_cliente`,`disponible`,`latitud`,`longitud`, `dirfisica`) VALUES (NULL, '$id_cliente','1','$latitud', '$longitud', '$dirfisica' );
          "))
      {
         
         
      }else{
        
         
      }
    }

    public function update($values = array())
    {
      extract($values);

      if($this->consult->getConsultar("
        UPDATE servicio SET id_driver = '$id_driver', disponible = '2' , lat_driver = '$lat_driver', lon_driver= '$lon_driver' WHERE id_servico = '$id_servicio';
      "))
      {

      }else{
        
      }   
    }

    public function destroy($id)
    {
        if($this->consult->getConsultar("
            DELETE FROM servicio
            WHERE id_servico = '$id'
        ")){

        }else
        {
        }
    }
  }