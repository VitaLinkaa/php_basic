<?php 
	error_reporting(-1);
	
	function save_mess() {
		$str = $_POST['name'] ."|". $_POST['text'] ."|". date('Y-m-d H:i:s') . "\n***\n";
		file_put_contents('guestbook.txt', $str, FILE_APPEND);
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

	
