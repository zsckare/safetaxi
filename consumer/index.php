<html>
	<head>
		<meta charset="UTF-8" >
		<title>Problema</title>
		<link rel="StyleSheet" href="estilos.css" type="text/css">
		<script type="text/javascript" src="http://code.jquery.com/jquery-2.1.4.min.js"></script>
	</head>
	<body>
		<form action="" id="formulario" name="registro" onsubmit="registrar(); return false" >
			<input type="text" name="nombre" id="nombre"><br>
			<input type="text" name="paterno" id="paterno"><br>
			<input type="text" name="materno" id="materno"><br>
			<input type="text" name="correo" id="correo"><br>
			<input type="text" name="pass" id="pass"><br>
			<input type="submit" id="send" value="Add">
		</form>

	<script>
	function registrar() {
		
	var ajax = new XMLHttpRequest();
	nombre=document.registro.nombre.value;
  	paterno=document.registro.paterno.value;
  	materno=document.registro.materno.value;
  	correo=document.registro.correo.value;
  	pass=document.registro.pass.value;

  	ajax.open("POST","safetaxi.esy.es/client/new",true);
  	ajax.onreadystatechange=function () {
  		if (ajax.readyState==4){
  			console.log("!!!!!!!!!!!!!!!!");
  		}
  	}
  	
  	ajax.setRequestHeader("Content-Type","application/x-www-form-urlencoded");
  	//enviando los valores a registro.php para que inserte los datos
  	ajax.send("nombre="+nombre+"&paterno="+paterno+"&materno="+materno+"&correo="+correo+"&pass="+pass);
	}
	</script>
		
	</body>
</html>