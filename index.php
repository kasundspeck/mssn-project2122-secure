<?php session_start(); ?>

<!DOCTYPE html>
<html lang="en"> 

  <head>
    <title>Project</title>
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

<!-- <script> alert("from website"); </script> -->


<?php include_once 'navifooter/navi.php'; ?>

<div class="contentt">

  <h1> WELCOME TO OUR PROJECT OF MANAGEMENT OF SYSTEM SECURITY AND NETWORK </h1> 

  <h3> by Hanna Mayr & Enisa Huseni </h3> <br>  <br>

  <?php

          if (isset($_SESSION["username"])) {

            echo " <h3> Hello <strong>" .$_SESSION["nameu"]  ."</strong>! </h3>"; 
          }   
          
  if ($_GET["status"]== "triedtohack") {   ?>
                    
        <div class="alert alert-danger" role="alert"> A hack attempt was made on your account! But relax, this website is safe! </div>   <?php }?>
      
 

</div> 
</body>

  <footer> 
    <?php
      include_once 'navifooter/footer.php'; 
      ?>
  </footer>

</html>
