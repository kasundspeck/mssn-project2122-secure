<?php 
session_start();

include_once '../dbconnection.php';


$username = $_SESSION["username"];
$input = mysqli_real_escape_string($conn, $_POST["question"]); 
$question = htmlspecialchars($input, ENT_QUOTES);

$tokensess = $_SESSION["questiontoken"];
$tokenpost = mysqli_real_escape_string($conn, $_POST["questiontoken"]); 




if (empty($tokenpost) OR !(hash_equals($tokensess, $tokenpost)) ) {
    header("location: ../question.php?status=triedtohack"); 
  
  }

  else {


if (hash_equals($tokensess, $tokenpost)) {

  if (time() >= $_SESSION["questiontoken-expire"] ) {
    
    header("location: ../question.php?status=tokenexpired"); }

  else { 

    $sql = "INSERT INTO `questions`(`username`, `question`) VALUES ('$username','$question')";
    $query = mysqli_query($conn, $sql);
    header("location: ../forum.php");


   } } 

       else {

        header("location: ../question.php?status=smthwrong");  
      
       }       
    }
    
        
         ?>
