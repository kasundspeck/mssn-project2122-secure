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
    include_once 'dbconnection.php';
    $username = $_SESSION["username"]; 

     $sql = "SELECT * FROM users WHERE Username = '$username'";
     $result = mysqli_query($conn, $sql);

    ?>

<div class="contentt">

<p style="text-align: center;"> <strong> YOUR ACCOUNT </strong> </p>
 <br>
    

 <?php
    if ($_GET["status"]== "tokenexpired") { ?>
                    
    <div class="alert alert-dark" role="alert"> Token has expired. You have only 1 minute to set your new password. Try again! </div>  
            

    <?php   }


    if ($_GET["status"]== "newpwd") { ?>
        <div class="alert alert-success" role="alert"> Password updated! </div>
    
    <?php } 
    
    if ($_GET["status"]== "smthwrong") { ?>
                    
        <div class="alert alert-danger" role="alert"> Something is wrong, please log out and then log in again! </div>   <?php }?>



<?php

if($result->num_rows > 0) {
    while ($row = $result-> fetch_assoc()){  ?>

                <div class="container" style="margin: auto">
                <div class="row">
                        
                    <table class="table" style="margin: auto; border-top:none;" >
                        <thead>
                            <tr>
                                <th scope="col" width="200px" style="border:none;"></th>
                                <th scope="col"  style="border:none;"> </th>
                            </tr>
                        </thead>
                        
                        <tbody>
                                <?php

                                echo "<tr> 
                                        <td> <strong>Name </strong> </td>
                                        <td> ".$row['NameU']. " ".$row['Lastname']."</td>
                                    </tr>"; 

                                echo "<tr> 
                                    <td> <strong>Username </strong> </td>
                                    <td> ".$row['Username']."</td>
                                </tr>"; 

                                echo "<tr> 
                                        <td> <strong>E-mail </strong> </td>
                                        <td> ".$row['Email']."</td>
                                    </tr>"; 

                                    echo "<tr> 
                                        <td> </td>
                                        <td><a href='changepassword.php'>change your password</a></td>
                                    </tr>"; ?>
                        </tbody>
                    </table>
                </div>
            </div>

            <?php }}; ?>

<br><br><br>


</body>
</html>

            
        </div>
</body>

  <footer> 
    <?php include_once 'navifooter/footer.php';?>
  </footer>
</html>
