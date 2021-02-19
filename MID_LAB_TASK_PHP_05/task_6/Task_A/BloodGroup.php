<?php
        if (isset($_POST['submit'])) 
        {
        $bg = $_POST['bg'];
        if($bg=="")
        {
            echo "Invalid Request";
        }
        else
        {
            echo "Blood Group: " , $bg;}
        }
    
?>