<?php

class AppDriverController{

    public function IndexAction($value='')
    {
        return new View("appdriver/index", ["title" => "", "layout" => "on", "nameLayout" => "app"]);       
    }

    public function LoginAction()
    {
      return new View("appdriver/login", ["title" => "", "layout" => "on", "nameLayout" => "app"]);     
    }


}
