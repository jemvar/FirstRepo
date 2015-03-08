<!DOCTYPE html>
<html>
<head>
	<title>PHP</title>
</head>
<body>
	<?php
		$name = '';
		$gender = '';
		$colour = '';
		$comments = '';
		$tc = '';
		$languages = array();
		if(isset($_POST['submit']))
		{
			$ok = true;
			if (!isset($_POST['name']) || $_POST['name'] === '')
				$ok = false;
			else
				$name = $_POST['name'];
			if (!isset($_POST['password']) || $_POST['password'] === '')
				$ok = false;
			if (!isset($_POST['gender']) || $_POST['gender'] === '')
				$ok = false;
			else
				$gender = $_POST['gender'];
			if (!isset($_POST['colour']) || $_POST['colour'] === '')
				$ok = false;
			else
				$colour = $_POST['colour'];
			if (!isset($_POST['comments']) || $_POST['comments'] === '')
				$ok = false;
			else
				$comments = $_POST['comments'];
			if (!isset($_POST['tc']) || $_POST['tc'] === '')
				$ok = false;
			else
				$tc = $_POST['tc'];
			if (!isset($_POST['languages']) || !is_array($_POST['languages']) || count($_POST['languages']) === 0) 
				$ok = false;
			else
				$languages = $_POST['languages'];

			if($ok)
			{
				printf('UserName: %s <br>
					   Password: %s <br>
					   Gender: %s <br>
					   Color: %s <br>
					   languages: %s <br>
					   Comments: %s <br>
					   T and C: %s <br>'
					   ,htmlspecialchars($name)
					   ,htmlspecialchars($_POST['password'])
					   ,htmlspecialchars($gender)
					   ,htmlspecialchars($colour)
					   ,htmlspecialchars(implode(" ", $languages))
					   ,htmlspecialchars($comments)
					   ,htmlspecialchars($tc)
					   );
			}
		}
	?>
	<form method="post" action="">
		User Name: <input type="text" name="name" value="<?php echo htmlspecialchars($name);?>"><br>
		Password: <input type="password" name="password"><br>
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
		Languages Spoken:
		<select name="languages[]" multiple s ize="3">
			<option value="en" <?php if(in_array("en", $languages)) echo "selected";?>>English</option>
			<option value="fr" <?php if(in_array("fr", $languages)) echo "selected";?>>French</option>
			<option value="it" <?php if(in_array("it", $languages)) echo "selected";?>>Italian</option>					
		</select><br>
		Comments: <textarea name="comments"><?php echo htmlspecialchars($comments);?></textarea><br>
		<input type="checkbox" name="tc" value="ok" <?php if($tc === "ok") echo "checked";?>>I accept T and C<br>
		<input type="submit" name="submit" value="Submit">			
	</form>
</body>
</html>