<?php 
	error_reporting(-1);


?>


<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Shorten links</title>
</head>
<body>

	<form method="post">
		<p><input type="url" name="url" placeholder="Your link"></p>
		<button type="submit" name="submit">Get the link</button>
	</form>



<?php 

	$longLink = 'aAbBcCdDeEfFgGhHiIjJkKlLmMnNoOpPqQrRsStTuUvVwWxXyYzZ0123456789';
 	$shotLink = substr(str_shuffle($longLink), 0,5);
 	$site = "http://test.com/";
 	$url = $_POST['url'];

 	print_r($_POST['submit']);
?>


</body>
</html>