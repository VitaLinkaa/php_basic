
<?php 
	error_reporting(-1);
	require_once 'external.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Функции</title>
</head>
<body>

<?php
// подключеник файла рекомендуется через require_once (выдает FATAL_ERRROR,
// в случае неправильного подключения), но возможно через include(при этом, дальнейший код работает - не рекoмендуется)

// находим ключи через пользовательскую функцию

$arr = ['Ivan', 'Ivanov', 'Oleh', 23, true];
print_r($arr);
echo "<br>";
print_r(count($arr));
echo "<br>";
print_r(array_keys($arr));
echo "<br>";
print_r(array_values($arr));
echo "<br>";
echo is_array($arr);
echo "<br>";
echo "<br>";


function get_arr_keys($arr) {
    $new_arr = [];
    foreach($arr as $k => $v) {
        $new_arr[] = $k;
    }
    return $new_arr;
}

print_r(get_arr_keys($arr));

$new_get_array = get_arr_keys($arr);
print_r($new_get_array);

?> 

	


</body>
</html>



