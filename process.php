<?php
session_start();



?>


<html>
<head>
    <title></title>
    
     <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css">
     <link href="js/bootstrap.min.js" rel="stylesheet" type="text/js">
     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
</head> 
<script>
   // $("#sv").click(function(){
 // $("#save").removeClass("disabled");
  //$("#save").addClass("active");
//});
    $(document).ready(function(){
    $("#save").click(function(){
        $("#bt").attr("disabled","true");
    });
});
     //$(document).ready(function(){
      //$("#sv").click(function(){
    //$("#save").attr("disabled","false");
    //});
//});
 
$(document).ready(function(){
    $("#save").click(function(){
        $("#a").html("<?php echo $_SESSION['id'] ?>");
        $("#b").html("<?php echo $_SESSION['n'] ?>");
        $("#b1").html("<?php echo $_SESSION['e'] ?>");
        $("#c").html("<?php echo $_SESSION['g'] ?>");
        $("#d").html("<?php echo $_SESSION['area'] ?>");
        $("#e").html("<?php echo $_SESSION['h'] ?>");
        $("#f").html("<?php echo $_SESSION['desc'] ?>");
    });
});
</script>
    
    <script>
    function validate(form)
        {
            var select = document.getElementsByName("select[]");
            if(select[0].checked==false && select[1].checked==false && select[2].checked==false && select[3].checked==false)
                {
                alert("Atleast One Hobby Should be selected");
                return false;
                }
            return true;
    
        }

    
    
    
    
    
    </script>
 


<?php

    if(!empty($_POST['name']))
    {
        $nm = $_POST['name'];
        $e = $_POST['email'];
        $g = $_POST['gender'];
        $sel = $_POST['select'];
        $sel1 = implode("," , $sel);
        $area = $_POST['area'];
        $desc = $_POST['cmnt'];
        $ns1 = $_POST['ans1'];
        $ns2 = $_POST['ans2'];
        $qu1 = $_POST['que1'];
        $qu2 = $_POST['que2'];
        $wai = $_SESSION['waiter'];
        include("connection.php");
        //static $id=1;
        //$id=$id++;
        
        
        $sql="insert into Register (Name,email,Gender,Area,Hobbies,Comment,que1,ans1,que2,ans2,waiter) values ('$nm','$e','$g','$area','$sel1','$desc','$qu1','$ns1','$qu2','$ns2','$wai')";
        if(mysqli_query($con,$sql))
        {
               echo "<script type='text/javascript'>alert('Data Inserted Successfully');";
               
              echo "</script>";
        }
        else
        {
            echo "error inserting";
        }
        $sql1="Select id from Register where Name='$nm'";
         $result=mysqli_query($con,$sql1);
    
            if(mysqli_num_rows($result)>0)
            {
                while($row=mysqli_fetch_array($result))
                    {
                        $id=$row['id'];
                    }
            }
      
        
    }
        



?>
    <body>
        
        <div class="container">
            <div class="jumbotron">
                
                <div class="row">
                <div class="col-md-12">
                    <h2>You Entered</h2>
                    
                </div>
                </div>
      
            <table class="table table-striped table-hover tabel-responsive">
                <thead>
            <tr>
                <th>SR no.</th>
                <th>Name</th>
                <th>e-mail</th>
                <th>Gender</th>
                <th>Area</th>
                <th>Hobbies</th>
                <th>Comment</th>
            </tr>
            </thead>
                <tbody>
                    <tr>
                        <td id="a"><?php echo $id ?></td>
                        <td id="b"><?php echo $nm ?></td>
                        <td id="b1"><?php echo $e ?></td>
                        <td id="c"><?php echo $g ?></td>
                        <td id="d"><?php echo $area ?></td>
                        <td id="e"><?php echo $sel1 ?></td>
                        <td id="f"><?php echo $desc ?></td>
                    </tr>
                </tbody>
            </table>
         
                <button id="bt" data-toggle="collapse" data-target="#demo" class="btn btn-primary">Edit/Save</button>
                 <button id="save" type="button" class="btn btn-info">Refresh</button> 
                <a href="form.php" class="btn btn-primary" role="button">Home</a>
            </div>
            <div class="row">
                <div class="col-md-4">
            <div id="demo" class="collapse">
                <div class="panel panel-default">
                    <div class="panel-body">
                    <form style="width:300px" method="POST" action="edit.php" id="form1" name="form" onsubmit="return validate(this)"> 
                <label for="name"><strong>ID :</strong></label>  
                <input type="text" class="form-control" id="" name="id" value="<?php echo $id?>" readonly>  
                <label for="name"><strong>Name :</strong></label>  
                <input type="text" class="form-control" id="" name="name" value="<?php echo $nm?>" required>  
                        
                <label for="name"><strong>E-mail:</strong></label>  
                <input type="email" class="form-control" id="" name="email" value="<?php echo $e?>" readonly>  
                
                <div class="radio">
                    <strong>Gender :</strong><br>
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="gender" value="Male" checked>Male &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <input type="radio" name="gender" value="Female">Female
                    
                </div>
               
               <label for="area">Area :</label>
                        
                  <select class="form-control" name="area" style="height:35px" required>
                      
                       <option value="Nanpura">Nanpura</option>
                       <option value="Sagrampura">Sagrampura</option>
                        <option value="Majura-gate">Majura-gate</option>
                    </select>
                   
             
                <label for="hobbies"><strong>Hobbies :</strong></label><br>  
                    <label class="checkbox-inline"><input type="checkbox" value="Writing" name="select[]">Writing</label>&nbsp;&nbsp;
                    <label class="checkbox-inline"><input type="checkbox" value="Dancing" name="select[]">Dancing</label>&nbsp;&nbsp;
                    <label class="checkbox-inline"><input type="checkbox" value="Playing" name="select[]">Playing</label>&nbsp;&nbsp;
                    <label class="checkbox-inline"><input type="checkbox" value="Reading" name="select[]">Reading</label><br><br>
              
              
                <label for="desc"><strong>Description :</strong></label>  
                <textarea class="form-control" id="" name="cmnt" rows="5" cols="4" placeholder="Write The Description Here"></textarea>
                        </form>
                    </div>
                        
                        
                 <div class="panel-footer">
                 <button id="sv" class="btn btn-primary" form="form1" type="submit">Save</button>
                </div>
           
       
                
                
        </div>
        </div>
            
    </div>
</div>
</div>

</body>
</html>