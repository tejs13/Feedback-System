<?php
$host="localhost";
$user="root";
$pass="";
$db="demo";
$table="register";



$con=mysqli_connect($host,$user,$pass,$db);
//mysqli_select_db($db);

if(!$con)
{
    die ("connection failed");
}

   
echo "<br>";
?>