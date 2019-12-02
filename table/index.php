
<?php 
	error_reporting(-1);
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Table</title>
</head>
<body>
	
	<?php 

	$i = 1;
	echo "<table border = \"1\">\n";
	while($i <= 10) {
		echo  "\t<tr>\n";

		$n = 1;
		while($n <= 3) {
			echo  "\t\t<td> строка - $i |колонка - $n</td>\n";
			$n++;
		}
		echo "\t</tr>\n";
		$i++;
	}
	echo "</table>";
		
	?>

</body>
</html>
