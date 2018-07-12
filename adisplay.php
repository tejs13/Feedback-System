<?php
session_start();

if(!isset($_SESSION['user']))
{
    header('Location:alogin.html');
}

if(!isset($_POST['bname']) && !isset($_POST['bname']))
{$bname="";
 $wname="";}
else{
$bname = $_POST['bname'];
$wname = $_POST["wname"];
}

?>



<html>
    <head>
    <title>User Details</title>
        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css">
        <link href="js/bootstrap.min.js" rel="stylesheet" type="text/js">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <script class="jsbin" src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
       
 
<script>
function deleteRow(r) {
    var i = r.parentNode.parentNode.rowIndex;
    document.getElementById("tab1").deleteRow(i);
         //window.location="adisplay.php";
}
</script>

<style type="text/css">
    .j{display:none}
</style>
    
<script type="text/javascript">
    $(document).ready(function(){
    $("#e61").click(function(){
        $("#p61").slideToggle("slow");
         $(this).hide();
    });
});
</script>
        



        
<script>
    function delete_row(id)
{
 $.ajax
 ({
  type:'post',
  url:'adelete.php',
  data:{
   delete_row:'delete_row',
   row_id:id,
  },
  success:function(response) {
   if(response=="success")
   {
    var row=document.getElementById("row"+id);
    row.parentNode.removeChild(row);
   }
  }
 });
}
</script>

    </head>
    <body style="background-color:#cceeff">
    <div class="container">
        <div class="jumbotron">
        <div class=row>
            <div class="col-md-3">
                    <h2>Welcome admin</h2>
                </div>
                <div class="col-md-3">
   
                </div>
                <div class="col-md-2">
            <div class="dropdown">
                <button class="btn btn-primary dropdown-toggle" type="button" id="dropdownMenu3" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                         Search       
                    </button>
                    <div class="dropdown-menu" aria-labelledby="dropdownMenu3">
   <h6 class="dropdown-header">Search here</h6>
      <button data-toggle="collapse" data-target="#f" class="btn btn-info dropdown-item">Search By Id</button><br><br>
    <button data-toggle="collapse" data-target="#s" class="btn btn-info dropdown-item">Search By Name</button><br><br>
    <button data-toggle="collapse" data-target="#w" class="btn btn-info dropdown-item">Search Waiter</button>
                    
   
                    </div>
            </div>
            </div>
            <div class="col-md-2">
                <div calss="dropdown">
            <button class="btn btn-primary dropdown-toggle" type="button" id="dropdownMenu4" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Questions       
                    </button>
                    <div class="dropdown-menu" aria-labelledby="dropdownMenu4">
   <h6 class="dropdown-header">Questions</h6>
                        <button data-toggle="collapse" data-target="#q" class="btn btn-info dropdown-item">Add Question</button><br><br>
                        <button data-toggle="collapse" data-target="#rq" class="btn btn-info dropdown-item">Remove Question</button><br><br>
                        
                        <a href="stats.php" class="btn btn-info dropdown-item" role="button">Stats</a>
                    </div>
     
   
                    </div>
            </div>
               <div class="col-md-1">
                <div calss="dropdown">
            <button class="btn btn-primary dropdown-toggle" type="button" id="dropdownMenu4" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                       Waiter       
                    </button>
                    <div class="dropdown-menu" aria-labelledby="dropdownMenu4">
   <h6 class="dropdown-header">Questions</h6>
                        <button data-toggle="collapse" data-target="#addwait" class="btn btn-info dropdown-item">Add Waiter</button><br><br>
                        <button data-toggle="collapse" data-target="#remwait" class="btn btn-info dropdown-item">Remove Waiter</button><br><br>
                        
                     
                    </div>
     
   
                    </div>
            </div>
    
      <div class="col-md-1">
                   
        <a href="logout.php" class="btn btn-info" role="button">Logout</a>
                  
         </div>
            
            
        </div>
        </div>
        <!-- modal start-->
        <div class="modal fade" id="f" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header text-center">
                <h4 class="modal-title w-100 font-weight-bold">Search By ID</h4>
                
            </div>
            <div class="modal-body mx-3">
                <div class="md-form mb-5">
                        
                                     <form style="width:300px" method="POST" action="adisplay.php" id="form1"> 
                                        <label for="name"><strong>Enter ID :</strong></label>  
                                        <input type="text" class="form-control" name="idname" required><br><br>
                                      
                                    </form>
                </div>
                  
            </div>
                  <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                 <button class="btn btn-primary" form="form1">Search</button>
            </div>
        </div>
            
        </div>
    </div>
    <!--modal end-->
    <!-- modal start-->
        <div class="modal fade" id="s" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header text-center">
                <h4 class="modal-title w-100 font-weight-bold">Search By Name</h4>
                
            </div>
            <div class="modal-body mx-3">
                <div class="md-form mb-5">
                        
                                      <form style="width:300px" method="POST" action="adisplay.php" id="form2"> 
                                        <label for="name"><strong>Enter Name :</strong></label>  
                                        <input type="text" class="form-control" name="bname" required >
                                         <label for="name"><strong>Enter Waiter :</strong></label>  
                                        <input type="text" class="form-control" name="wname"><br>
                                         
                                    </form>
                </div>
                    <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                 <button id="s1" class="btn btn-primary" form="form2" type="submit">Search</button>
            </div>
            </div>
        </div>
            
        </div>
    </div>
    <!--modal end-->
        <!-- modal start-->
        <div class="modal fade" id="q" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header text-center">
                <h4 class="modal-title w-100 font-weight-bold">Add Questions</h4>
                
            </div>
            <div class="modal-body mx-3">
                <div class="md-form mb-5">
                        
                                    <form style="width:300px" method="POST" action="adisplay.php" id="formque"> 
                                        <label for="name"><strong>Enter The No.Of Question :</strong></label>  
                                        <input type="text" class="form-control" name="aque" required><br>
                                        
                                    </form>
                </div>
                 <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button name="qadd" id="qsd" class="btn btn-primary" form="formque" type="submit">Add</button>
            </div>
            </div>
        </div>
            
        </div>
    </div>
    <!--modal end-->


