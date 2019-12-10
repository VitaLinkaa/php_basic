<?php 
	error_reporting(-1);
	
	function save_mess() {
		global $bd_guestbook;
		// $id = mysqli_real_escape_string($bd_guestbook,(int)$_POST['id']);
		$name = mysqli_real_escape_string($bd_guestbook, $_POST['name']);
		$text = mysqli_real_escape_string($bd_guestbook, $_POST['text']);

		$query = "INSERT INTO gb (name, text) VALUES('$name', '$text')";
		mysqli_query($bd_guestbook, $query);
		// mysqli_connect_error($query);

	};

	function get_mess() {
		return file_get_contents('guestbook.txt');
	};

	function arr_mess($message) {
		$message = explode("\n***\n", $message );
		array_pop($message);
		return array_reverse($message);
	}

	function print_arr($arr) {
		echo '<pre>' . print_r($arr, true) . '</pre>';
	}

	function get_format_mess($item) {
		return explode("|", $item);
	}

	
