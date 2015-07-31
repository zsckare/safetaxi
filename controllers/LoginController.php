<?php

class LoginController{

    public function indexAction()
    {
        return new View("admin/login", ["title" => "Taxi Seguro", "layout" => "off", "nameLayout" => "dash"]);
        
    }

}
