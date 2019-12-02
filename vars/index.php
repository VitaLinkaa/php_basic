
<?php 
	error_reporting(-1);
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>php</title>
</head>
<body>
	<h3><?php 
	$greeting = 'Работа с PHP данными';
	echo $greeting; 
	?></h3>

	<?php 
	// типы выводов переменных 

		$title = 'Page title';
		$fruit = 'apple';
		$vinie_puh = "Hello, my name is Vinie.";
		$number = 33;
		$numberTwo = 33.6;
		$booleanFalse= false;
		$booleanTrue = true;
		$author = 'Nicolas';

		echo nl2br("\r\n Вывод переменных \r\n");
		print $title;
		echo nl2br(" -  тип: string \r\n");
		echo $number;
		echo nl2br(" -  тип: number \r\n");
		echo $numberTwo;
		echo nl2br(" -  тип: float \r\n");
		echo $booleanTrue;
		echo nl2br(" -  тип: boolean - true(1) \r\n");
		echo $booleanFalse;
		echo nl2br(" -  тип: boolean - false('') \r\n");

// 2 типа выводв констант
		echo nl2br("\r\n 2 типа вывода констант \r\n");

		define("PAGE", "Константа с помощью слова define");
		echo PAGE;
		echo nl2br(" - define('name', 'вывод')\r\n");
		
		const PAGE2 = 'Константа с помощью слова const';
		echo PAGE2;
		echo nl2br(" - const PAGE2 \r\n");
		echo nl2br("\r\n");

// 4 типа данных
		echo nl2br("\r\n Типы данных \r\n");
		$is_boo = false;
		var_dump($is_boo);
		echo nl2br(" - var_dump \r\n");
		echo gettype($is_boo);
		echo nl2br(" - gettype\r\n");
		echo nl2br("\r\n");

		$int = -1;
		var_dump($int);
		echo nl2br(" - var_dump \r\n");
		echo gettype($int);
		echo nl2br(" - gettype\r\n");
		echo nl2br("\r\n");

		$float = 19.6;
		var_dump($float);
		echo nl2br(" - var_dump \r\n");
		echo gettype($float);
		echo nl2br(" - gettype\r\n");
		echo nl2br("\r\n");

		$string  = "this is string";
		var_dump($string);
		echo nl2br(" - var_dump \r\n");
		echo gettype($string );
		echo nl2br(" - gettype\r\n");
		echo nl2br("\r\n");

		echo nl2br(" Вывод массива \r\n");
		$people = ['Steve', 'Lynda', 'John', 'Theresa'];
		var_dump($people);
		echo nl2br(" - var_dump \r\n");
		echo gettype($people);
		echo nl2br(" - gettype\r\n");
		echo nl2br("\r\n");

print <<<HERE
Автор: $author
HERE;
echo nl2br(" Вывод с помощью HEREDOC; \r\n");
echo nl2br("\r\n");

		echo nl2br("\r\n  - NULL - переменная  не существует \r\n ");
		echo nl2br("- NULL -  если задаем самостоятельно \r\n ");
		echo nl2br("- NULL -  если переменная уничтожена unset() \r\n ");
		echo nl2br("\r\n");


		echo nl2br("  Условие - if \r\n");
		$green = 'зеленый';
		if($green == 'зеленый') {
			echo "We can go";
		}
		echo nl2br("\r\n");

		
		var_dump((bool) NULL);






	?>


</body>
</html>

<!-- 1. echo, print  - вывод информации -->
<!-- 2. переменные - где, хранятся данные (буквы, цифры, подчеркивание), переменные перезаписываются, регистрозависимы -->
<!-- 3. error_reporting(-1); - выводит все ошибки, например, когда обращаемся к необьвленой переменной-->
<!-- 4. константы - те значения, которые не меняются
define(название, значение)
именовать в верхнем регистре/ const (как в JS) -->
<!-- 5.$this = '' - эту переменную нельзя занимать -->
<!-- 6. - 8 типов данных  = 
boolean (true, false = var_dump($var) или gettype - узнать тип данных ), 
integer - число , 
float - число с плавающей точкой(именно точка), 
string - "", '', если в строке есть переменные, то такие строки нужно помещять в "$var" или в ($var)-->

