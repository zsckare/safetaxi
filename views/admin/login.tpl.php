<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title><?=$title?></title>
	<link rel="stylesheet" href="/assets/css/materialize.css">
	<link rel="stylesheet" href="/assets/css/style.css">
</head>
<body>

	<section id="">
		<div class="row">
			<div class="col s6 m6 l6 offset-s3 offset-m3 offset-l3">
				<div class="card padding-largo">
					<form action="" method="post">
						<div class="row">
							<div class="input-field col s4 m4 l4 offset-s4 offset-m4 offset-l4">
								<label for="us">Usuario</label>
								<input type="text" name="user" class="user_data">	
							</div>
						</div>
						<div class="row">
							<div class="input-field col s4 m4 l4 offset-s4 offset-m4 offset-l4">
								<label for="pass">Contraseña</label>
								<input type="password" name="password" class="password_data">
							</div>
						</div>
						<div class="row">
							<div class="center-align">
								<input type="submit" id="submit-form" class="btn primary">
							</div>							
						</div>
						
					</form>
				</div>
			</div>
		</div>
		
	</section>

	<script src="https://code.jquery.com/jquery-2.1.4.min.js" ></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.0/js/materialize.min.js"></script>
	<script src="/assets/js/ajax.js"></script>


	
</body>
</html>