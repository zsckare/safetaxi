<!DOCTYPE html>
<html lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no"/>
	<title><?=$title?></title>
	<!--   Fonts   -->

	<link href='http://fonts.googleapis.com/css?family=Dosis' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Yanone+Kaffeesatz' rel='stylesheet' type='text/css'>

	<!--css-->
	<link rel="stylesheet" href="/assets/css/materialize.css">
	<link rel="stylesheet" href="/assets/css/style.css">
	<link rel="stylesheet" href="/assets/css/styles.css">
	
</head>
<body>
	
	<nav class="light-blue top-nav">
	    <div class="light-blue nav-wrapper container" >
		    <a href="" class="brand-logo center be-black" >Taxi Seguro</a>
		    <a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons">menu</i></a>
	    	<ul class="right hide-on-med-and-down">	   			
        		<li><div class="link" >Inicio</a></li>
        		<li><div class="link" >Inicio</a></li>
	    	</ul>
	    
	        <ul class="side-nav" id="mobile-demo">
        		<li><a href="">Inicio</a></li>
        		<li><a href="">Buscar Chofer</a></li>
        		<li><a href="">Mi Cuenta</a></li>
        		<li><a href="">Acerca de</a></li>
      		</ul>	

	    </div>
	</nav>

	<section style="margin-top:1em;" class="">
		<?=$yield ?>
		
	</section>

	<script src="https://code.jquery.com/jquery-2.1.4.min.js" ></script>
	<script src="/assets/js/materialize.js"></script>
    <script src="/assets/js/init.js"></script>
    <script src="/assets/js/pasgen.js"></script>    
	<script src="/assets/js/messages.js"></script>

	<script src="/assets/js/appmovil.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.0/js/materialize.min.js"></script>
	<script>
		url ="http://safetaxizsckare.esy.es/client";
		$(document).on("ready",main	);
		function main () {
			$("#get").on("click", function () {
				console.log("funciona evento");
				var texto = "";
				var items = [];
				var tags="dog";
				$("#loader").removeClass("no-mostrar");
				$("#loader").addClass("mostrar");
				$("#clientes").addClass("no-mostrar");
				$.getJSON(url,function(datos) {
					texto+="<div class='panel panel-default'> <div class='panel-body padding-largo'>"
					$.each(datos.items, function (i, item) {
						console.log("nombre"+item.nombre);
						texto += "<p>"+ item.nombre +" "+ item.paterno +" "+ item.materno + " - "+ item.correo+"</p>";
					});
					texto+="</div></div>"
					$("#loader").removeClass("mostrar");
					$("#loader").addClass("no-mostrar");

					$("#clientes").removeClass("no-mostrar");
					$("#clientes").addClass("mostrar");
					$("#clientes").html(texto);
				});
			});
		}
	</script>


	
</body>
</html>