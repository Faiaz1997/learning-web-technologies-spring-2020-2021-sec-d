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