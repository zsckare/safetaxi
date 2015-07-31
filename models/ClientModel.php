<?php

  class ClientModel{

    protected $consult;
    public $rows;

    public function __construct()
    {
        $this->consult = new Querys();
    }


    public function get($cellComparate = null, $value = null)
    {
        $query = $this->consult->getConsultar("
            SELECT *
            FROM clientes
            WHERE $cellComparate = '$value'
        ");

        while($row = $query->fetch_array(MYSQLI_ASSOC)){
            $this->rows[] = $row;
        }

        return $this->rows;

    }
   

    public function create($values = array())
    {
      extract($values);
      $pass= Security::getEncrypt($password);
      if($this->consult->getConsultar("
              INSERT INTO cliente
              (id_cliente, nombre, paterno, materno, correo, password, activo)
              VALUES
              (null, '$nombre', '$paterno', '$materno', '$correo', '$pass', '1')
          "))
      {
         
         Redirection::go("cars");
      }else{
         Redirection::go("cars");
      }
    }

    public function update($useractual,$mailactual, $comp, $user, $correo, $values=array())
    {
      if($this->consult->getConsultar("
          UPDATE user
          SET name = '$name'
          WHERE name_user = '$user'
      "))
      {
        $_SESSION['user']=$name;
        Cookies::set("complete","Se ha editado el usuario correctamente","20-s");
        Redirection::go("cars");
      }else{
        Cookies::set("alert","Error: por algun motivo no se pudo editar el usuario intenta de nuevo","20-s");
        Redirection::go("cars");
      }   
    }

    public function delete($id)
    {
        if($this->consult->getConsultar("
            DELETE FROM autos
            WHERE id_auto = '$id'
        ")){
           Cookies::set("delete","Se ha eliminado el usuario correctamente","20-s");
           Redirection::go("cars");
        }else
        {
           Cookies::set("alert","Error: No se ha podido eliminar el usuario intenta de nuevo","20-s");
          Redirection::go("cars");
        }
    }
  }