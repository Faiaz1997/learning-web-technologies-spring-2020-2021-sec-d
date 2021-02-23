<?php
    if(isset($_POST['username'])&&isset($_POST['password']))
    {
        $username = $_POST['username'];
        $password = $_POST['password'];

        for($i=0;$i<strlen($username);$i++)
        {
            if(!((ord($username[$i]) >= 97 && ord($username[$i]) <= 122)) 
            && !((ord($username[$i]) >= 65 && ord($username[$i]) <= 90))  
            && !((ord($username[$i]) >= 48 && ord($username[$i]) <= 57)) 
            && !($username[$i] == '.') && !($username[$i] == '-') && !($username[$i] == '_'))
            {
                echo 'Invalid Username Format';break;
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
            echo 'Password atleast contain one of the special characters (@, $, % or #!)';
        }
    }
?>