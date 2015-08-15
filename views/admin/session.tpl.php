<?php 
if ($values==null) {
	echo "string";
}else{
	$password=Security::getEncrypt($pass);
	echo $password;
	$pasbd="";
	$type="";
	$name="";
	foreach ($values as $row) {
		echo "<br> ".$row['password_user']."<br> ";
		$pasbd=$row['password_user'];
		$type=$row['type_user'];
		$name=$row['name_user'];
		
	}

	if ($password==$pasbd) {
		$_SESSION['user']=$name;
		$_SESSION['type']=$type;

		Redirection::go('home');
	}else{
		session_destroy();
		Redirection::go('home');
	}
}

?>