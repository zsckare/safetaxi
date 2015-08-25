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
		<link href='http://fonts.googleapis.com/css?family=Dosis:400,600,500' rel='stylesheet' type='text/css'>
			<!--Scripts de Facebook-->
		<script src="//connect.facebook.net/es_ES/sdk.js"></script>
		<script src="/assets/js/autenticacion.js" ></script>
	</head>
	<body class="dosisnormal" onload="estadoActual();"	 >
		
		<nav class="light-blue top-nav">
			<div class="light-blue nav-wrapper container" >
				<a href="" class="brand-logo center dosisbold" >Taxi Seguro</a>
			</div>
		</nav>
		<section style="margin-top:1em;" class="">
			<div class="card padding-largo">
				<div class="row">
					<div class="col s4 m4 l4 offset-s4 offset-m4"><img src="/assets/img/logo.png" alt="" class="responsive-img"></div>
				</div>
				<div class="row">
					<h3 class="center-align dosisbold">Inicia Sesión</h3>
				</div>
				<div class="row">
						<div class="col s10 m10 l2  offset-l5 offset-m1 offset-s1" onclick="LogIn();" style="cursor:pointer;">
							<img src="/assets/img/btnfb.png" alt="" class="responsive-img">
						</div>
				</div>
				<div class="row">
					<form action="" method="POST">
						<div class="row">
							<div class="input-field col s12 m12 l12">
								<label for="correo">Correo Electrónico</label>
								<input type="text" name="mails" id="correo">
							</div>
						</div>
						<div class="row">
							<div class="input-field col s12 m12 l12">
								<label for="password">Contraseña</label>
								<input type="password" name="password" id="password">
							</div>
						</div>
						<div class="row">
							<div class="center-align">
								<input type="submit" value="Iniciar Sesion" class="btn blue darken-4">
							</div>
						</div>
					</form>
				</div>

				<div class="row">
					<div class="center-align">
						Aun no tienes cuenta... <a href="/app/signup" class="dosismedium" >Registrate</a>
					</div>
				</div>
			</div>
		</section>
		<script src="https://code.jquery.com/jquery-2.1.4.min.js" ></script>
		<script src="/assets/js/materialize.js"></script>
		<script src="/assets/js/init.js"></script>
		</script>
		
	</body>
</html>
<?php
	if(isset($_POST['mails'])){
		$correo=trim($_POST['mails']);
	$pass=trim($_POST['password']);
	$driver = new ClientModel();
	$values=$driver->getSesion($correo);

	if ($values==null) {
		echo "string";
	}else{
		$password=Security::getEncrypt($pass);
		$pasbd="";
		$type="client";
		$name="";
	foreach ($values as $row) {
		$pasbd=$row['password'];
		$name=$row['correo'];
		$_SESSION['id_user']=$row['id_cliente'];
		
	}
		echo $password."<br>".$pasbd;
	}
	if ($password==$pasbd) {
		$_SESSION['user']=$name;
		$_SESSION['type']=$type;
		Redirection::go('app');
	}else{
		session_destroy();
		Redirection::go('app');
	}
	
	}
?>
