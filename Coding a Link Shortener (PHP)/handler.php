<?php
	// header('Location: handler.php');

	// $longLink = 'aAbBcCdDeEfFgGhHiIjJkKlLmMnNoOpPqQrRsStTuUvVwWxXyYzZ0123456789';
 // 	$shotLink = substr(str_shuffle($longLink), 0,5);
 // 	$site = "http://test.com/";
 // 	$url = $_POST['url'];

 // 	if($_POST['submit']) {
 // 		echo "<a href='$site$shotLink'>$site$shotLink<a/>"
 // 	}

// echo "<a href='$site$rand' target='_blank'>$site$rand</a>"; 




$h = "QqWwEeRrTtYyUuIiOoPpAaSsDdFfGgHhJjKkLlZzXxCcVvBbNnMm1234567890"; //Выбираем символы, из которых будет состоять наш рандом
$rand = substr(str_shuffle($h), 0, 5); //создаём ранд. Цифра 5 обозначает длину ранда
$site = "http://test.com/"; //Адрес вашего сайта. Слэш обязателен!
$url = $_POST['url'];

 

if ($_POST['submit']) {
echo "<a href='$site$rand' target='_blank'>$site$rand</a>"; //выводим пользователю ссылку, в виде ссылки

$f = fopen("a/$rand.php", "w"); //Создаём файл с именем ранда. Я решил скидывать файлы в каталог a, поэтому не забудьте его создать!
fwrite($f, "<?php header('Location: $url') ?>"); //И записываем в код редиректа, с ссылкой которую ввёл пользователь
fclose($f); //Закрываем файл


$fh = fopen(".htaccess", "a"); //Открываем файл .htaccess с дозаписью на последний байт

fwrite($fh, "
RewriteRule ^$rand$ /a/$rand.php"); //Записываем ссылку на файл в каталоге a и её сокращённый вариант, который был дан пользователю. !ВНИМАНИЕ! Перенос сделан специально, иначе всё будет писаться в плотную и вызовет 500 ошибку!

fclose($fh); //Закрываем файл

}


	?>