<?php 
	if(isset($_GET['id'])){
		include $_SERVER['DOCUMENT_ROOT'] . 'includes/init.php';
		$id = $_GET['id'];
		$url = getURLLocation($id);

		header('Location: ' . $url)
	}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	<meta charset="UTF-8">
	<title>Shot link</title>
</head>
<body>
	<input type="text" name="url">
	<input type="submit" value="Shorten"><br>
	<p class="err"></p>

	<script>
		$(document).ready(function(){
			$('input[type="submit"]').click(function(e){
				e.preventDefault();

				$('.err').html('Please enter a URL');
				let url = $('input[name="url"]').val();

			if(url.length === 0) {
				$('.err').html('Please enter a URL');
				return false;
				}

				$.post('./handler.php', {
					url: url
				}, function(data, textStatus, xhr){
					$('.err').html('<a href="'+ data +'" target="blank">' + data +'</a>');
				})
			});
		});
		
	</script>
	
</body>
</html>