<!-- Modal start-->
<div class="modal fade" id="w" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="w">Search By Waiter</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                                    <!--<form style="width:300px" method="POST" action="adisplay.php" id="wsea">  edit by sagar-->
                                                    <form style="width:300px" method="POST" action="adisplay.php" id="wsea"> 

                                        <label for="name"><strong>Select Waiter:</strong></label>  
                                         <?php
                                                include("connection.php");
                                                $sql="select w_uname from res_waiter";
                                                $res=mysqli_query($con,$sql);
                                                echo "<select class='form-control' name='wtr' style='height:32px' required>";
                                                while($row=mysqli_fetch_array($res))
                                                {
                                                    $q=$row['w_uname'];
                                                    echo '<option value="'.$q.'"  >'.$q.'</option>';
                                                }
                        
                                            echo "</select>";
                                            echo  "<br>";
                                        ?>
                                        <br>
                                         
                                    </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button name="wsearch" id="ws" class="btn btn-primary" form="wsea" type="submit">Search</button>
            </div>
        </div>
    </div>
</div>
        <!-- model end-->
        <!-- Modal start-->
<div class="modal fade" id="rq" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="rq">Delete Questions:</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                                    
                                        <label for="name"><strong>Select Question's:</strong></label>  
                                         <?php
                                                include("connection.php");
                                                $sql="select * from f_que";
                                                $res=mysqli_query($con,$sql);
                echo "<table style='width:100%'>";
           
                
                                         
                                                while($row=mysqli_fetch_array($res))
                                                {
                                                    echo "<tr>";
                                                    echo "<td>".$row['que_1']."</td>";
                                                    
                                                    $qr=$row['Srno'];
                                                    echo "<td>";
                    echo "<form method='post' action='adelete.php'>";
                    echo "<input type='hidden' name='qid' value='$qr'></input>";
            
                    echo "<td><button class='btn btn-primary' type='submit' name='btrq'>Delete</button></td>";
                    echo "</form>";
                                                    echo "</td>";
                                                    echo "</tr>";
                                                  
                                                }
                echo "</table>";
                        
                                         
                                        ?>
                                        <br>
                                         
                                  
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
              
            </div>
        </div>
    </div>
