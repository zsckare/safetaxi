window.fbAsyncInit = function(){
  FB.init({
    appId      : '861728647246276', 
	cookie	   : true,
    status     : true,
    oauth	   : true,
    xfbml      : true,
    version    : 'v2.4'
  });
}

function LogIn(){

	FB.login(function(response) {
		if (response.authResponse) { 
			window.location.reload();
			}	
		 }, { 
		 	scope: 'email,public_profile'
		}); 
}

function LogOut(){
    FB.getLoginStatus(function(response){
    	if(response.status==='connected'){
    		FB.logout(function(response) {
			window.location.reload();
	});
    	}
    })
}

function estadoActual(){
	var status = document.getElementById("status");
	
		FB.getLoginStatus(function(response) {
			if (response.status === 'connected')
			{
			var token = response.authResponse.accessToken;
			FB.api('/me',{fields:'email,name,id,last_name,first_name, picture'}, function(response) {
			//name = response.name;
			name = response.first_name;
			id = response.id;
			last=response.last_name;
			img="//graph.facebook.com/"+id+"/picture";
			buscar(name,id,last,img);		
					
		});

			}
			else if(response.status === 'not_authorized')
			{
			//window.location.href = "http://miagenda.esy.es/app";
			}
			else
			{
			//window.location.href ="http://miagenda.esy.es/app/signin";
			}
		});
}
function buscador()
{
	var xmlhttp=false;
	try
	{
		xmlhttp=new ActiveXObject("MSxm2.XMLHTTP");
	}
	catch(e)
	{
		try
		{
			xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
		}
		catch(E)
		{
			xmlhttp=false;
		}
	}
	if(!xmlhttp && typeof XMLHttpRequest != 'undefined')
	{
		xmlhttp=new XMLHttpRequest();
	}
	return xmlhttp;
}
function buscar(nombre, mail, apellido,img)

{
	var result=document.getElementById("resultados");

	ajax= buscador();
	ajax.open("GET", "../../views/app/datosFB.php?q="+ nombre+"&mail="+mail+"&ape="+apellido+"&img="+img);
	ajax.onreadystatechange =function()
	{
		if(ajax.readyState ==4)
		{
			//result.innerHTML= ajax.responseText;
			window.location.href ="http://" + window.location.hostname+"/app/pedir";
		}
	}
	ajax.send(null);
}
