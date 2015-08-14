<?php
	if($values == null){
		session_destroy();
		echo "string";
	}else{
		foreach($values as $row){
			$user = $row["correo"];
			Cookies::set("complete","Hola Bienvenido: ¡" .$user."!","20-s");
		}

		if(isset($user)){
			Redirection::go("app");
		}else{
			session_destroy();
			Redirection::go("home");	
		}

	}
