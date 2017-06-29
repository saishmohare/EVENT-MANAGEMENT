<?php
    $username=$_POST['user'];
    $password=$_POST['pass'];

    mysql_connect("localhost","root","");
    mysql_select_db("testdata");
    
    $result=mysql_query("select * from test where username='$username' and password='$password'") or
            die("failed to query database");

    /*if($result)
    {
         header("location:home.php");
    }
    else
       echo"incorrect username or password"; */
    
    $row=mysql_fetch_array($result);

    if($row['username']==$username && $row['password']==$password)
    {
        session_start();
        $_SESSION['username']=$username;
        header("location:home.php");
    }
    else
        echo"incorrect username or password";
    
        
                
?>