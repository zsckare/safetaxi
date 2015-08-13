<div id="registrarse" class="card mostrar" >
	<div class="container">
		<div class="row">
			<h4 class="center-align yanone" style="">Resgistrate</h4>
			<p class="center-align dosis" style="">Alianza Taxi Seguro</p>
		</div>
		<div class="row">
			<div class="col s10 m10 l2  offset-l5 offset-m1 offset-s1">
				<img src="/assets/img/btnfb.png" alt="" class="responsive-img">
			</div>
		</div>
	
		<div class="row">
			<form action="" id="formulario" name="registro" onsubmit="registrar(); return false" >
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
						<div class="col s3 m3 l3 offset-s4 offset-m4 offset-l3">
							<input type="submit" class="btn blue darken-4"  value="Registrarse">
						</div>
					</div>
				</div>
			</form>
		</div>
		<div class="row">
			<div class="center-align">
				Ya Tienes Cuenta... <div class="login" onclick="showIniciarSesion();" >Inicia Sesion</div>
			</div>
		</div>
	</div>
</div>


<div id="login" class="card no-mostrar">
	<div class="container">
		<div class="row">
			<h3 class="center-align">Iniciar Sesion</h3>
		</div>
		<form action="" id="iniciarsesion" name="iniciarsesion"  >
			<div class="row padding-largo">
				<div class="row">
					<div class="input-field">
						<label for="correo">Correo Eletronico</label>
						<input type="text" id="correo" name="correo" >
					</div>
				</div>
				<div class="row">
					<div class="input-field">
						<label for="correo">Contraseña</label>
						<input type="password" id="pass" name="pass">
					</div>
				</div>
				<div class="row"></div>
			</div>
		</form>
	</div>
</div>