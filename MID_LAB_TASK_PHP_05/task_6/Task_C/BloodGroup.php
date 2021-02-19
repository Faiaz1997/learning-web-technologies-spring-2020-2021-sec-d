<?php
        if (isset($_POST['submit'])) 
        {
        $bg = $_POST['bg'];
        if($bg=="")
        {
            echo "Invalid Request";
        }
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
                <option value="A+"<?php if ($bg=='A+')echo "selected='selected'"; ?>>A+</option>
                <option value="A-"<?php if ($bg=='A-')echo "selected='selected'"; ?>>A-</option>
                <option value="B+"<?php if ($bg=='B+')echo "selected='selected'"; ?>>B+</option>
                <option value="B-"<?php if ($bg=='B-')echo "selected='selected'"; ?>>B-</option>
                <option value="AB+"<?php if ($bg=='AB+')echo "selected='selected'"; ?>>AB+</option>
                <option value="AB-"<?php if ($bg=='AB-')echo "selected='selected'"; ?>>AB-</option>
                <option value="O+"<?php if ($bg=='O+')echo "selected='selected'"; ?>>O+</option>
                <option value="O-"<?php if ($bg=='O-')echo "selected='selected'"; ?>>O-</option>
            </select> <br>

            <input type="submit" name="submit" value="Submit">
		</fieldset>
		</fieldset>
	</form>
	
</body>
</html>