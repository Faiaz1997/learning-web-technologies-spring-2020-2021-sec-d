<?php
	session_start();
	$errorflag=false;

	if(isset($_POST['submit']))
	{
        $name = $_POST['name'];
        $clientaccountno = $_POST['clientaccountno'];
		$withdrawammount = $_POST['withdrawammount'];
        $password = $_POST['password'];

        if($name == '' || $clientaccountno == '' || $withdrawammount == '' || $password == '' )
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

            $withdrawammountflag=false;
	
			for($i=0;$i<strlen($withdrawammount);$i++)
			{
				if(($withdrawammount[$i] >= 0 ) && ($withdrawammount[$i] <= 9 ))
				{
                    $withdrawammountflag=true;				         
				}
			}
			if($withdrawammountflag == false)
			{
				echo 'Invalid Ammount Format<br>';
				$errorflag=true;
			}

        }
        if(($errorflag == false))
		{
            $user = $_SESSION['client'];
            if($name == $_COOKIE['name'] && $password == $_COOKIE['password'])
            {
                setcookie('status', 'true', time()+5000, '/');
                header('location: clienthome.html');

            }
			if($name == $user['name'] && $password == $user['password'])
			{
						$_SESSION['status'] = true;
						header('location: clientfundwithdraw.html');
			}
			else
			{
				echo "invalid Request";
			}
		}



       
       
    }
?>