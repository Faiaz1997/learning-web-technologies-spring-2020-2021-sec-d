<?php
    if(isset($_POST['name'])&&isset($_POST['email'])&&isset($_POST['username'])&&isset($_POST['password'])
    &&isset($_POST['confirmpassword'])&&isset($_POST['gender'])&&isset($_POST['dob']))
    {
        $name = $_POST['name'];
        $email = $_POST['email'];
        $username = $_POST['username'];
        $password = $_POST['password'];
        $confirmpass = $_POST['confirmpassword'];
        $gender = $_POST['gender'];
        $dob = $_POST['dob'];

        if($name == '' || $email == '' || $username == '' || $password == '' || $confirmpass == '' || $gender == '' || $dob == '')
        {
            echo "Null Submission<br>";
        }
        for($i=0;$i<strlen($name);$i++)
        {
            if(!((ord($name[$i]) >= 65 && ord($name[$i]) <= 122)) )
            {
                echo 'Invalid Name Format<br>';break;
            }
        }

        for($i=0;$i<strlen($username);$i++)
        {
            if(!((ord($username[$i]) >= 97 && ord($username[$i]) <= 122)) 
            && !((ord($username[$i]) >= 65 && ord($username[$i]) <= 90))  
            && !((ord($username[$i]) >= 48 && ord($username[$i]) <= 57)) 
            && !($username[$i] == '.') && !($username[$i] == '-') && !($username[$i] == '_'))
            {
                echo 'Invalid Username Format<br>';break;
            }
        }

        if(strlen($username) < 2)
        {
            echo 'Username must contain atleast 2 characters<br/>';
        }
        if(strlen($password) < 8)
        {
            echo 'Password must contain atleast 8 characters<br/>';
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
        }
        if($password != $confirmpass)
        {
            echo "Confirmed password does't match with password<br>";
        }
       
    }
?>