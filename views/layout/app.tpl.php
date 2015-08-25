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
	<!--Scripts de Facebook-->
	<script src="//connect.facebook.net/es_ES/sdk.js"></script>
	<script src="/assets/js/autenticacion.js" ></script>
	
	
</head>
<body >
	
	<nav class="light-blue top-nav">
	    <div class="light-blue nav-wrapper container" >
		    <a href="" class="brand-logo center " >Taxi Seguro</a>
		    <a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons">menu</i></a>
	    	<ul class="right hide-on-med-and-down">	   			
        		<li><a href="" onclick="menu(1);">Inicio <i class="left small  material-icons">home</i></a></li>
        		<li><a href="" onclick="menu(2);">Mi Ubicacion <i class="left small  material-icons">ic_map</i></a></li>
        		<li><a href="" onclick="menu(3);">Buscar Chofer <i class="left  small material-icons">local_taxi</i></a></li>
        		<li><a href="" onclick="menu(4);">Mi Cuenta <i class="left small material-icons">perm_identity</i></a></li>
        		<li><a href="" onclick="menu(5);">Acerca de <i class="left  small material-icons">info_outline</i></a></li>
	    	</ul>
	    
	        <ul class="side-nav" id="mobile-demo">
        		<li><a href="/app/">Inicio <i class=" ion-android-home left "></i></a></li>
        		<li><a href="/app/myubication" >Mi Ubicacion <i class=" ion-android-map left "></i></a></li>
        		<li><a href="/app/pedir">Buscar Chofer <i class="ion-android-car left "></i></a></li>
        		<li><a href="/app/account">Mi Cuenta <i class="ion-android-person left "></i></a></li>
        		<li><a href="/app/logout" onclick="LogOut();">Cerrar Sesión <i class="ion-android-exit left "></i></a></li>        		
        		<li><a href="/app/about">Acerca de <i class="ion-android-alert left "></i></a></li>
      		</ul>	

	    </div>
	</nav>

	<section style="margin-top:1em;" class="">
		<?=$yield ?>
		
	</section>

	<script src="https://code.jquery.com/jquery-2.1.4.min.js" ></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.0/js/materialize.min.js"></script>
    <script src="/assets/js/init.js"></script>
    <script src="/assets/js/pasgen.js"></script>    
	<script src="/assets/js/messages.js"></script>	
    <script src="/assets/js/sweetalert.min.js"></script>
	<script src="/assets/js/appmovil.js"></script>
	<script>
		url ="http://yoi.dev/client";
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
	<script src="http://maps.google.com/maps/api/js?sensor=false"></script>
    </script>



	
</body>
</html>