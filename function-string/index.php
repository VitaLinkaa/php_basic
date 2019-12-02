
<?php 
	error_reporting(-1);
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Функции строк</title>
</head>
<body>

	<?php 

	// explode - разбивает строку с помошью разделитеся на []
	$str = "Ivanov Ivan Ivanovich";
	$arr_str = explode(' ', $str);
	print_r($arr_str);

	echo "<br>";

	// implode или join - разбивает [] с помошью разделитеся нa string
	$str_arr = ["Ivanov", "Ivan", "Ivanovich"];
	$arr_str = implode(' ', $str_arr);
	print_r($arr_str);

	echo "<br>";

	// trim - убирает пробели или \n с обеих сторон
	// ltrim -  убирает пробели слева
	// rtrim -  убирает пробели справа
	$str_spases = " \n spaces \n";
	echo trim($str_spases);

	echo "<br>";
	
	// защита данных 
	$str_md5 = "password";
	echo md5($str_md5);

	echo "<br>";
	// замена в строке
	$srt_repl = '[b]Привет[/b]';
	echo str_replace("[b]", "<b>", $srt_repl);

	echo "<br>";
	// замена в строке без учета регистра
	$srt_repl = '[B]Привет[/b]';
	echo str_ireplace("[b]", "<b>", $srt_repl);

	echo "<br>";
	// mb_strlen
	$srt_len = '[Привет';
	echo mb_strlen($srt_len);


	// 
	?>


</body>
</html>



