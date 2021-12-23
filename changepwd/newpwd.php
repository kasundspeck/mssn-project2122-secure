<?php

session_start(); 
include_once '../dbconnection.php';
 
$newpassword = mysqli_real_escape_string($conn, $_POST["newpassword"]);
$hashed_newpw = password_hash($newpassword, PASSWORD_DEFAULT);
$username = $_SESSION["username"];
$tokensess = $_SESSION["token"];
$tokenpost = mysqli_real_escape_string($conn, $_POST["token"]); 



if (empty($tokenpost) OR empty($tokensess) OR !(hash_equals($tokensess, $tokenpost)) ) {
    header("location: ../index.php?status=triedtohack"); 
  
  }

  else {


if (hash_equals($tokensess, $tokenpost)) {

  if (time() >= $_SESSION["token-expire"] ) {
    unset($_SESSION["token"]); 
    unset($_SESSION["token-expire"]); 
    header("location: ../settings.php?status=tokenexpired"); }

  else { 
    
    $query = "UPDATE users SET PasswordU = '$hashed_newpw' WHERE Username = '$username'";

        $result = mysqli_query($conn, $query);

        if($result){


            unset($_SESSION["token"]); 
            unset($_SESSION["token-expire"]); 
            header("location: ../settings.php?status=newpwd");  

       } } } 

       else {

        header("location: ../settings.php?status=smthwrong");  
      
       }       
    }
?>

