<?php 
		
	include("conexionFB.php");
		$obj= new conect();
		$conectar= $obj-> taxis();

	function getUser($mail,$conectar){
		$validar_d=sprintf("SELECT * FROM clientes WHERE correo='$mail'");
		$result_validar=mysqli_query($conectar,$validar_d)or die(mysqli_error());
		$id=mysqli_fetch_assoc($result_validar);
		return $id;
	}
	function validar($nombre,$mail,$apellidos,$imag,$conectar){		
		if($conectar&&($mail!="undefined")){

			$id=getUser($mail,$conectar);
			if($id){
				session_start();
				$mensaje="$mail esta registrado";
				echo $mensaje;
				if(isset($id)){
				$type="client";
				$name="";
				do{
					$name=$id['correo'];
					$_SESSION['id_user']=$id['id_cliente'];
					
				}while($id=mysqli_fetch_assoc($result_validar));

			if ($_SESSION['id_user']) {
				
				$type="client";
				$_SESSION['user']=$name;
				$_SESSION['type']=$type;
			//	header('location:http://www.miagenda.esy.es/app/');

			}else{
		
			//header('location:http://www.miagenda.esy.es/app/');
				}
			}
			}
			else{
				$mensaje= " <br> $mail no esta registrado";
				echo $mensaje;
				$nuevo=guardar($nombre,$mail,$apellidos,$imag,$conectar);
				$new=getUser($nuevo,$conectar);
			if($new){
				session_start();
				
				if(isset($new)){
				$type="client";
				$name="";
				do{
					$name=$new['correo'];
					$_SESSION['id_user']=$new['id_cliente'];
				}while($new=mysqli_fetch_assoc($result_validar));
			if ($_SESSION['id_user']) {
				
				$type="client";
				$_SESSION['user']=$name;
				$_SESSION['type']=$type;
				
			//	header('location:http://www.miagenda.esy.es/app');

			}else{

			//header('location:http://www.miagenda.esy.es/app');
				}
			}
			}

			}
		}
		else{
			$mensaje= "error";
			echo $mensaje;
	}
}
	function guardar($nombre,$mail,$apellidos,$imag,$conectar){
	
		if($conectar){
			$apes=explode(" ", $apellidos);
			$ape1=$apes[0];
			$ape2=$apes[1];
			$guardar_d=sprintf("INSERT INTO clientes VALUES ( null ,'$nombre','$ape1','$ape2','$mail','','$imag','1','')");
			$result_d=mysqli_query($conectar,$guardar_d);
			echo $mensaje="<br>$nombre fue almacenado correctamente!";
			return $mail;
		}
			else{
			echo $mensaje="Error al guardar datos";
		}



	}
	function obtenerdatos($conectar){
		if(isset($_GET['q'])&&isset($_GET['mail'])&&isset($_GET['ape'])&&isset($_GET['img'])) {
			$q=$_GET['q'];
			$mail=$_GET['mail'];
			$apellidos=$_GET['ape'];
			$imag=$_GET['img'];
			//echo $q." ".$mail." ".$apellidos." ".$imag;
			validar($q,$mail,$apellidos,$imag,$conectar);
			}

	}

	obtenerdatos($conectar);

 ?>
<script src="/assets/js/init.js"></script>