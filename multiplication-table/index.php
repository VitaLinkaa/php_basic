
<?php 
	error_reporting(-1);
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Таблица умножения</title>
</head>
<body>

	<?php 

	$row = 1;
	echo "<table border = '1'>\n";
	
	while($row <= 10) {
		echo "\t<tr>\n";
			$col = 1;
			while($col <= 10) {
			echo "\t\t<td> $row * $col = ".  $row * $col . "</td> \n";

			$col++;
		}
		echo "\t</tr>\n";
		$row++;
	}
	
echo "</table>";
	?>


</body>
</html>



