<?php

  class MetasModel{

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
            FROM meta
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
                FROM meta
            ");

            while($row = $query->fetch_array(MYSQLI_ASSOC)){
                $this->rowsAll[] = $row;
            }

            return $this->rowsAll;

        }

    public function create($values = array())
    {
      extract($values);
     
      if($this->consult->getConsultar("
              INSERT INTO meta (idMeta, titulo, descripcion, prioridad) VALUES (NULL, '$titulo', '$desc', '$pri');
          "))
      {
        Cookies::set("complete","Se ha creadi el usuario correctamente","20-s");
         header('Location:'.Rutas::getDireccion('metas'));
      }else{
         Cookies::set("alert","Error: por algun motivo no se pudo crear el usuario intenta de nuevo","20-s");
         
      }
    }

    
  }
/*
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
  }*/