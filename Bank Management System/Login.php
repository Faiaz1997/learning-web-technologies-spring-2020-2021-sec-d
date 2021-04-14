<?php
	session_start();
	
	if(isset($_POST['submit']))
	{
		$name = $_POST['name'];
		$password = $_POST['password'];
		$user = $_SESSION['client'];
		if($name == "" || $password == "")
		{
			echo "Null submission";
		}
		else
		{
			
			if($name == $_COOKIE['name'] && $password == $_COOKIE['password'])
					{
						setcookie('status', 'true', time()+5000, '/');
						header('location: clienthome.html');

					}
			
			else if($name == $user['name'] && $password == $user['password'])
			{
				$_SESSION['status'] = true;
				header('location: clienthome.html');
			}
			else
			{
				echo "invalid user";
			}
		}
	}
?>