<!DOCTYPE html>
<html lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no"/>
	<title><?=$title?></title>
	<link rel="stylesheet" href="/assets/css/materialize.css">
	<link rel="stylesheet" href="/assets/css/style.css">
</head>
<body>
	
	<nav class="be-white top-nav">
	    <div class="be-white nav-wrapper" >
		    <a href="/home" class="brand-logo center be-black" >Taxi Seguro</a>
	    	<ul class="" style="margin-left:62em !important;">
	   			
	    	</ul>		      
	    </div>
	</nav>

	<section style="margin-top:7em;">
		<div class="row">
			<div class="col s12 m8 l8 offset-m2 offset-l2">
				<div class="card padding-largo">
					<form action="/session" method="post">
						<div class="row">
							<div class="input-field col s12 m12 l12">
								<label for="us">Usuario</label>
								<input type="text" name="user" class="user_data">	
							</div>
						</div>
						<div class="row">
							<div class="input-field col s12 m12 l12">
								<label for="pass">Contraseña</label>
								<input type="password" name="password" class="password_data">
							</div>
						</div>
						<div class="row">
							<div class="center-align">
								<input type="submit" id="submit-form" class="btn primary" value="Iniciar Sesion">
							</div>							
						</div>
						
					</form>
				</div>
			</div>
		</div>
		
	</section>

	<script src="https://code.jquery.com/jquery-2.1.4.min.js" ></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.0/js/materialize.min.js"></script>
	


	
</body>
</html>