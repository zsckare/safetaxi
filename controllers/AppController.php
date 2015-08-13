<?php

class AppController{

    public function IndexAction($value='')
    {
        return new View("app/index", ["title" => "", "layout" => "on", "nameLayout" => "app"]);       
    }
    public function ClientAction()
    {
      return new View("app/index", ["title" => "", "layout" => "on", "nameLayout" => "app"]);     
    }

}
