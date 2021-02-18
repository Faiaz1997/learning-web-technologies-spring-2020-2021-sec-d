<?php

	if(isset($_POST['submit']))
    {

		$name 		= $_POST['name'];

		if($name == "")
        {
			echo "Null submission...";
		}else{
			echo "Name: ",$name;
		}

	}else{
		echo "Invalid request...";
	}
?>