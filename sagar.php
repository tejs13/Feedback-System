<?php
if(1 == 1)
    {
    
  //  $con->close();
    include("connection.php");
        echo "search by Waiter";
        
        $wt=$_POST["wtr"];
        echo $wt;
   
    
        $sqlw="SELECT email FROM register WHERE waiter = ? ";
    echo $sqlw;
    
   $sql = "SELECT * from register where waiter= $wt ";
$result = $con->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "email.".$row["email"]."<br>";
    }
} else {
    echo "0 results";
}


   
        $stmt=$con->prepare($sqlw);
    $stmt->bind_param('s',$wt);
        //$resultw=mysqli_query($con,$sqlw);
        //$row=mysqli_num_rows($resultw);
        //$_SESSION['r']=$row;
        //$resul=mysqli_query($con,$sqlw);
    $stmt->execute();
 
    if($stmt->fetch())
    {
        echo $wt;
       
    }
    
        /*if(mysqli_num_rows($resul)>0)
            {
                    echo "<div class='row'>";
                    echo "<div class='col-md-12'>";
                    echo "<table id='tab1' class='table table-striped table-hover table-responsive' width='100%'>";
                    echo "<thead>";
                    echo "<tr>";
                    echo "<th>SR no.</th>";
                    echo "<th>Name</th>";
                    echo "<th>Gender</th>";
                    echo "<th>Area</th>";
                    echo "<th>Hobbies</th>";
                    echo "<th>Comment</th>";
                    echo "<th>Question</th>";
                    echo "<th>Response</th>";
                    echo "<th>Question</th>";
                    echo "<th>Response</th>";
                    echo "<th>Waiter</th>";
                    echo "<th>Operation</th>";
                    echo "</tr>";
                    echo "</thead>";
                    echo "<tbody>";
                 
                  
                while($row = mysqli_fetch_array($resul))
                {
                  
                  
                    echo "<tr>";
                    echo "<td>" .$row['id']. "</td>";
                    echo "<td>" .$row['Name']. "</td>";
                    echo "<td>" .$row['Gender']. "</td>";
                    echo "<td>" .$row['Area']. "</td>";
                    echo "<td>" .$row['Hobbies']. "</td>";
                    echo "<td>" .$row['Comment']. "</td>";
                    echo "<td>" .$row['que1']. "</td>";
                    echo "<td>" .$row['ans1']. "</td>";
                    echo "<td>" .$row['que2']. "</td>";
                    echo "<td>" .$row['ans2']. "</td>";
                     echo "<td>" .$row['waiter']. "</td>";
                    //$a="sql";
                    $b=$row['id'];
                    $c=$row['Name'];
                    $d=$row['Gender'];
                    $e=$row['Area'];
                    $f=$row['Hobbies'];
                    $g=$row['Comment'];
                    //$c=$a.$b;
                    //$c="DELETE FROM register Where id= '$b'";
                    //echo $c;
                    echo "<form method='post' action='adelete.php'>";
                    echo "<input type='hidden' name='t' value='$b'></input>";
                    //echo "<td><button class='btn btn-primary' type='submit' name='bt1' data-toggle='collapse' data-target='#demo'>Edit</button></td>";
                    echo "<td><button class='btn btn-primary' type='submit' name='bt2' onclick='delete_row('$b');'>Delete</button></td>";
                    echo "</form>";
                   // echo "<form method='post' action='adisplay.php'>";
                    //echo "<input type='hidden' name='s' value='$b'></input>";
                   /* echo "<td><button class='btn btn-primary' type='submit' name='bt1' id='e$b' onclick='edit('$b')'>Edit</button></td>";*/
                    /* echo "<td><a href='aedit.php?id=$b&euser=$c&egender=$d&earea=$e&ehobbies=$f&ecomment=$g' class='btn btn-primary'>Edit</button></td>";
                  
                    
                    echo "</tr>";
                   
                   
                   
                }
                    echo "</tbody>";
                    echo "</table>";
                    echo "</div>";
       
            
                    echo "</div>";
            
            }*/
  
        
    }
  

            
?>