<!DOCTYPE>
<html>
<head>

<script src="calc.js"></script>

<link rel="stylesheet" type="text/css" href="ticket.css">


	
</head>

<body>
    <div class="header">
        <h1>April Or May?</h1>
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
                        
                        if($rowcount>=3)
                        {
                            echo"All the seats are full!!!<br> Try after some time";
                        }
                        
                        else
                        {
                            
                            
                            $result="insert into hackathon(username) values('$name')";               
  
                            if (mysqli_query($conn, $result))
                            {
                                
                                echo "Voila!!!Booking success!!";
                                echo"<br>Event : Hackathon";
                                $row="SELECT id FROM hackathon WHERE username='$name'";
                                $sql=mysqli_query($conn, $row);
                                $rows=$sql->fetch_assoc();
                                $id = intval($rows['id']);
                                echo"<br>SEAT NO ".$id;
                                if($id<=2)
                                {
                                    $status='confirm';
                                }
                                else
                                    $status='waiting';
                                echo'<div style="border: 1px solid>';
                                echo"<br>Event    : Hackathon";
                                echo"<br>SEAT NO  : ".$id;                        
                                echo"<br>SEAT TYPE: ".$status;
                                echo'</div>';
                            } 
                            else
                            {
                                echo "You have already registered";
                            }
                            
                           
                            
                        }
                    
                ?>  
            

		</div>
		
		
    </div>    
    <div class="footer">
            <p align="center">
               © 2017 SAISH MOHARE ALL RIGHTS RESERVED
            </p>
    </div>
</body>
</html>
