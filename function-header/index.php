
<?php 
	error_reporting(-1);
	header('Content-Type: text/html; charset=utf-8');
	// указываем кодировку и тип
	header('Location: external.php');
	// перенаправляет на другой сайт
	header("Refresh: 5; url = external.php");
	// перенаправляет на другую страницу через 5 секунд
	header("HTTP/1.0 404 Not Found");
	// перенаправляет на  404 страницу 
	header("HTTP/1.0 304 Not Modified");
	// чтобы браузер взял страницу из кеша 
	exit;
	// не показывает последующий текст
	die;
	// не показывает последующий текст

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Функция header </title>
</head>
<body>
 <!-- функция header участвует в отправки http-заголовков, в которых храниться важная информация: кодировка, модификация страниц(300, 400, 500; цель страницы, отдаxf на скачивание...) -->


	<?php $var = '00';
		echo $var;
	?>

	

</body>
</html>



