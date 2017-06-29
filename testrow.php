            <?php
                    session_start();
                    $conn= new mysqli("localhost","root","","testdata");
                     /*mysql_select_db("testdata");*/
                   
                    $name=$_SESSION['username'];
                         
                        $result=" select * from bizcafe ";
                        $sql=mysqli_query($conn, $result);
                        $rowcount=mysql_num_rows($sql);
                        echo "$rowcount";
                        
                        
                        
  
                        
                    
                ?>