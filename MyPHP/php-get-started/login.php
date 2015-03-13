<?php
session_start();
$name = '';
$password = '';
if(isset($_POST['submit']))
{
	$ok = true;
	if (!isset($_POST['name']) || $_POST['name'] === '')
		$ok = false;
	else
		$name = $_POST['name'];
	if(!isset($_POST['password']) || $_POST['password'] ==='')
		$ok = false;
	else
		$password = $_POST['password'];

	if($ok)
	{
		$db = mysqli_connect('localhost' ,'root', '', 'php');
		$sql = sprintf("SELECT * from users where name='%s'",
			mysqli_real_escape_string($db, $name)
			);
		$result = mysqli_query($db, $sql);
		$row = mysqli_fetch_assoc($result);
		if(!$row)
			echo "<p>Login Unsuccessful</p>";
		else
		{
			$hash = $row['Password'];
			if(password_verify($password, $hash))
			{
				$_SESSION['user'] = $row['name'];
				$_SESSION['isAdmin'] = $row['isAdmin'];
				echo "<p>Login Successful</p>";
			}
			else
				echo "<p>Login Unsuccessful</p>";
		}
		mysqli_close($db);
	}
}

?>
<!DOCTYPE html>
<html>
<head>
	<title>PHP</title>
</head>
<body>
	<form method="post" action="">
		User Name: <input type="text" name="name" value="<?php echo htmlspecialchars($name);?>"><br>
		Password: <input type="password" name="password"><br>
		<input type="submit" name="submit" value="Submit">			
	</form>
</body>
</html>