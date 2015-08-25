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
	

</head>
<body>
	
	<nav class="light-blue top-nav">
	    <div class="light-blue nav-wrapper container" >
		    <a href="" class="brand-logo center " >Taxi Seguro</a>
		    <a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons">menu</i></a>
	    	<ul class="right hide-on-med-and-down">	   			

	    	</ul>
	    
	        <ul class="side-nav" id="mobile-demo">
        		<li><a href="/app/indexdriver">Inicio <i class=" ion-android-home left "></i></a></li>
        		<li><a href="/app/myubicationdriver" >Mi Ubicacion <i class=" ion-android-map left "></i></a></li>
        		<li><a href="/app/servicesdriver">Buscar Servicio <i class="ion-android-car left "></i></a></li>
        		<li><a href="/app/accountdriver">Mi Cuenta <i class="ion-android-person left "></i></a></li>
        		<li><a href="/app/logoutdriver">Cerrar Sesión <i class="ion-android-exit left "></i></a></li>        		
        		<li><a href="/app/aboutdriver">Acerca de <i class="ion-android-alert left "></i></a></li>
      		</ul>	

	    </div>
	</nav>

	<script src="https://code.jquery.com/jquery-2.1.4.min.js" ></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.0/js/materialize.min.js"></script>
    <script src="/assets/js/init.js"></script> 	
	<script src="/assets/js/messages.js"></script>	
    <script src="/assets/js/sweetalert.min.js"></script>
    <script src="/assets/js/appdrivers.js"></script>	
	<script src="http://maps.google.com/maps/api/js?sensor=false"></script>
	<script>
	function getServicios(iddriver) {

		url ="http://yoi.dev/service";
			console.log("trayendo servicios disponibles");
			texto="";

			$.getJSON(url,function(datos){
				$.each(datos.services, function(i, item){
								
				texto+="<div class='row'><div class='col s12 m12 l6 btn-large'><div class='' onclick='mostrarmapa( "+iddriver+","+item.id_servicio+","+item.latitud+","+item.longitud+" )' >"+item.dirfisica+"</div></div></div>";
				});
				$("#tablebody").html(texto);
			});
	}
	</script>
	<section style="margin-top:1em;" class="card padding-largo">
		<?=$yield ?>		
	</section>

	
</body>
</html>