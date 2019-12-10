

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Link shortener</title>
</head>
<body>
	<form method="post">
		<p><input type="url" name="url" required></p>
		<input type="submit" name="submit" value="Enter your link">Enter your link
	</form>
</body>
</html>

 <?php
	$longLink = "aAbBcCdDeEfFgGhHiIjJkKlLmMnNoOpPqQrRsStTuUvVwWxXyYzZ0123456789";
	$shotLink = substr(str_shuffle($longLink), 0,5);
	$url = $_POST['url'];
	$site = "http://site-name.com/";

	if($_POST['submit']){
	echo "<a href='$site$shotLink' target='_blank'>$site$shotLink</a>"; 

		$fileOpen = fopen("a/$shotLink.php", "w");
		fwrite($fileOpen, "<?php header('Location: $url') ?>"); 
		fclose($fileOpen); 

		$fileCreate = fopen(".htaccess", "a");
		fwrite($fileCreate, "
		RewriteRule ^$shotLink$ /a/$shotLink.php"); 
		fclose($fileCreate);
	}
?> 



	





