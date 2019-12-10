<?php

$gb = mysqli_connect("127.0.0.1", 'root', '', "guestbook") or die("Ошибка");

// var_dump($gb);

// var_dump(mysqli_connect_error());


// if(!$gb) {
// 	echo die(mysqli_connect_error());
// }

// echo "<pre>";
// var_dump($gb);
// echo "</pre>";


// mysqli_set_charset($gb, 'utf8') or die("Кодировка не найдена");

// $insert  = "INSERT INTO `gb` (id, name, text) VALUES('4', 'Lile', 'khf')";
// // в $insert засовываем запрос
// $insert_rez = mysqli_query($gb, $insert);

// $delete = "DELETE FROM `gb` WHERE id = 4";
// $del_res =  mysqli_query($gb, $delete);

// $update = "UPDATE gb SET text = CONCAT(text, '!!!') WHERE id = 1";
// $update_res =  mysqli_query($gb, $delete) or die(mysqli_error($gb));

// if($update_res) echo "OK update name";
// else echo "Error";


// if($del_res) echo "OK";
// else echo "Error";

// if($insert_rez) echo "OK";
// else echo "Error";

// echo "<pre>";
// var_dump($insert_rez);
// echo "</pre>";


// $delete2 = "DELETE FROM `gb` WHERE id = 0";
// $del_res2 =  mysqli_query($gb, $delete2);

// echo mysqli_affected_rows($gb);

function arr_print($arr) {
	echo "<pre>" . print_r($arr, true) . "</pre>";
}

$res = mysqli_query($gb, "SELECT name, text  FROM `gb` ORDER BY id DESC");
// var_dump($res);

$data = mysqli_fetch_all($res, MYSQLI_ASSOC);
foreach ($data as $item) {
	echo "Name: {$item['name']} <br>";
	echo "Text: {$item['text']} <br>";
}
arr_print($data);

