<?php session_start();?>

<!DOCTYPE html>
<html lang="en"> 

  <head>
    <title>Forum</title>
    <link rel="stylesheet" type="text/css" href="cssfile.css"> 
    <!--<link rel="icon" href="" type="image/gif" sizes="100%"> -->
    <meta charset="utf-8">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" 
      integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l"
      crossorigin="anonymous">  
    <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous"> -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
   
    <meta http-equiv="Content-Security-Policy" content="script-src https://localhost"> 
</head>

<body>

<?php 
    include_once 'navifooter/navi.php'; 
    ?>
<br> <br>
<div class="contentt">

<p style="text-align: center;"> <strong> CHANGE PASSWORD </strong> </p>
 <br>
    
 <div id="form">
                    <div class="col-lg-7 mx-auto">
                      
                            <div class="card-body bg-light">

                                <div class="container-fluid">
                                    <form action="changepwd/currentpwd.php" method="POST" id="question-form" role="form">

                                    <?php
                                                if ($_GET["error"]== "fail") { ?>
                                                   
                                                   <div class="alert alert-danger" role="alert"> This is not your correct password. Try again! </div>
                                                

                                               <?php } ?>
                                       
                                        <div class="controls">

                                            <div class="row">

                                                <div class="col-md-12">
                                                    <div class="form-group"> <label ></label> <input type="password" name="currpassword" class="form-control" placeholder="current password" required="required" data-error="Question is required."> </div>
                                                </div>
                                            </div>
                                            
                                            </div>

                                            <div class="text-center mt-3">
                                                <button type="submit" class="btn btn-primary btn-block" name="submit">check</button> 
                                            </div>

                                    </form>
                                </div>
                            </div>
                            </div>
                        </div>
                    </div>


<br><br><br>




</body>

  <footer> 
    <?php include_once 'navifooter/footer.php';?>
  </footer>
</html>
