<?php 
	class conect{

		function taxis(){
		$host ='localhost';
		$user ='root';
		$pass ='';
		$db ='safetaxi';
		
		$conectar=mysqli_connect($host,$user,$pass,$db);
		mysqli_select_db($conectar,$db);
		return $conectar;
		}
		function getAddress($id_client, $conectar){
		$ubicacion=sprintf("SELECT * FROM servicio WHERE id_cliente='$id_client'AND disponible='2'");
		$result=mysqli_query($conectar,$ubicacion);
		$row=mysqli_fetch_assoc($result);
		do{
			$lat=$row['lat_driver'];
			$lon=$row['lon_driver'];
		}while($row=mysqli_fetch_assoc($result));
		return $lat.','.$lon;
		}
		function getMyAddress($id_client, $conectar){
		$ubicacion=sprintf("SELECT * FROM servicio WHERE id_cliente='$id_client'AND disponible='2'");
		$result=mysqli_query($conectar,$ubicacion);
		$row=mysqli_fetch_assoc($result);
		do{
			$lat=$row['latitud'];
			$lon=$row['longitud'];
		}while($row=mysqli_fetch_assoc($result));
		return $lat.','.$lon;
		}
	}
 ?>