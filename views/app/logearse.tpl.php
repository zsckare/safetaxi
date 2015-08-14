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
	</head>
	<body class="dosisnormal" >
		
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
					<h3 class="center-align dosisbold">Inica Sesión</h3>
				</div>
				<div class="row">
					<form action="/sessionclient" method="POST">
						<div class="row">
							<div class="input-field col s12 m12 l12">
								<label for="correo">Correo Electronico</label>
								<input type="text" name="correo" id="correo">
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
			</div>
		</section>
		<script src="https://code.jquery.com/jquery-2.1.4.min.js" ></script>
		<script src="/assets/js/materialize.js"></script>
		<script src="/assets/js/init.js"></script>
		</script>
		
	</body>
</html>