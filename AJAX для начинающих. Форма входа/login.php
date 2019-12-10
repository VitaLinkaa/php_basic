<?php 
	error_reporting(-1);

	$login = $_POST['login'];
	$login = trim($login);
	$pass = $_POST['pass'];
	$pass = trim($pass);

	if ($login == '' OR $pass = '') {
		setcookie("login", "", time() - 3600);
		echo 0;
	} elseif ($login == "ivan" AND $pass == "1234") {
		setcookie("login", "ivan", time() + 3600);
		echo "1";
	} 
	else {
			setcookie("login", "", time() - 3600);
		}
	
?>