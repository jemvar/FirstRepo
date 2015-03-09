<!DOCTYPE html>
<html>
<head>
	<title>PHP</title>
</head>
<body>
	<?php
		readfile('navigation.html');
		if(isset($_GET['id']) && ctype_digit($_GET['id']))
			$id = $_GET['id'];
		else
			header('Location: db_read.php');
		$name = '';
		$gender = '';
		$colour = '';
		if(isset($_POST['submit']))
		{
			$ok = true;
			if (!isset($_POST['name']) || $_POST['name'] === '')
				$ok = false;
			else
				$name = $_POST['name'];
			if (!isset($_POST['gender']) || $_POST['gender'] === '')
				$ok = false;
			else
				$gender = $_POST['gender'];
			if (!isset($_POST['colour']) || $_POST['colour'] === '')
				$ok = false;
			else
				$colour = $_POST['colour'];

			if($ok)
			{
				$db = mysqli_connect('localhost' ,'root', '', 'php');
				$sql = sprintf("UPDATE users SET name='%s', gender='%s', color='%s' WHERE id='%s'",
							   mysqli_real_escape_string($db, $name),
							   mysqli_real_escape_string($db, $gender),
							   mysqli_real_escape_string($db, $colour),
							   $id
							   );
				mysqli_query($db, $sql);
				mysqli_close($db);
				echo "<p>User Updated</p>";
			}
			else
			{
				$db = mysqli_connect('localhost' ,'root', '', 'php');
				$sql = sprintf("SELECT * FROM users WHERE id=%s", $id);
				$result = mysqli_query($db, $sql);
				foreach($result as $row)
				{
					$name = $row['name'];
					$gender = $row['gender'];
					$colour = $row['color'];
				}
				mysqli_close($db);

			}
		}
	?>
	<form method="post" action="">
		User Name: <input type="text" name="name" value="<?php echo htmlspecialchars($name);?>"><br>
		Gender:
		<input type="radio" name="gender" value="f" <?php if($gender === "f") echo "checked";?>>female
		<input type="radio" name="gender" value="m" <?php if($gender === "m") echo "checked";?>>male<br>
		Favourite Color:
		<select name="colour">
			<option value="">Please Select a Colour</option>
			<option value="#f00" <?php if($colour === "#f00") echo "selected";?>>red</option>
			<option value="#0f0" <?php if($colour === "#0f0") echo "selected";?>>green</option>
			<option value="#00f" <?php if($colour === "#00f") echo "selected";?>>blue</option>
		</select><br>
		<input type="submit" name="submit" value="Submit">			
	</form>
</body>
</html>