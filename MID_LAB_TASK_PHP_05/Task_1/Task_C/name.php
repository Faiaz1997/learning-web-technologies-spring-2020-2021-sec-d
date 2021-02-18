<!DOCTYPE html>
<html>
<head>
	<title>Name Input</title>
</head>
<body>
	<form method="post" action="#">
		<fieldset>
			<legend>Name</legend>
			Name: <input type="text" name="name" value="<?php if(isset($_POST['name'])){ echo $_POST['name'];} ?>"> <br>
			<input type="submit" name="submit" value="Submit">
		</fieldset>
	</form>
	
</body>
</html>