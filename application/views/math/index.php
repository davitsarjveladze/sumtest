<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport"
		  content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Math</title>
</head>
<body>
	<form action="/math" method="post">
		<label for="num1">პირველი რიცხი</label>
		<input type="number" id="num1" name="num1">
   		<small><?php echo form_error('num1')?></small>

		<label for="num2">მეორე რიცხვი</label>
		<input type="number" id="num2" name="num2">
   		<small><?php echo form_error('num2')?></small>

		<button type="submit">გაგზავნა</button>
	<?php echo form_close()?>

	<?php  if (isset($_SESSION['sum'])): ?>
		 <?= $_SESSION['sum']?>
	<?php  endif; ?>

</body>
</html>
