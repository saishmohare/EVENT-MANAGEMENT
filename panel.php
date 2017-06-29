<!DOCTYPE>
<html>
<head>

<script src="calc.js"></script>

<link rel="stylesheet" type="text/css" href="ticket.css">


	
</head>

<body>
    <div class="header">
        <h1>Panel Discussion E-Ticket</h1>
    </div>
    <div class="body">
        <div id="content">
                <?php
                    session_start();
                    $conn= new mysqli("localhost","root","","testdata");
                     /*mysql_select_db("testdata");*/
                   
                    $name=$_SESSION['username'];
                        
                         
                        $result=" select * from  panel";
                        $sql=mysqli_query($conn, $result);
                        $rowcount=$sql->num_rows;
                        /*echo"$rowcount";*/
                        if($rowcount>=7)
                        {
                            echo"All the seats are full!!!<br> Try after some time";
                        }
                        
                        else
                        {
                            
                            
                            $result="insert into panel(username) values('$name')";               
  
                            if (mysqli_query($conn, $result))
                            {
                                
                                echo "Voila!!!Booking success!!";
                               
                               /* $row="SELECT id FROM panel WHERE username='$name'";
                                $sql=mysqli_query($conn, $row);
                                $rows=$sql->fetch_assoc();
                                $id = intval($rows['id']);
                                
                                if($id<=2)
                                {
                                    $status='confirm';
                                }
                                else
                                    $status='waiting';*/
                                
                                $row="Select * from panel where id <= ALL (select id where username='$name')";
                               /* if(mysqli_query($conn, $row))
                                {
                                    echo"success";
                                }
                                else
                                {
                                    echo"problem";
                                }*/
                               $rows=mysqli_query($conn, $row);
                                
                                $rowcounts=$rows->num_rows;

                                /*echo"$rowcounts";*/
                                
                                if($rowcounts<=4)
                                {
                                    $status='confirm';
                                }
                                else
                                    $status='waiting';
                                
                                
                                echo'<br><br><br>';
                                echo'<div style="border: 1px solid">';
                                echo"YOUR E-TICKET ";
                                echo"<br>Event    : Panel Discussion";
                                echo"<br>SEAT NO  : ".$rowcounts;                        
                                echo"<br>SEAT TYPE: ".$status;
                                echo'</div>';
                            } 
                            else
                            {
                                echo "You have already registered";
                            }
                            
                           
                            
                        }
                    
                ?>  
            <br><br>
                    <button onClick="window.location='home.php';">Go to Home page</button>
		</div>
		
		
    </div>    
    <div class="footer">
            <p align="center">
               © 2017 SAISH MOHARE ALL RIGHTS RESERVED
            </p>
    </div>
</body>
</html>
