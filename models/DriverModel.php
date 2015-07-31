<?php

  class DriverModel{

    protected $consult;
    public $rows;

    public function __construct()
    {
        $this->consult = new Querys();
    }


    public function get($id)
    {
        $query = $this->consult->getConsultar("
            SELECT *
            FROM driver
            WHERE id_driver = '$id'
        ");

        while($row = $query->fetch_array(MYSQLI_ASSOC)){
            $this->rows[] = $row;
        }

        return $this->rows;

    }
    public function getAll()
        {
            $query = $this->consult->getConsultar("
                SELECT *
                FROM driver
            ");

            while($row = $query->fetch_array(MYSQLI_ASSOC)){
                $this->rowsAll[] = $row;
            }

            return $this->rowsAll;

        }
      public function getLast()
      {
          $query = $this->consult->getConsultar("
            SELECT *
            FROM driver ORDER BY id_driver DESC LIMIT 5
          ");

        while($row = $query->fetch_array(MYSQLI_ASSOC)){
          $this->rowsAll[] = $row;
        }

        return $this->rowsAll;

      }

    public function create($values = array())
    {
      extract($values);
      $imagen="/assets/img/default.png"; 
      $pass = Security::getEncrypt($password);
      if($this->consult->getConsultar("
        INSERT INTO driver (id_driver, name_driver, paterno_driver, materno_driver, emails_driver, image_driver, phone_driver, password_driver, code_taxi, placas_taxi, calle, colonia, numero, tipo_auto, activo) VALUES (null, '$nombre', '$paterno', '$materno', '$correo', '$imagen', '$telefono', '$pass', '$taxicode', '$placas', '$calle', '$colonia', '$numero', '$tipo_auto', '1' );
          "))
      {
         Cookies::set("complete","Se ha creado el usuario correctamente","20-s");
         // header('Location:'.Rutas::getDireccion('drivers'));
         Redirection::go("drivers");
      }else{
         Cookies::set("alert","Error: por algun motivo no se pudo crear el usuario intenta de nuevo","20-s");
         Redirection::go("drivers");
      }
    }

    public function update($values=array())
    {
      extract($values);
      if($this->consult->getConsultar("
         UPDATE `driver` SET `name_driver` = '$nombre', `paterno_driver` = '$paterno', `materno_driver` = '$materno', `emails_driver` = '$correo', `image_driver` = '$imagen', `phone_driver` = '$telefono',  `code_taxi` = '$taxicode', `placas_taxi` = '$placas', `calle` = '$calle', `colonia` = '$colonia', `numero` = '$numero' WHERE id_driver = '$id'
      "))
      {
        $_SESSION['user']=$name;
        Cookies::set("complete","Se ha editado el usuario correctamente","20-s");
        Redirection::go("drivers");
      }else{
        Cookies::set("alert","Error: por algun motivo no se pudo editar el usuario intenta de nuevo","20-s");
        Redirection::go("drivers");
      }   
    }
    public function subirfoto($value=array())
    {
      # code...
    }

    public function delete($id)
    {
        if($this->consult->getConsultar("
            DELETE FROM driver
            WHERE id_driver = '$id'
        ")){
           Cookies::set("delete","Se ha eliminado el usuario correctamente","20-s");
           Redirection::go("drivers");
        }else
        {
           Cookies::set("alert","Error: No se ha podido eliminar el usuario intenta de nuevo","20-s");
          Redirection::go("drivers");
        }
    }
  }

  

?>