<?php 
session_start();
if(!isset($_SESSION['user']))
{
    header('Location:alogin.html');
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
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script class="jsbin" src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>

   </head>
    <body style="background-color:#cceeff">
    <div class="container">
        <div class="jumbotron">
        <div class=row>
                <div class="col-md-3">
                    <h2>Edit <?php echo $_GET["euser"];?>></h2>
                </div>
                <div class="col-md-6">
                    
                </div>
                <div class="col-md-3">
                    <div>
                    <a href="logout.php" class="btn btn-info" role="button">Logout</a>
                  
                       
                </div>
                </div>
            
            
        </div>
        </div>
        <div class="row">
            <div class="col-md-4">
          
            </div>
            <div class="col-md-4 panel panel-default">
                <div class="panel-body">
              <form style="width:300px" method="POST" action="aeditprocess.php" id="formid"> 
                   <div class="form-group">  
                    <label for="id"><strong>ID :</strong></label>  
                    <input type="text" class="form-control" id="" name="id5" value="<?php echo $_GET["id"];?>" readonly>  
                </div>  
                <div class="form-group">  
                    <label for="name"><strong>Name :</strong></label>  
                    <input type="text" class="form-control" id="" name="name5" value="<?php echo $_GET["euser"];?>" required>  
                </div>  
                <div class="form-group">  
                    <label for="name"><strong>Gender :</strong></label>  
                    <input type="text" class="form-control" id="" name="gender5" value="<?php echo $_GET["egender"];?>" required>  
                </div> 
                 <div class="form-group">  
                      <label for="name"><strong>Area :</strong></label>  
                    <input type="text" class="form-control" id="" name="area5" value="<?php echo $_GET["earea"];?>" required>  
                 </div>
                
               
                 <div class="form-group">  
                     <label for="name"><strong>Hobbies :</strong></label>  
                    <input type="text" class="form-control" id="" name="hobb5" value="<?php echo $_GET["ehobbies"];?>" required>  
                </div> 
                <div class="form-group">  
                    <label for="desc"><strong>Description :</strong></label>  
                    <textarea class="form-control" id="" name="cmnt5" rows="5" cols="4" value="<?php echo $_GET["ecomment"];?>" required></textarea>
                </div>
                    </form>
                    
                  </div>
                    
                    <div class="panel-footer">
                        <button type="submit" class="btn btn-info" form="formid" name="esave">Save</button>
                    </div>
                   
          
  
            </div>
            <div class="col-md-4">
                
            </div>
        </div>
        </div>
        
</body>
</html>
           
      