</div>
        <!-- model end-->
         <!-- modal start-->
        <div class="modal fade" id="addwait" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header text-center">
                <h4 class="modal-title w-100 font-weight-bold">Add Waiter</h4>
                
            </div>
            <div class="modal-body mx-3">
                <div class="md-form mb-5">
                        
                                     <form style="width:300px" method="POST" action="adisplay.php" id="formwait"> 
                                        <label for="name"><strong>Enter Waiter Username :</strong></label>  
                                        <input type="text" class="form-control" name="waitname" required><br><br>
                                         <label for="name"><strong>Assign The Password :</strong></label>  
                                        <input type="password" class="form-control" name="waitpass" required><br><br>
                                      
                                    </form>
                </div>
                  
            </div>
                  <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                 <button class="btn btn-primary" form="formwait" name="addwaiter">Add</button>
            </div>
        </div>
            
        </div>
    </div>
    <!--modal end-->
         <!-- modal start-->
        <div class="modal fade" id="remwait" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header text-center">
                <h4 class="modal-title w-100 font-weight-bold">Remove Waiter</h4>
                
            </div>
            <div class="modal-body mx-3">
                <div class="md-form mb-5">
                        
                                     <form style="width:300px" method="POST" action="adisplay.php" id="formrem"> 
                                        <label for="name"><strong>Select Waiter :</strong></label>  
                                         <?php
                                        include("connection.php");
                     $sql="select w_uname from res_waiter";
                     $res=mysqli_query($con,$sql);
                    echo "<select class='form-control' name='remwtr' style='height:32px' required>";
                    while($row=mysqli_fetch_array($res))
                    {
                        $q=$row['w_uname'];
                       echo '<option value="'.$q.'">'.$q.'</option>';
                    }
                        
                     echo "</select>";
                     echo  "<br>";
                                         ?>
                                      
                                    </form>
                </div>
                  
            </div>
                  <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                 <button class="btn btn-primary" form="formrem" name="removewaiter">Remove</button>
            </div>
        </div>
            
        </div>
    </div>
    <!--modal end-->
