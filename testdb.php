<?php
    $user="root";
    $pass="";
    
    $conn=new mysqli("localhost","$user","$pass") or die("Unable to connect");
        echo "connection established";
?>