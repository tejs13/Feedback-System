<?php
session_start();
        include("connection.php");
        $n=$_POST["name"];
        $p=$_POST["pass"];
        $sql="SELECT * FROM res_waiter WHERE w_uname = '$n' AND w_pass = '$p'";
          
        $result=mysqli_query($con,$sql);
        
    
            if(mysqli_num_rows($result)==1)
            {
                $_SESSION['waiter']=$n;
                header('Location: form.php');
               
            }
            else
            {
                echo "<script type='text/javascript'>alert('Wrong Credentials!');";
                echo "window.location.href = 'waiter.html';";
                echo "</script>";
                
            }
        
?>