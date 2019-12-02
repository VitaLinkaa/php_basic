<?php 
	error_reporting(-1);
?>

<?php 

	// if(!empty($_POST)) {
	// 	echo "<pre>";
	// 	print_r($_POST);
	// 	echo "</pre>";
	// }

	// if(!empty($_GET)) {
	// 	echo "<pre>";
	// 	print_r($_GET);
	// 	echo "</pre>";
	// }

	// если не пустой массив $_POST, выведи его


	if(isset($_POST['submit'])){
		echo "<pre>";
		print_r($_POST);
		echo "</pre>";
}

// isset - существует, то есть, - если существует в масииве POST кнопка submit? выведи массив

	?>



<div>
	<a href="index.php">BACK</a>
</div>


