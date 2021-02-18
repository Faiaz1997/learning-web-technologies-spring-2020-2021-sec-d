<?php

	if(isset($_POST['submit']))
    {

		$mail 		= $_POST['mail'];

		if($mail == "")
        {
			echo "Null submission...";
		}else{
			echo "Email: ",$mail;
		}
    }
?>

<!DOCTYPE html>
<html>
<head>
	<title>Email Input</title>
</head>
<body>
	<form method="post" action="#">
		<fieldset>
			<legend>Email</legend>
			Email: <input type="email" name="mail" value=""> <br>
			<input type="submit" name="submit" value="Submit">
		</fieldset>
	</form>
	
</body>
</html>