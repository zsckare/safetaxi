<!DOCTYPE html>
<html lang="es">
<head>
	
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no"/>
	<title><?=$title ?></title>
	<link rel="stylesheet" href="/assets/css/materialize.css">
	<link rel="stylesheet" href="/assets/css/style.css">
	<link rel="stylesheet" href="/assets/css/styles.css">
	<link rel="stylesheet" href="http://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
	<link href='http://fonts.googleapis.com/css?family=Roboto' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Slabo+27px' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" type="text/css" href="/assets/css/sweetalert.css">


	<script src="http://code.jquery.com/jquery-2.1.4.min.js"></script>
    <script src="/assets/js/materialize.js"></script>
    <script src="/assets/js/init.js"></script>
    <script src="/assets/js/sweetalert.min.js"></script>
	<style>
		html,body{
			overflow: hidden;
		}	
	</style>
</head>
<body>
	<header>
		<nav class="be-white top-nav"style="margin-left:240px;">
		    <div class="be-white nav-wrapper" >
		      <a href="/home" class="brand-logo be-black" style="margin-left:30px;">Taxi Seguro</a>
		      <ul class="" style="margin-left:62em !important;">
		      	<li><a href="/logout" class="be-black">Cerrar Sesion <i class=" left material-icons">input</i></a></li>
		      </ul>
		      
		    </div>
		  </nav>
		
		<div class="menulateral">
			<div class="logo" style="padding: 1em !important;">
				<div class="row">
					<div class="col s8 m8 l8 offset-s2 offset-m2 offset-l2">
						<img src="/assets/img/logo.png" alt="" class="responsive-img">
					</div>
				</div>
			</div>
			<ul class=" fixed">
		        <li><a href="/home">Inicio <i class="left ion-home"></i></a></li>
		        <li><a href="/drivers">Taxistas <i class="left material-icons">supervisor_account</i></a></li>	
		        <li><a href="/cars">Autos <i class="left material-icons">local_taxi</i></a></li>
		        <li><a href="/base">Bases <i class="left material-icons">business</i></a></li>
		        <li><a href="/fotos">Fotos <i class="left material-icons">collections</i></a></li>
		        
		   </ul>
		</div>
		 
	</header>

<div style="margin-left:240px;"	>
	
		<div class="container">
			<div class="row">
				<div class="col s12 m12 l12">
					<div class="card">
						<?=$yield ?>
					</div>
				</div>
			</div>
		</div>
</div>

    <script src="/assets/js/pasgen.js"></script>
    <script src="/assets/js/modalfotos.js"></script>
    <script src="/assets/js/busqueda.js"></script>
</body>
</html>
