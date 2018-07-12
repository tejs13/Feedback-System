<?php
session_start();

if(!isset($_SESSION['user']))
{
    header('Location:alogin.html');
}
?>




<html>
    <head>
    <title>statistics</title>
        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css">
        <link href="js/bootstrap.min.js" rel="stylesheet" type="text/js">
        <link href="style.css" rel="stylesheet">
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
                <div class="col-md-4">
                    <h2>Stats So far!</h2>
                </div>
                <div class="col-md-4">
                       
                  
                    
                </div>

                <div class="col-md-3">
                <?php
                     include("connection.php");
                     $sql="select que_1 from f_que";
                     $res=mysqli_query($con,$sql);
                    $n=mysqli_num_rows($res);
                  echo "<div class='btn-group'>
    <button class='btn btn-primary dropdown-toggle' type='button' data-toggle='dropdown' aria-haspopup='true' aria-expanded='false'> Select Questions</button>";
                       echo "<div class='dropdown-menu'>";
                    while($row=mysqli_fetch_array($res))
                    {
                        $q=$row['que_1'];
                      
                      // echo  "<a class='dropdown-item btn btn-info' href='stats.php?kes=$q' data-toggle='modal' data-target='#s'>".$q."</a><br><br>";
                         echo  "<a class='dropdown-item btn btn-info' href='stats_progress.php?kes=$q'>".$q."</a><br><br>";
                      
                    }
                    echo "</div>";
                    echo "</div>";
                    ?>
                </div>
                <div class="col-md-1"> 
                          <a href="logout.php" class="btn btn-info" role="button">Logout</a>
                </div>
            
            
        </div>
        </div>
        <br>
        <br>
       
</div>


    </body>
</html>







