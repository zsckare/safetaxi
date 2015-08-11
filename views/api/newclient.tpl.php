<?php
  header("Access-Control-Allow-Origin: *");     
  header("Access-Control-Allow-Methods: GET, POST, PUT, DELETE");   

	
if($_POST){
   $misDatosJSON = json_decode($_POST["datos"]);
   
   $salida = "";
   $salida .= "Capital de Francia: " . $misDatosJSON[1][1];
   $salida .= "<br>Nombre del país 1 (índice 0 del array): " . $misDatosJSON[0][0];
   $salida .= "<br>Nombre del país 3: " . $misDatosJSON[2][0];
   echo $salida;
}else{
   echo "No recibí datos por POST";
}


?>
