<?php
session_start();
if(!isset($_SESSION['waiter']))
{
    header('Location:index.html');
}
?>
?>

<html>
    <head>
    <title>User Details</title>
        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css">
        <link href="js/bootstrap.min.js" rel="stylesheet" type="text/js">
    </head>
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
    
    <body style="background-color:#cceeff">
    <div class="container">
        <div class="jumbotron">
        <div class=row>
                <div class="col-md-10 text-center">
                    <h2>Feedback Form</h2>
                <p>Help Us To Improve!</p>
                </div>
            <div class="col-md-2r">
                 <a href="logout.php" class="btn btn-info" role="button">Logout</a>
                </div>
        </div>
           
            <div class="row">
            <div class="col-md-12">
            <form style="width:300px" method="POST" action="process.php" name="form" onsubmit="return validate(this)"> 
                <h5 color="red"> Taken By :- <?php echo $_SESSION['waiter'];?></h5>
                <div class="form-group">  
                    <label for="name"><strong>Name :</strong></label>  
                    <input type="text" class="form-control" id="" name="name" placeholder="Enter Name" required>  
                </div>  
                <div class="form-group">  
                    <label for="email"><strong>E-mail:</strong></label>  
                    <input type="email" class="form-control" id="" name="email" placeholder="Enter e-mail" required>  
                </div>
                <div class="form-group">  
                   <div class="radio">
                    <label class="radio-inline"><strong>Gender :</strong><br><br>
                    <input type="radio" name="gender" value="Male" checked>Male &nbsp;&nbsp;
                    <input type="radio" name="gender" value="Female">Female
                       </label>
                       
                    </div>
                </div> 
                 <div class="form-group">  
                     <label for="area"><strong>Area :</strong></label><br>
                    <select class="form-control" name="area" required>
                       
                            <option value="Nanpura">Nanpura</option>
                            <option value="Sagrampura">Sagrampura</option>
                            <option value="Majura-gate">Majura-gate</option>
                        
                     </select>
                    </div>
                
               
                 <div class="form-group">  
                    
                <label for="hobbies"><strong>Hobbies :</strong></label><br>  
                    <label class="checkbox-inline"><input type="checkbox" value="Writing" name="select[]">Writing</label>&nbsp;&nbsp;
                    <label class="checkbox-inline"><input type="checkbox" value="Dancing" name="select[]">Dancing</label>&nbsp;&nbsp;
                     <label class="checkbox-inline"><input type="checkbox" value="playing" name="select[]">Playing</label>&nbsp;&nbsp;
                    <label class="checkbox-inline"><input type="checkbox" value="Reading" name="select[]">Reading</label>
                </div> 
                
                 <div class="form-group">  
                     <label for="Ques"><strong> Help Us to Improve :</strong></label><br>
                     <?php
                     include("connection.php");
                     $sql="select que_1 from f_que";
                     $res=mysqli_query($con,$sql);
                    echo "<select class='form-control' name='que1' required>";
                    while($row=mysqli_fetch_array($res))
                    {
                        $q=$row['que_1'];
                       echo '<option value="'.$q.'">'.$q.'</option>';
                    }
                        
                     echo "</select>";
                     echo  "<br>";
                     echo "<strong>1></strong>&nbsp;&nbsp;";
                     echo "<input type='radio' name='ans1' value='bad' checked>Bad &nbsp;";
                     echo "<input type='radio' name='ans1' value='good'>Good &nbsp;";
                     echo "<input type='radio' name='ans1' value='average'>Average &nbsp;";
                     echo "<input type='radio' name='ans1' value='best'>Best";
                     ?>
                </div>
                
                   <div class="form-group">  
                    <?php
                     include("connection.php");
                     $sql="select que_1 from f_que";
                     $res=mysqli_query($con,$sql);
                    echo "<select class='form-control' name='que2' required>";
                    while($row=mysqli_fetch_array($res))
                    {
                        $q=$row['que_1'];
                       echo '<option value="'.$q.'">'.$q.'</option>';
                    }
                        
                     echo "</select>";
                     echo  "<br>";
                     echo "<strong>2></strong>&nbsp;&nbsp;";
                     echo "<input type='radio' name='ans2' value='bad' checked>Bad &nbsp;";
                     echo "<input type='radio' name='ans2' value='good'>Good &nbsp;";
                     echo "<input type='radio' name='ans2' value='average'>Average &nbsp;";
                     echo "<input type='radio' name='ans2' value='best'>Best";
                  
                     
                    ?>
                    </div>
                
                <div class="form-group">  
                    <label for="desc"><strong>Comments :</strong></label>  
                    <textarea class="form-control" id="" name="cmnt" rows="5" cols="4" placeholder="Write The Description Here"></textarea>
                </div>  
    
    
    
                    <button type="submit" class="btn btn-info" >Sign Up</button> 
                    <button type="reset" class="btn btn-primary">Reset</button>
            </form>
            
            
            
            </div>
            
            
            
            </div>
        
        </div>
        </div>
        
  
    
     </body>
    
    
    
</html>