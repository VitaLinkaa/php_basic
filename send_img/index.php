
<?php 

	error_reporting(-1);

		echo "<pre>";
		print_r($_SERVER);
		echo "</pre>";

	if(isset($_POST['send'])) {
		echo "<pre>";
		print_r($_POST);
		echo "</pre>";
	}

	if(!empty($_FILES)) {
		echo "<pre>";
		print_r($_FILES);
		echo "</pre>";

		// move_uploaded_file - функция для загрузки файлов

	move_uploaded_file($_FILES['file']['tmp_name'],'upload/' . $_FILES['file']['name']);
	move_uploaded_file($_FILES['file']['tmp_name'],'upload/test.jpg');
	}
	// phpinfo();


?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Send files</title>
</head>
<body>
	<form action="" 
		method="post" 
		enctype="multipart/form-data">
			<p>Отправка картинки на сервер</p>
			<p><input type="file"  name='file'></p>
			<p><button type="submit" name="send">Submit</button></p>
	</form>



</body>
</html>



