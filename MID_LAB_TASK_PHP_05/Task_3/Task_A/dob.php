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

	}else{
		echo "Invalid request...";
	}
?>