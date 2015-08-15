<?php 
if ($values==null) {
	echo "string";
}else{
	$password=Security::getEncrypt($pass);
	$pasbd="";
	$type="client";
	$name="";
	foreach ($values as $row) {

		$pasbd=$row['password'];
		$name=$row['correo'];
		
	}

	echo $password."<br>".$pasbd;
}
	if ($password==$pasbd) {
		$_SESSION['user']=$name;
		$_SESSION['type']=$type;
		Redirection::go('app');
	}else{
		session_destroy();
		Redirection::go('app');
	}
	


?>
