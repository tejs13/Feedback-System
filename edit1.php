<?php 
session_start();

if(isset($_POST["esaveid"]))
{

$id = $_POST["id6"];
$n = $_POST['name6'];
$g = $_POST['gender6'];
$sel = $_POST['hobb6'];
//$sel1 = implode("," , $sel);
$area = $_POST['area6'];
$desc = $_POST['cmnt6'];
include("connection.php");

$sql="UPDATE register set Name='$n',Gender='$g',Area='$area',Hobbies='$sel',Comment='$desc' WHERE id='$id'";
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