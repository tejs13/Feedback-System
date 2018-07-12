<?php
session_start();
if(isset($_POST["esave"]))
{
  echo "aa print thaay che";      
$id1 = $_POST["id5"];
$n = $_POST["name5"];
$g = $_POST["gender5"];
$sel = $_POST["hobb5"];
//$sel1 = implode("," , $sel);
$area = $_POST["area5"];
$desc = $_POST["cmnt5"];
include("connection.php");


$sql="UPDATE register set Name='$n',Gender='$g',Area='$area',Hobbies='$sel',Comment='$desc' WHERE id='$id1'";
if(mysqli_query($con,$sql))
    {
    
    echo "<script type='text/javascript'>alert('Record Updated Successfully');";
    echo "window.location.href = 'adisplay.php';";
    echo "</script>";
    
    }
else
    {
    echo "error";
    }
}
else
{
    echo "error";
}

?>