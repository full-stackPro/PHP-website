<!DOCTYPE html>
<html>
<head>
	<title>Hash Converter</title>
</head>
<body>
<?php
if (isset($_POST['save'])){
	extract($_POST);
	$hashed = password_hash($text, PASSWORD_DEFAULT);
	echo "Your hash code for <b>$text</b> is: ".$hashed;
	?>
	<br>
	<a href="hash.php">Try another one.</a>
	<?php
}

?>
<form method="post">
<input type="text" name="text" autocomplete="off">
<br>
<button name="save" type="submit">Get Hash</button>
</form>
</body>
</html>