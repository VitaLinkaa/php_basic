
<?php 
	error_reporting(-1);
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title> Массивы</title>
</head>
<body>
	<?php 

	$arr = array("Ivd", 're',  2.3, true );
	var_dump($arr) ;


	echo '<pre>';
		print_r($arr);
	echo '</pre>';

	$array = [2 => "Ivanov", 0 => 'Petrov',  2.3, true ];
	print_r($array);
	echo "<br>";
	$arrays = [2 => "Ivanov", 0 => 'Petrov',  2.3, true ];
	
	$arrays [23] = "new";
	print_r($arrays);



	$goods = [
		[
			"title"  => "Nokia",
			"price" => "100",
			"description" => "Description"
		], 
		[
			"title"  => "Iphone",
			"price" => "100", 
			"description" => "Description"
		]
	];
	

	echo '<pre>';
	print_r($goods);
	echo '</pre>';

	$i = 0;
	while($i < 2) {
		echo $goods[$i]["price"];
		echo "<br>";
		$i++;
	}
	echo count($goods, 1);


	echo"<h1>Функции для работы с []</h1>";
	$names = [2 => "Oliy", "Katya", "Vika" ];
	echo count($names);
	echo "<br>";

	print_r(array_keys($names));
	echo "<br>";
	print_r(array_values($names));

	?>;
	
	


</body>
</html>

