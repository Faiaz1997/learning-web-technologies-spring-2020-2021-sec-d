<?php
	session_start();
	$errorflag=false;

	if(isset($_POST['submit']))
	{
        $name = $_POST['name'];
        $clientaccountno = $_POST['clientaccountno'];
        $contact = $_POST['contact'];
		$text = $_POST['text'];


        if($name == '' || $clientaccountno == '' || $contact == '' || $text == '' )
        {
            echo "Null Submission<br>";
			$errorflag=true;
        }
	else
	{

		$clientaccflag=false;

		for($i=0;$i<strlen($clientaccountno);$i++)
		{
			if(($clientaccountno[$i] >= 0 ) && ($clientaccountno[$i] <= 9 ))
			{
					$clientaccflag=true;				         
			}
		}
		if($clientaccflag == false)
		{
			echo 'Invalid Account Number Format<br>';
			$errorflag=true;
		}
		
		}
		if(($errorflag == false))
		{
			
            if($name == $_COOKIE['name'])
            {
                setcookie('status', 'true', time()+5000, '/');
                header('location: contactadmin.html');
            }
            $user = $_SESSION['client'];
			if($name == $user['name'])
			{
						$_SESSION['status'] = true;
						header('location: contactadmin.html');
			}
			else
			{
				echo "invalid Request";
			}
		}
	}

?>