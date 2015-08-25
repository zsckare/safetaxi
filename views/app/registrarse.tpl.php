<!DOCTYPE html>
<html lang="en">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no"/>
		<title><?=$title?></title>
		<!--   Fonts   -->
		<link href='http://fonts.googleapis.com/css?family=Dosis' rel='stylesheet' type='text/css'>
		<link href='http://fonts.googleapis.com/css?family=Yanone+Kaffeesatz' rel='stylesheet' type='text/css'>
		<link rel="stylesheet" href="http://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
		<!--css-->
		<link rel="stylesheet" href="/assets/css/materialize.css">
		<link rel="stylesheet" href="/assets/css/style.css">
		<link rel="stylesheet" href="/assets/css/styles.css">
		<link rel="stylesheet" type="text/css" href="/assets/css/sweetalert.css">
		<link href='http://fonts.googleapis.com/css?family=Dosis:400,600,500' rel='stylesheet' type='text/css'>
		<!--Scripts de Facebook-->
		<script src="//connect.facebook.net/es_ES/sdk.js"></script>
		<script src="/assets/js/autenticacion.js" ></script>
		
	</head>
	<body class="dosisnormal" onload="estadoActual();">
		
		<nav class="light-blue top-nav">
			<div class="light-blue nav-wrapper container" >
				<a href="" class="brand-logo center " >Taxi Seguro</a>
			</div>
		</nav>
		<section style="margin-top:1em;" class="">
			<div class="card pading-largo">
				<div class="container">
					<div class="row">
						<h4 class="center-align dosisbold " style="">Resgistrate</h4>
						<p class="center-align disosmedium" style="">Alianza Taxi Seguro</p>
					</div>
					<div class="row">
						<div class="col s10 m10 l2  offset-l5 offset-m1 offset-s1" onclick="LogIn();">
							<img src="/assets/img/btnfb.png" alt="" class="responsive-img">
						</div>
					</div>
					
					<div class="row">
						<form action="" id="formulario" name="registro" method="POST" >
							<div class="padding-largo">
								<div class="row input-field">
									<label for="nombre">Nombre</label>
									<input type="text" id="nombre" name="nombre">
								</div>
								<div class="row input-field">
									<label for="paterno">Apellido Paterno</label>
									<input type="text" id="paterno" name="paterno">
								</div>
								<div class="row input-field">
									<label for="materno">Apelido Materno</label>
									<input type="text" id="materno" name="materno">
								</div>
								<div class="row input-field">
									<label for="email">Correo Electronico</label>
									<input type="email" id="email" name="correo">
								</div>
								<div class="row input-field">
									<label for="password">Contraseña</label>
									<input type="password" id="password" name="pass">
								</div>
								<div class="row">
									<div class="center-align">
										<input type="submit" class="btn blue darken-4"  value="Registrarse">
									</div>
								</div>
								<div class="row">
									<p class="center-align">
										Al Resgistrarte Aceptas Nuestros <a href="">Terminos de Privacidad y Condiciones de Uso</a>
									</p>
								</div>
							</div>
						</form>
					</div>

				</div>
			</div>
			
		</section>
		<script src="https://code.jquery.com/jquery-2.1.4.min.js" ></script>
		<script src="/assets/js/materialize.js"></script>
		<script src="/assets/js/init.js"></script>
    	<script src="/assets/js/sweetalert.min.js"></script>
		

		
	</body>
</html>

<?php
        header("Access-Control-Allow-Origin: *");     
        header("Access-Control-Allow-Methods: GET, POST, PUT, DELETE");   

	if (isset($_POST['correo'])) {
		
		$client=new ClientModel();
		$values=$client->getSesion($_POST['correo']);

		if($values=null){
			$consulta = new ClientModel();
			return $consulta->create([			
			"nombre"=> $_POST['nombre'],
			"paterno"=> $_POST['paterno'],
			"materno"=> $_POST['materno'],
			"calle"=> $_POST['calle'],
			"colonia"=> $_POST['colonia'],
			"numero"=> $_POST['numero'],
			"correo"=> $_POST['correo'],
			"password"=> $_POST['pass']
			]);
		}
		else{
			echo '
<script>Materialize.toast("El Correo usar ya se encuentra registrado!", 4000)</script>';
		}
	}
?>
