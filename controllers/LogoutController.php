<?php
session_start();
class LogoutController{

    public function indexAction()
    {

		session_destroy();
       	Redirection::go("login"); 
    }

}
