<?php
session_start();
        include("connection.php");
        $n=$_POST["name"];
        $p=$_POST["pass"];
        $sql="SELECT * FROM admin WHERE aname = '$n' AND apass = '$p'";
          
        $result=mysqli_query($con,$sql);
        
    
            if(mysqli_num_rows($result)==1)
            {
                $_SESSION['user']=$n;
                header('Location: adisplay.php');
               
            }
            else
            {
                echo "<script type='text/javascript'>alert('Wrong Credentials!');";
                echo "window.location.href = 'alogin.html';";
                echo "</script>";
                
            }
        
?>