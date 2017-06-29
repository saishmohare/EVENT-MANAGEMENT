
<!DOCTYPE>
<html>
<head>

<script src="calc.js"></script>

<link rel="stylesheet" type="text/css" href="ticket.css">


	
</head>

<body>
    <div class="header">
        <h1>Bizcafe Booking Cancellation</h1>
    </div>
    <div class="body">
        <div id="content">
                <?php
                      session_start();
                        $conn= new mysqli("localhost","root","","testdata");
                        $name=$_SESSION['username'];
                        $sql=("Delete from bizcafe where username='$name'");
                        if(mysqli_query($conn,$sql))
                        {
                            echo'Booking cancelled successfully!!';
                            echo'<br><br>You can always participate once again provided seats are not full.';
                            echo'<br><br>Hope to see you soon !! :D';
                            
                        }
                        else
                            echo"error"; 
               
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
