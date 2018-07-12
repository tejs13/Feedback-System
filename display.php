<?php

include("connection.php");

          $sql="SELECT * FROM register";
          $result=mysqli_query($con,$sql);
    
  if(mysqli_num_rows($result)>0)
   {
        while($row=mysqli_fetch_array($result))
        {
            echo "<table class=\"table table-striped table-hover\"></table>";
            echo "<thead>";
            echo "<tr>";
            echo "<th>SR No.</th>";
            echo "<th>Name</th>";
            echo "<th>Gender</th>";
            echo "<th>Area</th>";
            echo "<th>Hobbies</th>";
            echo "<th>Comment</th>";
            echo "</tr>";
            echo $row["id"] . " ".$row["Name"]." ".$row["Gender"];
        }
   }





?>