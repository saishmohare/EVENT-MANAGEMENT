<!DOCTYPE HTML>
<!--
<?php
    /*session_start();
    if(!isset($_SESSION['username']))
        header:("location:warning.php")*/
        
?>-->        
<html>

	<head>
        <link rel="stylesheet" type="text/css" href="home.css">

	</head>

	<body>
		<div class="header">
			<h1>HOME</h1>
		</div>
		<div class="body">
		<!--	<div id="content">-->
                <div id="events">
                    <div class="eve">
                        <p>&nbsp 1. Bizcafe <button class="right" onClick="window.location='bizzcafe.php';">Participate</button></p>
                        <p>Total Confirm Seats : 3 &nbsp &nbsp &nbsp Total Waiting Seats : 2</p>
                        
                        
                    </div>
                    <div class="eve">
                        <p>&nbsp 2. Internship Mela <button class="right" onClick="window.location='internship.php';">Participate</button></p>
                         <p>Total Confirm Seats : 5 &nbsp &nbsp &nbsp Total Waiting Seats : 5</p>
                        
                    </div>
                    <div class="eve">
                        <p>&nbsp 3. Panel Discussion  <button class="right" onClick="window.location='panel.php';">Participate</button></p>
                         <p>Total Confirm Seats : 4 &nbsp &nbsp &nbsp Total Waiting Seats : 3</p>
                       
                    </div>
                    <div class="eve">
                        <p>&nbsp 4. Hackathon <button class="right" onClick="window.location='hackathon.php';">Participate</button></p>
                         <p>Total Confirm Seats : 3 &nbsp &nbsp &nbsp Total Waiting Seats : 3</p>
                        
                    </div>  
                     
                     <br>
                     <button onClick="window.location='logout.php';">Logout</button>
                </div>
                <?php
                /*    session_start();
                    if($_SESSION['username']!=NULL)
                        echo"Welcome".$_SESSION['username'];*/
                ?>
                          
                    
                <div id="info">
                    <div id="infohead" >
                        <?php
                        session_start();    
                        echo "HELLO ".$_SESSION['username']."!! <br>THESE ARE THE EVENTS YOU ARE ENROLLED IN : ";
                        ?>

                   
                        
                        
                        
                        </div>
                    
                    <div class="eveenroll">
                        <p>  
                            <?php
                           
                            $name=$_SESSION['username'];
                            $mysqli = new mysqli("localhost","root","","testdata");
                            $result = $mysqli->query("SELECT id FROM bizcafe WHERE username = '$name'");
                            if($result->num_rows != 0) 
                            {
                            
                            echo"<br>&nbsp 1.Bizcafe
                            <button style='float: right;' onClick='window.location=`bizcafestatus.php`;'>View Staus</button>  <hr> ";
                            } 
                                    

                        ?></p>
                           
                        <p>
                                                     <?php
                           
                            $name=$_SESSION['username'];
                            $mysqli = new mysqli("localhost","root","","testdata");
                            $result = $mysqli->query("SELECT id FROM internship WHERE username = '$name'");
                            if($result->num_rows != 0) 
                            {
                                    echo"<br>&nbsp 2.Internship
                            <button style='float: right;' onClick='window.location=`internshipstatus.php`;'>View Staus</button></p> <hr>  ";
                            } 
                                    

                             ?></p>                        
                        <p>
                            <?php
                           
                            $name=$_SESSION['username'];
                            $mysqli = new mysqli("localhost","root","","testdata");
                            $result = $mysqli->query("SELECT id FROM panel WHERE username = '$name'");
                            if($result->num_rows != 0) 
                            {
                                    echo"<br>&nbsp 3.Panel
                            <button style='float: right;' onClick='window.location=`panelstatus.php`;'>View Staus</button></p>  
                            <hr>
                            ";
                            } 
                                    

                             ?></p>
                        <p>
                            <?php
                           
                            $name=$_SESSION['username'];
                            $mysqli = new mysqli("localhost","root","","testdata");
                            $result = $mysqli->query("SELECT id FROM hackathon WHERE username = '$name'");
                            if($result->num_rows != 0) 
                            {
                                    echo"<br>&nbsp 4.Hackathon
                            <button style='float: right;' onClick='window.location=`hackathonstatus.php`;'>View Staus</button></p> <hr>  ";
                            } 
                                    

                             ?></p>
                    </div>
                </div>
                
            </div>                
        </div>    
		<div class="footer">
				<p align="center">
				   © 2017 SAISH MOHARE ALL RIGHTS RESERVED
				</p>
		</div>
	</body>
</html>


