<?php 
	session_start();
	define('ADMIN', '14041991v');

	if(!empty($_POST['login'])) {
		if($_POST['login'] === ADMIN){
			$_SESSION['admin'] = ADMIN;
			$_SESSION['rez'] = "Вы успешно авторизовались";
		} else {
			$_SESSION['err'] = "Нeверный логин";
		
	}

	header("Location: sess1.php");
	die;
	}

?>
	<ul>
		<li><a href="sess1.php">Session 1</a></li>
		<li><a href="sess2.php">Session 2</a></li>
		<li><a href="secret.php">Secret</a></li>
	</ul>
	<hr>

	<?php 
	if(isset($_SESSION['rez'])) {
		echo $_SESSION['rez'];
		unset($_SESSION['rez']);
	}

	?>


	<form action="" method="post">
		<input type="text" name="login">
		<button type="submit">Login</button>
		
	</form>