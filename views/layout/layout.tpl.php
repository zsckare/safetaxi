<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title><?=$title ?></title>
	<link rel="stylesheet" href="/assets/css/materialize.css">
	<link rel="stylesheet" href="/assets/css/style.css">
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<link rel="stylesheet" href="http://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
</head>
<body>
	<header>
		<nav class="primary" >
		    <div class="primary nav-wrapper container">
		      <a href="/home" class="brand-logo">Taxi Seguro</a>
		      <a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons">menu</i></a>
		      <ul class="right hide-on-med-and-down">
		      	<li><a href="/home">Inicio</a></li>
		      	<li><a href="/drivers">Taxistas</a></li>		       
		      </ul>
		      <ul class="side-nav" id="mobile-demo">
		        <li><a href="/home">Inicio</a></li>
		        <li><a href="/drivers">Taxistas</a></li>
		      </ul>
		    </div>
		  </nav>
	</header>

	<div class="container">
		<div class="row">
			<div class="col s12 m12 l12">
				<div class="card">
					<?=$yield ?>
				</div>
			</div>
		</div>
	</div>

	<script src="http://code.jquery.com/jquery-2.1.4.min.js"></script>
    <script src="/assets/js/materialize.js"></script>
    <script src="/assets/js/init.js"></script>
    <script src="/assets/js/pasgen.js"></script>
</body>
</html>