</div>


        <!--modal end-->
        <!--<div class="row collapse" id="f">
            <div class="col-md-4">
            </div>
            <div class="col-md-4">
        
                        <div class="panel panel-default">
                                <div class="panel-body">
                                     <form style="width:300px" method="POST" action="adisplay.php" id="form1"> 
                                        <label for="name"><strong>Enter ID :</strong></label>  
                                        <input type="text" class="form-control" name="idname" required>
                                    </form>
            
                                </div>
                        
                        
                            <div class="panel-footer">
                                <button class="btn btn-primary" form="form1" type="submit">Search</button>
                            </div>
                    </div>
              
            </div>
            <div class="col-md-4">
            </div>
        </div>-->
        <!--<div class="row collapse" id="s">
            <div class="col-md-4">
            </div>
                <div class="col-md-4">
         
                        <div class="panel panel-default">
                                <div class="panel-body">
                                    <form style="width:300px" method="POST" action="adisplay.php" id="form2"> 
                                        <label for="name"><strong>Enter Name :</strong></label>  
                                        <input type="text" class="form-control" name="bname" >
                                         <label for="name"><strong>Enter Waiter :</strong></label>  
                                        <input type="text" class="form-control" name="wname">
                                    </form>
                                </div>
                        
                            <div class="panel-footer">
                                <button id="s1" class="btn btn-primary" form="form2" type="submit">Search</button>
                            </div>
                    </div>
                
            </div>
            <div class="col-md-4">
            </div>
        </div>-->
        <!--<div class="row collapse" id="q">
            <div class="col-md-4">
            </div>
            <div class="col-md-4">
            
                        <div class="panel panel-default">
                                <div class="panel-body">
                                    <form style="width:300px" method="POST" action="adisplay.php" id="formque"> 
                                        <label for="name"><strong>Enter The No.Of Question :</strong></label>  
                                        <input type="text" class="form-control" name="aque" required>
                                    </form>
                                </div>
                        
                            <div class="panel-footer">
                                <button name="qadd" id="qsd" class="btn btn-primary" form="formque" type="submit">Add</button>
                            </div>
                    </div>
                
            </div>
            <div class="col-md-4">
            </div>
        </div>-->
        
          <!-- <div class="row collapse" id="w">
            <div class="col-md-4">
            </div>
            <div class="col-md-4">
            
                        <div class="panel panel-default">
                                <div class="panel-body">
                                    <form style="width:300px" method="POST" action="adisplay.php" id="wsea"> 
                                        <label for="name"><strong>Select Waiter:</strong></label>  
                                       
                    // include("connection.php");
                    // $sql="select w_uname from res_waiter";
                    // $res=mysqli_query($con,$sql);
                   // echo "<select class='form-control' name='wtr' style='height:32px' required>";
                   // while($row=mysqli_fetch_array($res))
                   // {
                     //   $q=$row['w_uname'];
                      // echo '<option value=" '.$q.'"  >'.$q.'</option>';
                   // }
                        
                     //echo "</select>";
                     //echo  "<br>";
                                      
                                    </form>
                                </div>
                        
                            <div class="panel-footer">
                                <button name="wsearch" id="ws" class="btn btn-primary" form="wsea" type="submit">Search</button>
                            </div>
                    </div>
                
            </div>
            <div class="col-md-4">
            </div>
        </div>-->
      
        <div class="row">
        <div class="col-md-3">
            </div>
            <?php
            if(isset($_POST["qadd"]))
            {
                echo "<script type='text/javascript'>
                        $(document).ready(function(){
                        $('#qsd').click(function(){
                        $('#qas').slideToggle('slow');
                        $(this).hide();
                            });
                            });
                         </script>";
                echo "<div class='col-md-6' id='qas'>";
                  
                    $n=$_POST["aque"];
                
                    echo "<div class='panel panel-default'>";
                    echo "<div class='panel-header'>";
                    echo "<strong>Enter The Questions <strong>";
                    echo "<br><br>";
                    echo "</div>";
                    echo "<div calss='panel-body'>";
                    echo "<form method='post' action='adisplay.php' id='fqadd'>";
                    echo "<input type='hidden' name='no' value='$n'>";
                  
                    for($i=1;$i<=$n;$i++)
                    {
                         echo "<strong>$i Question :-</strong>";
                         echo "<input type='text' name='q$i' class='form-control'>";
                         echo "<br>";
                    }
                    echo "<form>";
                    echo "<div";
                echo "<div class='panel-footer'>";
                echo "<button name='qsave' class='btn btn-primary' form='fqadd' type='submit'>Save</button>";
                echo "</div>";
                echo "</div>";
                
                
                echo "</div>";
            }
                     ?> 
              <div class="col-md-3">
            </div>
     
        
    <?php
    include("connection.php");
    if(isset($_POST["idname"]))
    {
        $i=$_POST["idname"];
        $sql="SELECT * FROM register WHERE id='$i'";
        $result=mysqli_query($con,$sql);
    
        if(mysqli_num_rows($result)>0)
            {
                    echo "<div class='row'>";
                    echo "<div class='col-md-12'>";
                    echo "<table class='table table-striped table-hover table-responsive' width='100%'>";
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
                   
                  
                while($row=mysqli_fetch_array($result))
                {
                   
                    echo "<tbody>";
                    echo "<tr>";
                    echo "<td>" .$row['id']. "</td>";
                    $c=$row['id'];
                    echo "<td>" .$row['Name']. "</td>";
                    $d=$row['Name'];
                    echo "<td>" .$row['Gender']. "</td>";
                    $e=$row['Gender'];
                    echo "<td>" .$row['Area']. "</td>";
                    $f=$row['Area'];
                    echo "<td>" .$row['Hobbies']. "</td>";
                    $g=$row['Hobbies'];
                    echo "<td>" .$row['Comment']. "</td>";
                    $h=$row['Comment'];
                    echo "<td>" .$row['que1']. "</td>";
                    echo "<td>" .$row['ans1']. "</td>";
                    echo "<td>" .$row['que2']. "</td>";
                    echo "<td>" .$row['ans2']. "</td>";
                    echo "<td>" .$row['waiter']. "</td>";
                    echo "<form method='post' action='adelete.php'>";
                    echo "<input type='hidden' name='x' value='$c'></input>";
                    echo "<td><button class='btn btn-primary' type='submit' name='bt3'>Delete</button></td>";
                    echo "</form>";
                    echo "<td><button class='btn btn-primary' data-toggle='collapse' data-target='#demo' type='button' name='bt1' id='$c'>Edit</button></td>";
                    echo "</tr>";
                    echo "</tbody>";
                    echo "</div>";
                     
                    echo "<div id='demo' class='collapse'>";
                    echo "<div class='col-md-6 panel panel-default'>
                <div class='panel-body'>
              <form style='width:300px' method='POST' action='edit1.php' id='formid'> 
                   <div class='form-group'>  
                    <label for='id'><strong>ID :</strong></label>  
                    <input type='text' class='form-control' id='' name='id6' value='$c' readonly>  
                </div>  
                <div class='form-group'>  
                    <label for='name'><strong>Name :</strong></label>  
                    <input type='text' class='form-control' id='' name='name6' value='$d' required>  
                </div>  
                <div class='form-group'>  
                    <label for='name'><strong>Gender :</strong></label>  
                    <input type='text' class='form-control' id='' name='gender6' value='$e' required>  
                </div> 
                 <div class='form-group'>  
                      <label for='name'><strong>Area :</strong></label>  
                    <input type='text' class='form-control' id='' name='area6' value='$f' required>  
                 </div>
                
               
                 <div class='form-group'>  
                     <label for='name'><strong>Hobbies :</strong></label>  
                    <input type='text' class='form-control' id='' name='hobb6' value='$g'' required>  
                </div> 
                <div class='form-group'>  
                    <label for='desc'><strong>Description :</strong></label>  
                    <textarea class='form-control' id='' name='cmnt6' rows='5' cols='4' value='$h' required></textarea>
                </div>
                    </form>
                    
                  </div>
                    
                    <div class='panel-footer'>
                        <button type='submit' class='btn btn-info' form='formid' name='esaveid'>Save</button>
                    </div>
                   
          
  
            </div>
            </div>";
                    
                
                }
                    echo "</table>";
                    echo "</div>";
                    echo "</div>";
            }
 }
