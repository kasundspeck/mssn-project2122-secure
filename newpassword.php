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
    $token = $_SESSION["token"]; 
    ?>
    
<br> <br>
<div class="contentt">

<p style="text-align: center;"> <strong> CHANGE PASSWORD </strong> </p>
 <br>
    
 <div id="form"> 
                    <div class="col-lg-7 mx-auto">
                      
                            <div class="card-body bg-light">

                                <div class="container-fluid">
                                    <form action="changepwd/newpwd.php" method="POST" id="question-form" role="form" oninput='rptpassword.setCustomValidity(rptpassword.value != newpassword.value ? "Passwords do not match." : "")'>


                                        <div class="controls">

                                        <div class="col-md-6">
                                                 <div class="form-group"><input id="password1" type="hidden" name="token" class="form-control" value="<?php echo $token;?>"> </div>
                                             </div>

                                        <div class="row">
                                            <div class="col-md-6">
                                                 <div class="form-group"> <input id="password1" type="password" name="newpassword" class="form-control" placeholder="New password" required="required" data-error="New password is required."> </div>
                                             </div>

                                            <div class="col-md-6">
                                                <div class="form-group"> <input id="password2" type="password" name="rptpassword" class="form-control" placeholder="Please repeat your password" required="required" data-error="Please repeat your new password"> </div>
                                            </div>
                                        </div> 

                                        </div>
                                            
                                         

                                            <div class="text-center mt-3">
                                                <button type="submit" class="btn btn-primary btn-block" name="submit">change your password</button> 
                                            </div>
                            
                                    </form>
                                </div>
                            </div>
                            </div>
                        </div>
              

<br><br><br>


  </div>
              

</body>
  <footer> 
    <?php include_once 'navifooter/footer.php';?>
  </footer>

</html>
