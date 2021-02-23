<?php
    if(isset($_POST['CurrentPassword']) && isset($_POST['NewPassword']) && isset($_POST['Retype']))
    {
        $current = $_POST['CurrentPassword'];
        $new = $_POST['NewPassword'];
        $retype = $_POST['Retype'];

        if($current == '' || $new == '' || $retype == '')
        {
            echo "Null Submission";
        }
        else if($current == $new)
        {
            echo "New Password should not be same as the Current Password<br>";
        }
        else if($new != $retype)
        {
            echo "New Password must match with the Retyped Password<br>";
        }
    }
?>