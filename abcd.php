<?php
include("connection.php");
//$qname= $_GET['kes']; //qname

//find numnebr of question from f_que










$noQ=5;
//fatch question name
//
$q[1]="service";
$q[2]="food";
$q[3]="location";
$q[4]="atmosphere";
$q[5]="New Question";

//






static $q0_good=0;
static $q0_bad=0;
static $q0_average=0;
static $q0_best=0;
$sql = "select * from register";

$result = $con->query($sql);

if ($result->num_rows > 0) {
   
    while($row = $result->fetch_assoc()) {
    
    echo "<br>DATABASE :que1:".$row['que1']." &nbsp; ans1: ".$row['ans1'];
        $x=$row['que1'];
        
       
        $i=1;
        echo "<br>".$q[$i];
        
            $y=$q[$i];
            $z = strcmp($x,$y);
            echo "<br> x".$x."&nbsp; y ".$y."&nbsp; compare: ".$z;
            
        if($z == 0)       { $q0_good = $q0_good+1;  echo "<br>q0_good:".$q0_good;}
        //elseif($q[$i] == $row['que1'] && $row['ans1']== 'bad')    { $q0_bad = $q0_bad+1; }
        //elseif($q[$i] == $row['que1'] && $row['ans1']== 'average'){ $q0_average = $q0_average+1; }
        //else{ $q0_best = $q0_best+1; }
        
                //if($q[$i] == $row['que1'] && $row['ans1']== 'best')   
        
        
      //  }
    
    
    
    }
  
  
  
    
} else {
    echo "0 results";
}
$con->close();


echo "<br>Good: ".$q0_good;
echo "<br>BAD:  ".$q0_bad;
echo "<br>AVG:  ".$q0_average;
echo "<br>BEST: ".$q0_best;




?>