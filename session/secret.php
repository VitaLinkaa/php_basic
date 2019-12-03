<?php 
	session_start();

	if(isset($_GET['do'] && $_GET['do']) === 'exit') {
		unset($_SESSION['admin']);
	} 


	if(!isset($_SESSION['admin']) ) die("Вы не авторизованы!");
		echo "Добро пожаловать, {$_SESSION['admin']}";
	

?>
	<ul>
		<li><a href="sess1.php">Session 1</a></li>
		<li><a href="sess2.php">Session 2</a></li>
		<li><a href="secret.php">Secret</a></li>
	</ul>

	<a href="secret.php?do=exit">LogOut</a>