
<?php 
	error_reporting(-1);
	if(!empty($_POST)) {
		echo "<pre>";
		print_r($_POST);
		echo "</pre>";
	}

	if(!empty($_GET)) {
		echo "<pre>";
		print_r($_GET);
		echo "</pre>";
	}
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>GET and POST</title>
</head>
<body>
	<form action="index.php" method="post">
		<p>	<input type="text" name="name"></p>
		<p><textarea name="textarea"></textarea></p>
		<p><input type="checkbox" name="checkbox"></p>
		<select name="select-lang[]" multiple="">
			<option value="eng">English</option>
			<option value="uk">Українська</option>
			<option value="ru">Русский</option>
		</select>
		<p><button type="submit" name="submit" value="test">Send</button> </p>
	</form>
	<!-- name="select-lang[]" - указываем, что select-lang[] - это массив, для multiple-->

	<a href="index.php?name=Петя&amp;test=12">link</a>

	<hr>
	<p>
		Введенное имя: <?php 
		if(isset($_POST['name'])) echo $_POST['name']; else echo "Имя не введенно";
		?>

	</p>
	<p>Введенное текст: <?php 
		if(isset($_POST['textarea'])) echo $_POST['textarea']; else echo "Текст не введен";
		?>
	</p>

	<p>Галочка: <?php 
		if(isset($_POST['checkbox']) && $_POST['checkbox'] === 'on') echo 'Галочка присутствует'; else echo "Галочка не присутствует";
		?>
	</p>


</body>
</html>



