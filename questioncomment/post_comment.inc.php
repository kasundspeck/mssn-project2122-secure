<?php 
session_start();

include_once '../dbconnection.php';


$qid =  htmlspecialchars($_GET["qid"]);
$input = mysqli_real_escape_string($conn, $_POST["comment"]); 
$comment = htmlspecialchars($input, ENT_QUOTES);
$username = $_SESSION["username"];

$tokensess = $_SESSION["commenttoken"];
$tokenpost = mysqli_real_escape_string($conn, $_POST["commtoken"]); 




if (empty($tokenpost) OR !(hash_equals($tokensess, $tokenpost)) ) {
    header("location: ../select_question.php?qid=" .$qid. "&status=triedtohack"); 
  
  }

  else {


if (hash_equals($tokensess, $tokenpost)) {

  if (time() >= $_SESSION["commenttoken-expire"] ) {
    
    header("location: ../select_question.php?qid=" .$qid. "&status=tokenexpired"); }

  else { 

    $sql = "INSERT INTO `comments`(`question_id`, `username`, `message`) VALUES ('$qid','$username','$comment')";

    $query = mysqli_query($conn, $sql);
    
    header("location: ../select_question.php?qid=" .$qid);

   } } 

       else {

        header("location: ../select_question.php?qid=".$qid. "&status=smthwrong");  
      
       }       
    }
        
         ?>
