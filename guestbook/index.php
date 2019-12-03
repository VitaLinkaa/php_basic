<?php
error_reporting(-1);

require_once 'functions.php';

if (!empty($_POST)) {
	save_mess();
	header("Location: {$_SERVER['PHP_SELF']}");
	exit;
}

$message = get_mess();
$message = arr_mess($message);
// print_r($message);

?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<title>Guestbook</title>
	<style>
		.messages {
			border: 1px solid red;
			padding: 10px;
			margin-bottom: 20px;

		}
	</style>
</head>

<body>
	<form action="index.php" method="post">
		<label for="name">Имя:</label><br>
		<input type="text" name="name" id="name"><br>
		<br>
		<label for="text">Текст:</label> <br>
		<textarea type="text" name="text" id="text"></textarea><br>
		<br>
		<button type="submit">Send</button>
	</form>

	<hr>

	<?php if (!empty($message)) : ?>
		<?php foreach ($message as $item) : ?>
			<?php $item = get_format_mess($item);?>
			<div class="messages">
				<p>Автор: <?= $item[0] ?>| Дата: <?= $item[2] ?></p>
				<div>Текст:<?= nl2br(htmlspecialchars($item[1])) ?></div>
			</div>
		<?php endforeach; ?>

	<?php endif; ?>

</body>

</html>


<!-- Гостевая книга - 2 поля и кнопка отправки -->