elseif($bname!="" && $wname!="")
    {
    echo "sersch bu both";
        $n=$_POST["bname"];
         $w=$_POST["wname"];
        $sql="SELECT * FROM register WHERE Name LIKE '$n%' AND waiter='$w'";
        $result=mysqli_query($con,$sql);
        $row=mysqli_num_rows($result);
        $_SESSION['r']=$row;
    
        if(mysqli_num_rows($result)>0)
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
                 
                  
                while($row=mysqli_fetch_array($result))
                {
                  
                    echo "<tbody>";
                    echo "<tr>";
                    echo "<td>" .$row['id']. "</td>";
                    //$x="a";
                    //$y=$row['id'];
                    //$z=$x.$y;
                    //echo $z;
                    //$_SESSION[$z]=$row['id'];
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
                     echo "<td><a href='aedit.php?id=$b&euser=$c&egender=$d&earea=$e&ehobbies=$f&ecomment=$g' class='btn btn-primary'>Edit</button></td>";
                    //echo "</form>";
                   //echo "<button class='accordion'>Section 1</button>"; 
                    
                    echo "</tr>";
                    echo "</tbody>";
                     /*echo "<div id='p$b' class='panel panel-default j'>
                    <div class='panel-body'>
                       <form style='width:300px' method='POST' action='aedit.php' id='form1'> 
                <label for='name'><strong>ID :</strong></label>  
                <input type='text' class='form-control' id='' name='id' value='$b' readonly>  
                <label for='name'><strong>Name :</strong></label>  
                <input type='text' class='form-control' id='' name='name' value='$c' required>  
                
                <div class='radio'>
                    <strong>Gender :</strong><br>
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type='radio' name='gender' value='Male' checked>Male &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <input type='radio' name='gender' value='Female'>Female
                  
                </div>
               
               <label for='area'>Area :</label>
                  <select class='form-control' name='area' required>
                       <option value='Nanpura'>Nanpura</option>
                       <option value='Sagrampura'>Sagrampura</option>
                       <option value='Majura-gate'>Majura-gate</option>
                    </select>
                   
             
                <label for='hobbies'><strong>Hobbies :</strong></label><br>  
                    <label class='checkbox-inline'><input type='checkbox' value='Writing' name='select[]' checked>Writing</label>&nbsp;&nbsp;
                    <label class='checkbox-inline'><input type='checkbox' value='Dancing' name='select[]'>Dancing</label>&nbsp;&nbsp;
                    <label class='checkbox-inline'><input type='checkbox' value='Reading' name='select[]'>Reading</label><br>
              
              
                <label for='desc'><strong>Description :</strong></label>  
                <textarea class='form-control' id='' name='cmnt' rows='5' cols='4' placeholder='Write The Description Here'></textarea>
                        </form>
                </div>
                        
                        
                 <div class='panel-footer'>
                 <button id='sv' class='btn btn-primary' form='form1' type='submit'>Save</button>
                </div>
                </div>";*/
                   
                }
                    echo "</table>";
                    echo "</div>";
       
            
                    echo "</div>";
            
            }
        
    } 
