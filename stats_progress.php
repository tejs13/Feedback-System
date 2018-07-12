<?php
session_start();

if(!isset($_SESSION['user']))
{
    header('Location:alogin.html');
}




   
    include("connection.php");
    
    if($con)
    {
    //$q=$_GET['qs'];
        $k=$_GET["kes"];
    $sql="select * from register where que1='$k' or que2='$k'";
        
    static $ac=0;
    static $gc=0;
    static $bc=0;
    static $bsc=0;
    static $ac1=0;
    static $gc1=0;
    static $bc1=0;
    static $bsc1=0;
    $apr;
        $gpr;
        $bpr;
        $bspr;
    $result=mysqli_query($con,$sql);
    $n=mysqli_num_rows($result);
    if(mysqli_num_rows($result)>0)
    {
        while($row=mysqli_fetch_array($result))
        {
            $a=strcmp($row['ans1'],"average");
            $g=strcmp($row['ans1'],"good");
             $b=strcmp($row['ans1'],"bad");
             $bs=strcmp($row['ans1'],"best");
            if($a==0)
            {
                $ac++;
                
            }
            if($g==0)
            {
                $gc++;
            }
            if($b==0)
            {
                $bc++;
            }
            if($bs==0)
            {
                $bsc++;
            }
             $a1=strcmp($row['ans2'],"average");
            $g1=strcmp($row['ans2'],"good");
             $b1=strcmp($row['ans2'],"bad");
             $bs1=strcmp($row['ans2'],"best");
            if($a1==0)
            {
                $ac1++;
                
            }
            if($g1==0)
            {
                $gc1++;
            }
            if($b1==0)
            {
                $bc1++;
            }
            if($bs1==0)
            {
                $bsc1++;
            }
           
           
        }
       
    }
        
        
    
        
        $apr=(($ac+$ac1)/$n)*100;
    
        
         $gpr=(($gc+$gc1)/$n)*100;
        
        
         $bpr=(($bc+$bc1)/$n)*100;
    
        
         $bspr=(($bsc+$bsc1)/$n)*100;
       
        $_SESSION['bspr']=(int)$bspr;
        $_SESSION['apr']=(int)$apr;
        $_SESSION['gpr']=(int)$gpr;
        $_SESSION['bpr']=(int)$bpr;
        $_SESSION['que']=$k;
    
    
        
       
    }
    else
    {
        echo "error";
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
            <h3 style="text-align:center"><?php echo $_SESSION['que'];?></h3>
        </div>
            
           
        <br>
        <br>
        <div class="row">
            <div class="col-md-4">
            </div>
            <div class="col-md-4">
            
                       
             <div class="progress">
            <div class="progress-bar" role="progressbar" aria-valuenow="<?php echo $_SESSION['bspr'];?>" aria-valuemin="0" aria-valuemax="100" style="width: <?php echo $_SESSION['bspr'];?>%">
                <span class="sr-only">0% Complete</span>
            </div>
            <span class="progress-type">BEST</span>
            <span class="progress-completed"><?php echo $_SESSION['bspr'];?>%</span>
        </div>
        <div class="progress">
            <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="<?php echo $_SESSION['apr'];?>" aria-valuemin="0" aria-valuemax="100" style="width: <?php echo $_SESSION['apr'];?>%">
                <span class="sr-only"><?php echo $_SESSION['apr'];?>% Complete (success)</span>
            </div>
            <span class="progress-type">AVERAGE</span>
            <span class="progress-completed"><?php echo $_SESSION['apr'];?>%</span>
        </div>
        <div class="progress">
            <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="<?php echo $_SESSION['gpr'];?>" aria-valuemin="0" aria-valuemax="100" style="width: <?php echo $_SESSION['gpr'];?>%">
                <span class="sr-only"><?php echo $_SESSION['gpr'];?>% Complete (info)</span>
            </div>
            <span class="progress-type">GOOD</span>
            <span class="progress-completed"><?php echo $_SESSION['gpr'];?>%</span>
        </div>
        <div class="progress">
            <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="<?php echo $_SESSION['bpr'];?>" aria-valuemin="0" aria-valuemax="100" style="width: <?php echo $_SESSION['bpr'];?>%">
                <span class="sr-only"><?php echo $_SESSION['bpr'];?>% Complete (warning)</span>
            </div>
            <span class="progress-type">BAD</span>
            <span class="progress-completed"><?php echo $_SESSION['bpr'];?>%</span>
        </div>
                              
                        
                            <div class="panel-footer">
                                <a href="stats.php" class="btn btn-info">Back</a>
                            </div>
                    </div>
                
           
            <div class="col-md-4">
            </div>
        </div>

    </div>


    </body>
</html>