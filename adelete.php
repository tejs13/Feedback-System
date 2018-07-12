<?php

session_start();
include("connection.php");
if(isset($_POST["bt2"]))
{
    $a=$_POST["t"];
    $sql="DELETE FROM register WHERE id='$a'";
    
    if(mysqli_query($con,$sql))
    {
     
      echo "<script type='text/javascript'>alert('Record Deleted Successfully');";
      echo "window.location.href = 'adisplay.php';";
      echo "</script>";
    }
    else
    {
        echo "error";
    }
    
}
elseif(isset($_POST["bt3"]))
{
    $d=$_POST["x"];
    $sql="DELETE FROM register WHERE id='$d'";
     if(mysqli_query($con,$sql))
     {
      
      echo "<script type='text/javascript'>alert('Record Deleted Successfully');";
      echo "window.location.href = 'adisplay.php';";
      echo "</script>";
     }
    else
    {
        echo "error";
    }
    
}
elseif(isset($_POST["btrq"]))
$i=$_POST["qid"];
$sql="DELETE FROM f_que WHERE Srno='$i'";
     if(mysqli_query($con,$sql))
     {
      
      echo "<script type='text/javascript'>alert('Question Deleted Successfully');";
      echo "window.location.href = 'adisplay.php';";
      echo "</script>";
     }
    else
    {
        echo "error";
    }

?>