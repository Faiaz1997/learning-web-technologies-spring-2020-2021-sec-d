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

	}else{
		echo "Invalid request...";
	}
?>