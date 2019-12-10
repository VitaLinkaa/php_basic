<?php
error_reporting(-1);


// ??
	echo $user = isset($_GET['user']) ? $_GET['user'] : "not found user";
	echo nl2br("\n");
	echo $name = $_GET['name'] ?? "Not found name";

	echo "<hr>";

// spaceship
	$a = 6;
	$b = 10;

	if(($a <=> $b) === -1) {
		echo "$a < $b = -1";
	}

	echo "<hr>";