elseif($bname!="" && $wname=="")
    {
        echo "search by name";
        $n=$_POST["bname"];
         $w=$_POST["wname"];
        $sql="SELECT * FROM register WHERE Name LIKE '$n%'";
        $result=mysqli_query($con,$sql);
        $row=mysqli_num_rows($result);
        $_SESSION['r']=$row;
    
        if(mysqli_num_rows($result)>0)
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
                 
                  
                while($row=mysqli_fetch_array($result))
                {
                  
                    echo "<tbody>";
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
                     echo "<td><a href='aedit.php?id=$b&euser=$c&egender=$d&earea=$e&ehobbies=$f&ecomment=$g' class='btn btn-primary'>Edit</button></td>";
                  
                    
                    echo "</tr>";
                    echo "</tbody>";
                   
                   
                }
                    echo "</table>";
                    echo "</div>";
       
            
                    echo "</div>";
            
            }
    echo $w;
    echo $n;
        
    } 
            
?>

            
            
<?php
include("connection.php");
    if(isset($_POST["qsave"]))
    {
        $n=$_POST["no"];
        
        for($i=1;$i<=$n;$i++)
        {
            $x=$_POST["q$i"];   
            
            $sql="insert into f_que values ('','$x')";
            
            mysqli_query($con,$sql);
        
        }
        echo "<script type='text/javascript'>alert('New Questions Added Successfully');";
        echo "window.location.href = 'adisplay.php';";
        echo "</script>";
    }
            
