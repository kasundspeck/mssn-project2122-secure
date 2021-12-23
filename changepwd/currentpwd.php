<?php

session_start(); 

include_once '../dbconnection.php';

$currpassword = mysqli_real_escape_string($conn, $_POST["currpassword"]);
$username = $_SESSION["username"];
 

$stmt = $conn->prepare("SELECT Username, PasswordU FROM users WHERE Username = ?");
$stmt->bind_param("s", $username);

$stmt->execute();
$stmt->store_result();
$stmt->bind_result($uname, $passwordu);

  
if ($stmt->num_rows  == 1){
    $stmt->fetch();
    if (password_verify($currpassword, $passwordu)) {


              
        $_SESSION["token"] = bin2hex(random_bytes(24));
        $_SESSION["token-expire"] = time() +60;

        header("location: ../newpassword.php");  
               
                }

         else { 
                
                 header("location:../changepassword.php?error=fail");
          }

        
    }
       
    

    mysqli_close($conn); 
    
    
         ?>
