<?php

	if(isset($_POST['submit']))
    {

		$dob 		= $_POST['dob'];

		if($dob == "")
        {
			echo "Null submission...";
		}else{
			echo "Date of Birth: ",$dob;
		}
	}

?>
<!DOCTYPE html>
<html>
<head>
	<title>DOB Input</title>
</head>
<body>
	<form method="post" action="#">
		<fieldset>
			<legend>Date of Birth</legend>
			<input type="date" name="dob" value=""> <br>
			<input type="submit" name="submit" value="Submit">
		</fieldset>
	</form>
	
</body>
</html>