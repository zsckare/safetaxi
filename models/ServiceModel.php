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
              INSERT INTO `servicio` (`id_servico`, `id_cliente`,`disponible`,`latitud`,`longitud`) VALUES (NULL, '$id_cliente','1','$latitud', '$longitud' );
          "))
      {
         
         
      }else{
         Cookies::set("alert","Error: por algun motivo no se pudo crear el servicio intenta de nuevo","20-s");
         
      }
    }

    public function update($values = array())
    {
      extract($values);

      if($this->consult->getConsultar("
        UPDATE servicio SET id_driver = '$id_driver', disponible = '0' WHERE id_servico = '$id_servicio';
      "))
      {
        Cookies::set("complete","Se ha editado el usuario correctamente","20-s");
        Redirection::go("drivers");
      }else{
        Cookies::set("alert","Error: por algun motivo no se pudo editar el usuario intenta de nuevo","20-s");
        Redirection::go("drivers");
      }   
    }

    public function destroy($id)
    {
        if($this->consult->getConsultar("
            DELETE FROM user
            WHERE id_user = '$id'
        ")){
           Cookies::set("delete","Se ha eliminado el usuario correctamente","20-s");
           Redirection::go("user");
        }else
        {
           Cookies::set("alert","Error: No se ha podido eliminar el usuario intenta de nuevo","20-s");
          Redirection::go("user");
        }
    }
  }