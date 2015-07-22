<?php

  class DriverModel{

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
            FROM driver
            WHERE $cellComparate = '$value'
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
      $pass = Security::getEncrypt($password);
      if($this->consult->getConsultar("
        INSERT INTO driver (id_driver, name_driver, paterno_driver, materno_driver, emails_driver, phone_driver, password_driver, code_taxi, placas_taxi, calle, colonia, numero) VALUES (null, '$nombre', '$paterno', '$materno', '$correo', '$telefono', '$pass', '$taxicode', '$placas', '$calle', '$colonia', '$numero');
          "))
      {
         Cookies::set("complete","Se ha creadi el usuario correctamente","20-s");
          header('Location:'.Rutas::getDireccion('drivers'));
      }else{
         Cookies::set("alert","Error: por algun motivo no se pudo crear el usuario intenta de nuevo","20-s");
         header('Location:'.Rutas::getDireccion('drivers'));
      }
    }

    public function update($useractual,$mailactual, $comp, $user, $correo, $values=array())
    {
      if($this->consult->getConsultar("
          UPDATE driver
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
            DELETE FROM driver
            WHERE id_user = '$id'
        ")){
           Cookies::set("delete","Se ha eliminado el usuario correctamente","20-s");
           Redirection::go("home");
        }else
        {
           Cookies::set("alert","Error: No se ha podido eliminar el usuario intenta de nuevo","20-s");
          Redirection::go("home");
        }
    }
  }

  class Rutas
  {
    private static $_app_path;

    public static function getDireccion($direccion)
    {
      self::$_app_path = ROOT_RUTA;
      return self::$_app_path.$direccion;
    }

    public static function getInclude($direccion)
    {
      $direccion = ereg_replace ("/", SLASH, $direccion);
      self::$_app_path = $_SERVER['DOCUMENT_ROOT'];;
      return self::$_app_path.$direccion;
    }
  }