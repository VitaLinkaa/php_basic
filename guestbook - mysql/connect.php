<?php 

	$bd_guestbook = mysqli_connect("localhost", "root", "", "guestbook") or die(" База данных не найдена ");
	mysqli_set_charset($bd_guestbook, "utf8") or die(" Кодировка не подходит");
?>