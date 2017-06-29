<?php
    $username=$_POST['username'];
    $email=$_POST['Email'];
    $password=$_POST['password'];

    /*echo $username;
    echo $email;
    echo $password;*/
    
    mysql_connect("localhost","root","");
    mysql_select_db("testdata");
    /*mysqli_connect("localhost","root","","testdata");
    /*if($conn && $db)
    {
        echo'success';
    }*/

    
    $result=mysql_query("insert into test (username,email,password) values ('$username','$email','$password')");
    /*mysqli_query($db,$result);*/
    if($result)
    {
        header("location:login.php");
    }
    else
        echo
        "Unable to connect";
?>