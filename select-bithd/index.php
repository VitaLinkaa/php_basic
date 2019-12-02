
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
	<h3>Выпадающий option по дате роджения</h3>

	<?php 
		$count = 1900;
		$current = 2019;

		echo "<select>";

		while($count <= $current) {
			echo "<option value = {$count}>$count</option>";
			$count++;
		}

		echo "</select>";

		echo nl2br("\r\n");
	?>
</body>
</html>
	

