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
    public function getSesion($value=null)
    {
        $query = $this->consult->getConsultar("
            SELECT *
            FROM driver
            WHERE emails_driver = '$value'
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

      public function search($buscar)
      {
        $b=$buscar;
        $query = $this->consult->getConsultar("
            SELECT * FROM driver WHERE name_driver LIKE '%".$b."%' OR paterno_driver LIKE '%".$b."%' 
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
      $pass = $password;
      if($this->consult->getConsultar("
        INSERT INTO driver (id_driver, name_driver, paterno_driver, materno_driver, emails_driver, image_driver, phone_driver, password_driver, code_taxi, placas_taxi, calle, colonia, numero, tipo_auto, activo, sindical, base) VALUES (null, '$nombre', '$paterno', '$materno', '$correo', '$imagen', '$telefono', '$pass', '$taxicode', '$placas', '$calle', '$colonia', '$numero', '$tipo_auto', '1', '$sindical', '$base' );
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

    public function update($values = array())
    {
      extract($values);
      $pass=Security::getEncrypt($password);
      if($this->consult->getConsultar("

        UPDATE driver SET name_driver = '$name_driver', paterno_driver = '$paterno_driver', materno_driver = '$materno_driver', emails_driver = '$emails_driver', image_driver = '$image_driver', phone_driver = '$phone_driver', password_driver = '$pass', code_taxi = '$code_taxi', placas_taxi = '$placas_taxi', calle = '$calle', colonia = '$colonia', numero = '$numero', tipo_auto = '$tipo_auto', activo = '1', sindical = '$sindical', base = '$base' WHERE id_driver = '$id_driver';         
      "))
      {
        Cookies::set("complete","Se ha editado el usuario".$pass." correctamente","20-s");
        Redirection::go("cars");
      }else{
        Cookies::set("alert","Error: por algun motivo no se pudo editar el usuario intenta de nuevo","20-s");
        Redirection::go("drivers");
      }   
    }

    public function subirfoto($value)
    {
      
      if($this->consult->getConsultar("
        INSERT INTO `fotos` (`id_foto`, `ruta`) VALUES (NULL, '$value');
          "))
      {
      }else{
         Cookies::set("alert","Error: por algun motivo no se pudo crear el usuario intenta de nuevo","20-s");
         Redirection::go("drivers");
      }
      
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