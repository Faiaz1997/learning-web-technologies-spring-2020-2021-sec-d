<?php
	session_start();
	$errorflag=false;

	if(isset($_POST['submit']))
	{
        $name = $_POST['name'];
        $clientaccountno = $_POST['clientaccountno'];
        $password = $_POST['password'];
        $newpass = $_POST['newpass'];
        $renewpass = $_POST['renewpass'];
        

        if($name == '' || $clientaccountno == '' ||  $newpass == '' || $password == '' ||  $renewpass == ''  )
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
        $newpassflag=false;

        for($i=0;$i<strlen($newpass);$i++)
        {
            if(($newpass[$i] == '@' || 
            $newpass[$i] == '$' ||
            $newpass[$i] == '#' ||
            $newpass[$i] == '%')) 
            {
                $newpassflag=true;
            }
        }

        if($newpassflag == false)
        {
            echo 'New Password must contain atleast one of the special characters (@, $, % or #!)<br>';
            $errorflag=true;
        }
        else if(strlen($newpass) < 4)
        {
            echo 'New Password must contain atleast 4 characters<br/>';
            $errorflag=true;
        }

        if($newpass != $renewpass)
        {
            echo "Confirmed password does't match with password<br>";
            $errorflag=true;
        }
        $renewpassflag=false;

        for($i=0;$i<strlen($renewpass);$i++)
        {
            if(($renewpass[$i] == '@' || 
            $renewpass[$i] == '$' ||
            $renewpass[$i] == '#' ||
            $renewpass[$i] == '%')) 
            {
                $renewpassflag=true;
            }
        }

        if($renewpassflag == false)
        {
            echo 'Password can not be confirmed <br>';
            $errorflag=true;
        }
        else if(strlen($renewpass) < 4)
        {
            echo 'Password can not be confirmed <br/>';
            $errorflag=true;
        }

        if($newpass != $renewpass)
        {
            echo "Password can not be confirmed <br>";
            $errorflag=true;
        }

        }
        if(($errorflag == false))
		{
            $user = $_SESSION['client'];
            if($name == $_COOKIE['name'] && $password == $_COOKIE['password'])
            {
                setcookie('password', $newpass, time()+3600, '/'); 
                setcookie('status', 'true', time()+5000, '/');
                header('location: Login.html');

            }
			else if($name == $user['name'] && $password == $user['password'])
			{
                $user['password'] = $newpass;
                $_SESSION['status'] = true;
                header('location: Login.html');
			}
			else
			{
				echo "invalid Request";
			}
		}



       
       
    }
?>