<?php
        header("Access-Control-Allow-Origin: *");     
        header("Access-Control-Allow-Methods: GET, POST, PUT, DELETE");   

	
    if($_POST){

      $misDatosJSON = json_decode($_POST["datos"]);
      
    }else{
       echo "No recibí datos por POST";
    }


?>
