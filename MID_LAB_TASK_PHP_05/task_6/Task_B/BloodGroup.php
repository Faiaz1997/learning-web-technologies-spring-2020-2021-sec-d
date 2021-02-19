<?php
        if (isset($_POST['submit'])) 
        {
        $bg = $_POST['bg'];
        if($bg=="")
        {
            echo "Invalid Request";
        }
        else
        {
            echo "Blood Group: " , $bg;}
        }
    
?>

<!DOCTYPE html>
<html>
<head>
	<title>Blood Group Input</title>
</head>
<body>
	<form method="post" action="#">
		<fieldset>
			<legend>Blood Group</legend>
            <select name="bg" >
                <option value=""></option>
                <option value="A+">A+</option>
                <option value="A-">A-</option>
                <option value="B+">B+</option>
                <option value="B-">B-</option>
                <option value="AB+">AB+</option>
                <option value="AB-">AB-</option>
                <option value="O+">O+</option>
                <option value="O-">O-</option>
            </select> <br>

            <input type="submit" name="submit" value="Submit">
		</fieldset>
		</fieldset>
	</form>
	
</body>
</html>