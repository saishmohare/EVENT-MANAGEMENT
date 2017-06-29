<!DOCTYPE>
<html>
<head>

<script src="calc.js"></script>

<link rel="stylesheet" type="text/css" href="ticket.css">


	
</head>

<body>
    <div class="header">
        <h1>Hackathon E-Ticket</h1>
    </div>
    <div class="body">
        <div id="content">
                <?php
                    session_start();
                    $conn= new mysqli("localhost","root","","testdata");
                     /*mysql_select_db("testdata");*/
                   
                    $name=$_SESSION['username'];
                        
                         
                        $result=" select * from  hackathon";
                        $sql=mysqli_query($conn, $result);
                        $rowcount=$sql->num_rows;
                        /*echo"$rowcount";*/
                        if($rowcount>=6)
                        {
                            echo"All the seats are full!!!<br> Try after some time";
                        }
                        
                        else
                        {
                            
                            
                            $result="insert into hackathon(username) values('$name')";               
  
                            if (mysqli_query($conn, $result))
                            {
                                
                                echo "Voila!!!Booking success!!";
                               
                               /* $row="SELECT id FROM hackathon WHERE username='$name'";
                                $sql=mysqli_query($conn, $row);
                                $rows=$sql->fetch_assoc();
                                $id = intval($rows['id']);
                                
                                if($id<=2)
                                {
                                    $status='confirm';
                                }
                                else
                                    $status='waiting';*/
                                
                                $row="Select * from hackathon where id <= ALL (select id where username='$name')";
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
                                
                                if($rowcounts<=3)
                                {
                                    $status='confirm';
                                }
                                else
                                    $status='waiting';
                                
                                
                                echo'<br><br><br>';
                                echo'<div style="border: 1px solid">';
                                echo"YOUR E-TICKET ";
                                echo"<br>Event    : Hackathon";
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
