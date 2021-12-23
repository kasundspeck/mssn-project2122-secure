<!DOCTYPE html>
<html lang="en"> 

<head> 

    <title>sign up</title>
    <link rel="stylesheet" type="text/css" href="cssfile.css"> 
    <meta charset="utf-8">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" 
    integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l"
    crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
 
    <meta http-equiv="Content-Security-Policy" content="script-src https://localhost">

</head>

<body> 

    <?php include_once 'navifooter/navi.php'; ?>

    <div class="contentt">
     
        <div id="form">

            <div class="col-lg-7 mx-auto">
                <div class="card mt-2 mx-auto p-9 bg-light">

                <div class="text-center mt-5">
                    <p id="" style="font-size: 20px;"> <strong> SIGN UP </strong></p>
                    <p>If you already have an account, <a href="login.php"> click here </a> to log in </p>
                </div> 
                
                    <div class="card-body bg-light">

         
                        <div class="container-fluid">
                            <form  action="signuplogin/signup.inc.php" method="POST" id="contact-form" role="form" oninput='rptpassword.setCustomValidity(rptpassword.value != password.value ? "Passwords do not match." : "")'> 
                          
                          <?php  if ($_GET["error"]== "usernametaken") {   ?>
                    
                    <div class="alert alert-danger" role="alert"> Username is already taken, please choose another </div>   <?php }?>
                                    <div class="controls">


                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group"> <label for="form_name" id="name">Name</label> <input type="text" name="name" class="form-control" placeholder="Enter your name" required="required" data-error="Required"> </div>
                                            </div>


                                            <div class="col-md-6">
                                                <div class="form-group"> <label>Lastname</label> <input type="text" name="lastname" class="form-control" placeholder="Enter your lastname" required="required" data-error="Required"> </div>
                                            </div>
                                        </div>
                                        
                                        <div class="row">
                                        <div class="col-md-6">
                                                <div class="form-group"> <label>Username</label> <input type="text" name="username" class="form-control" placeholder="Enter a username" required="required" data-error="Required"> </div>
                                            </div> 

                                            <div class="col-md-6">
                                                <div class="form-group"> <label for="form_email">Email</label> <input type="email" name="email" class="form-control" placeholder="Enter your email" required="required" data-error="Required"> </div>
                                            </div>
                                        </div>

                        
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group"> <label for="form_password" id="password1">Password</label> <input id="password1" type="password" name="password" class="form-control" placeholder="Please enter a password" required="required" data-error="Password is required."> </div>
                                            </div>

                                            <div class="col-md-6">
                                                <div class="form-group"> <label for="form_password" id="password2">Repeat your password</label> <input id="password2" type="password" name="rptpassword" class="form-control" placeholder="Please repeat your password" required="required" data-error="Please repeat your password"> </div>
                                            </div>
                                            
                                        </div>

                                        <div class="text-center mt-3">
                                        <button type="submit" class="btn btn-primary btn-block" name="submit">Sign Up</button> </div>
        
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </body>

    <footer> 
  <?php include_once 'navifooter/footer.php'; ?>

</footer>
</html>

  
