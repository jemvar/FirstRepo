<!DOCTYPE html>
<html>
<head>
	<title>PHP</title>
</head>
<body>
<?php
	if(isset($_GET['id']) && ctype_digit($_GET['id']))
		$id = $_GET['id'];
	else
		header('Location: db_read.php');
	$db = mysqli_connect('localhost', 'root', '', 'php');
	$sql = "DELETE FROM users where id=$id";
	mysqli_query($db, $sql);
	mysqli_close($db);
	echo "User Deleted";
?>
</body>
</html>