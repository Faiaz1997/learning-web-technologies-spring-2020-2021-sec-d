<?php
	session_start();
	$errorflag=false;

	if(isset($_POST['submit']))
	{
        $name = $_POST['name'];
        $clientaccountno = $_POST['clientaccountno'];
        $cardtype = $_POST['cardtype'];


        if($name == '' || $clientaccountno == '' || $cardtype == '' )
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
            $file_info = $_FILES['myfile'];
            $ext= explode('.', $file_info['name']);
            $path ='assets/'.time().".".$ext[1];
        
            if(move_uploaded_file($file_info['tmp_name'], $path)){
                echo "success";
            }else{
        
                echo "error";
            }
            
            if($name == $_COOKIE['name'])
            {
                setcookie('status', 'true', time()+5000, '/');
                header('location: clientcard.html');
            }
            $user = $_SESSION['client'];
			if($name == $user['name'])
			{
						$_SESSION['status'] = true;
						header('location: clientcard.html');
			}
			else
			{
				echo "invalid Request";
			}
		}



       
       
    }
?>