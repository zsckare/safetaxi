<?php

  class FotoModel{

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
            FROM fotos
            WHERE id_foto = '$value'
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
            FROM fotos
        ");

        while($row = $query->fetch_array(MYSQLI_ASSOC)){
            $this->rows[] = $row;
        }

        return $this->rows;
    }
public function delete($id)
    {
        if($this->consult->getConsultar("
            DELETE FROM fotos
            WHERE id_foto = '$id'
        ")){
           Cookies::set("delete","Se ha eliminado el usuario correctamente","20-s");
           Redirection::go("fotos");
        }else
        {
           Cookies::set("alert","Error: No se ha podido eliminar el usuario intenta de nuevo","20-s");
          Redirection::go("fotos");
        }
    }
  }