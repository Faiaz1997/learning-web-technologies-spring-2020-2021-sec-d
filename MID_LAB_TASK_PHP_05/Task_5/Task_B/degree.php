<?php

	if(isset($_POST['submit']))
    {

		if(!empty($_POST['degree'])){
            foreach($_POST['degree'] as $selected){
            echo "Degree: ".$selected."</br>";
            }}
        else{
		    echo "Invalid request...";}
	}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Degree Input</title>
</head>
<body>
	<form method="post" action="#">
		<fieldset>
			<legend>Degree</legend>
			<input type="checkbox" name="degree[]" value="SSC"> SSC 
            <input type="checkbox" name="degree[]" value="HSC"> HSC 
            <input type="checkbox" name="degree[]" value="BSc"> BSc
            <input type="checkbox" name="degree[]" value="MSc"> MSc  
            <input type="submit" name="submit" value="Submit">
		</fieldset>
	</form>
	
</body>
</html>