<?php
	session_start();
	$errorflag=false;

	if(isset($_POST['submit']))
	{
        $name = $_POST['name'];
        $email = $_POST['email'];
		$address = $_POST['address'];
		$phone = $_POST['phone'];
        $password = $_POST['password'];
        $confirmpass = $_POST['confirmpassword'];
        $gender		= $_POST['gender'];
        $dob = $_POST['dob'];
		$deposit = $_POST['deposit'];

        if($name == '' || $email == '' || $address == '' || $phone == '' || $password == '' || $confirmpass == '' || $gender == "" || $dob == '' 
		|| $deposit == '')
        {
            echo "Null Submission<br>";
			$errorflag=true;
        }
		else
		{
			$mailflag=false;
	
			for($i=0;$i<strlen($email);$i++)
			{
				if(($email[$i] == '@' ))
				{
					$mailflag=true;
				}
			}
			if($mailflag == false)
			{
				echo 'Invalid email Format<br>';
				$errorflag=true;
			}

			$phoneflag=false;
	
			for($i=0;$i<strlen($phone);$i++)
			{
				if(($phone[$i] >= 0 ) && ($phone[$i] <= 9 ))
				{
						$phoneflag=true;				         
				}
			}
			if($phoneflag == false)
			{
				echo 'Invalid phone number Format<br>';
				$errorflag=true;
			}

			$depositflag=false;
	
			for($i=0;$i<strlen($deposit);$i++)
			{
				if(($deposit[$i] >= 0 ) && ($deposit[$i] <= 9 ))
				{
						$depositflag=true;				         
				}
			}
			if($depositflag == false)
			{
				echo 'Invalid deposit ammount<br>';
				$errorflag=true;
			}

			else if((strlen($phone) <7) || (strlen($phone) >11))
				{
					echo 'Invalid Number <br>';
					$errorflag=true;
				}

			$passflag=false;

			for($i=0;$i<strlen($password);$i++)
			{
				if(($password[$i] == '@' || 
				$password[$i] == '$' ||
				$password[$i] == '#' ||
				$password[$i] == '%')) 
				{
					$passflag=true;
				}
			}
	
			if($passflag == false)
			{
				echo 'Password must contain atleast one of the special characters (@, $, % or #!)';
				$errorflag=true;
			}
			else if(strlen($password) < 4)
			{
				echo 'Password must contain atleast 4 characters<br/>';
				$errorflag=true;
			}
	
			if($password != $confirmpass)
			{
				echo "Confirmed password does't match with password<br>";
				$errorflag=true;
			}
			if($deposit<= 0)
			{
				echo "Invalid deposit ammount";
				$errorflag=true;
			}
		}
		if(($errorflag == false))
		{
				/*$user = [
					'name'		=>$name, 
					'password'	=>$password
				];

				$_SESSION['client'] = $user;*/
				$conn = mysqli_connect('localhost', 'root', '', 'bms');
				if($conn == null){
					die('DB connection error!');
				}

				$sql = "INSERT INTO `registration` (`Acc No`, `Name`, `Email`, `Address`, `Phone`, `Deposit`, `Gender`,
				`DOB`, `Pass`, `Repass`) VALUES (NULL, '$name', '$email', '$address', '$phone', '$deposit', '$gender', '$dob', 
				'$password', '$confirmpass')";
				$result = mysqli_query($conn, $sql);
				if($result)
				{
					echo "success";
					header('location: Login.html');
				}
				else{
					echo "something wrong...";
				}

				/*setcookie('name', $name, time()+3600, '/');
				setcookie('password', $password, time()+3600, '/');*/
				
		}

       
       
    }
?>