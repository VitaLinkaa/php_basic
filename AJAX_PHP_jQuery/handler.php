<?php 
	include $_SERVER['DOCUMENT_ROOT'] . 'includes/init.php';
	include $_SERVER['DOCUMENT_ROOT'] . 'includes/function.php';

	$id = rand(111,999);
	$url = $_POST['url'];

	if(idExists($id) == true){
		$id = rand(111,999);
	}


	if(urlHasBeenShortened($url)){
		echo 'http://test/AJAX_PHP_jQuery/?id=' . getURLID($url);
		return true;
	}

	insertID($id, $url);

	echo 'http://test/AJAX_PHP_jQuery/?id=' . $id;
?>