?>
        
            <?php   //add waiter here
            include("connection.php");
            if(isset($_POST["addwaiter"]))
            {
                $uname=$_POST["waitname"];
                $pass=$_POST["waitpass"];
              
                $sql="insert into res_waiter (w_uname,w_pass) values ('$uname','$pass')";
                if(mysqli_query($con,$sql))
                {
                       echo "<script type='text/javascript'>alert('New Waiter Added Successfully');";
                        echo "window.location.href = 'adisplay.php';";
                        echo "</script>";
                }
                else
                {
                    echo "error";
                }
            }
            //add waiter ends 
        ?> 
            
             <?php   //Remove  waiter here
            include("connection.php");
            if(isset($_POST["removewaiter"]))
            {
                $w=$_POST["remwtr"];
           
              
                $sql="delete from res_waiter where w_uname='$w'";
                echo $sql;
                if(mysqli_query($con,$sql))
                {
                       echo "<script type='text/javascript'>alert('Waiter Removed Successfully');";
                        //echo "window.location.href = 'adisplay.php';";
                        echo "</script>";
                }
                else
                {
                    echo "error";
                }
            }
            //Remove waiter ends 
        ?> 
            
            
<?php
            
if(isset($_POST["wsearch"]))
    {
        include("connection.php");
        echo "search by Waiter";
        
        $wt=$_POST["wtr"];
        echo "<br>waiter name : ".$wt;
        $x="%";
       // $y=trim($x.$wt.$x);
        echo "<br>";
     
        echo "<br>";
    
    
   // echo "A".rtrim($wt)."<br>"; 
    //$s = strcmp("waiter1",$wt);
    //echo $s;
   /* if($wt == "waiter2"){
    $i="waiter2";}
    
    //$i="waiter3";
    $sql = "SELECT * FROM register WHERE waiter LIKE '$i'  ";
$result = $con->query($sql);

if ($result->num_rows > 0) {
  
    while($row = $result->fetch_assoc()) {
        echo "Email: " . $row['email'] ."<br>";
    }
} else {
    echo "0 results";
}*/
    
    
        $sqlw="SELECT * FROM register WHERE waiter = '$wt' ";
        echo $sqlw;
        $resultw=mysqli_query($con,$sqlw);
      
    
    
        if(mysqli_num_rows($resultw) > 0)
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
                 
                  
                while($row=mysqli_fetch_array($resultw))
                {
                  
                    echo "<tbody>";
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
                    $b=$row['id'];
                    $c=$row['Name'];
                    $e=$row['Area'];
                    $f=$row['Hobbies'];
                    $g=$row['Comment'];
                    $d=$row['Gender'];
               
                
                    echo "<form method='post' action='adelete.php'>";
                    echo "<input type='hidden' name='t' value='$b'></input>";
                    //echo "<td><button class='btn btn-primary' type='submit' name='bt1' data-toggle='collapse' data-target='#demo'>Edit</button></td>";
                    echo "<td><button class='btn btn-primary' type='submit' name='bt2' onclick='delete_row('$b');'>Delete</button></td>";
                    echo "</form>";
                   // echo "<form method='post' action='adisplay.php'>";
                    //echo "<input type='hidden' name='s' value='$b'></input>";
                   /* echo "<td><button class='btn btn-primary' type='submit' name='bt1' id='e$b' onclick='edit('$b')'>Edit</button></td>";*/
                     echo "<td><a href='aedit.php?id=$b&euser=$c&egender=$d&earea=$e&ehobbies=$f&ecomment=$g' class='btn btn-primary'>Edit</button></td>";
                  
                    
                    echo "</tr>";
                    echo "</tbody>";
                   
                   
                }
                    echo "</table>";
                    echo "</div>";
       
            
                    echo "</div>";
            
            }
   
}
           
    

          
?>
           
            
            
            
        </div>
            </body>

</html>