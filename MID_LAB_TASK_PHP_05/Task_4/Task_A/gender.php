<?php

	if(isset($_POST['submit']))
    {

		$gender		= $_POST['gender'];

		if($gender == "")
        {
			echo "Null submission...";
		}else{
			echo "Gender: ",$gender;
		}

	}else{
		echo "Invalid request...";
	}
?>