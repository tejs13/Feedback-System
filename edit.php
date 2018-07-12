<?php 
session_start();

$id = $_POST["id"];
$n = $_POST['name'];
$e = $_POST['email'];
$g = $_POST['gender'];
$sel = $_POST['select'];
$sel1 = implode("," , $sel);
$area = $_POST['area'];
$desc = $_POST['cmnt'];
include("connection.php");

$sql="UPDATE register set Name='$n',email='$e',Gender='$g',Area='$area',Hobbies='$sel1',Comment='$desc' WHERE id='$id'";
if(mysqli_query($con,$sql))
{
    echo "updated";
    $_SESSION['id']=$id;
    $_SESSION['n']=$n;
    $_SESSION['e']=$e;
    $_SESSION['g']=$g;
    $_SESSION['area']=$area;
    $_SESSION['h']=$sel1;
    $_SESSION['desc']=$desc;
    header('Location:process.php');
    
}
else
{
    echo "error";
}


?>