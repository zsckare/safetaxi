<?php

  class UserModel{

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

    public function getAll( $value = null)
    {
        $query = $this->consult->getConsultar("
            SELECT *
            FROM servicio
        ");

        while($row = $query->fetch_array(MYSQLI_ASSOC)){
            $this->rows[] = $row;
        }

        return $this->rows;

    }
    
    public function create($values = array())
    {
      extract($values);
      
      if($this->consult->getConsultar("
              INSERT INTO servicio
              (id_servicio, id_cliente, fechainicio, disponible, inicio)
              VALUES
              (null, '$id_cliente', $fecha, CURRENT_TIMESTAMP , '1', CURRENT_TIMESTAMP)
          "))
      {
         Cookies::set("complete","Se ha creadi el usuario correctamente","20-s");
         Redirection::go("user");
      }else{
         Cookies::set("alert","Error: por algun motivo no se pudo crear el usuario intenta de nuevo","20-s");
         Redirection::go("user");
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
        Redirection::go("user");
      }else{
        Cookies::set("alert","Error: por algun motivo no se pudo editar el usuario intenta de nuevo","20-s");
        Redirection::go("user");
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