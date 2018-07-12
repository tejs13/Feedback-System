 <?php
session_start();
?>
 <html>
      <head>
    <title>User Details</title>
        
          <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css">
        <link href="js/bootstrap.min.js" rel="stylesheet" type="text/js">
          <link href="style.css" rel="stylesheet">
      
          <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
          <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
          <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
          <script>
  $(window).on('load',function(){
        $('#myModal').modal('show');
    });
          </script>
   
        
         
     </head>
     <body style="backgrund-color:#cceeff">
         
         
         <button class="btn btn-default" data-toggle="modal"  data-target="#myModal">Stats</button>
         
 <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header text-center">
                <h4 class="modal-title w-100 font-weight-bold"><?php echo $_GET['kes'];?></h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body mx-3">
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
       
       

            </div>
            <div class="modal-footer d-flex justify-content-center">
                <button class="btn btn-default" id="myButton">OK</button>
            </div>
        </div>
    </div>
</div>
         </body>
</html>

        