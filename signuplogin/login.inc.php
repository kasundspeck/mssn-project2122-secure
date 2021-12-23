<?php 

include_once '../dbconnection.php';

$username = mysqli_real_escape_string($conn, $_POST["username"]); 
$password = mysqli_real_escape_string($conn, $_POST["password"]);


$stmt = $conn->prepare("SELECT NameU, Lastname, Username, PasswordU FROM users WHERE Username = ?");
$stmt->bind_param("s", $username);

$stmt->execute();
$stmt->store_result();
$stmt->bind_result($nameu, $lastname, $uname, $passwordu);

  
if ($stmt->num_rows  == 1){
    $stmt->fetch();
    if (password_verify($password, $passwordu)) {
               header("location: ../index.php");  
                session_start();
                $_SESSION["username"] = $uname;
                $_SESSION["nameu"] = $nameu;
                $_SESSION["lastname"] = $lastname;
                
                }

         else { 
        
                echo "<script type='text/javascript'>alert('Wrong LogIn information. Please try again!');</script>";
                header("location: ../login.php?status=wronginfo");
          }

        
    }
else{
    echo "<script type='text/javascript'>alert('Wrong LogIn information. Please try again!');</script>";
                header("location: ../login.php?status=wronginfo");
    
}
    

    mysqli_close($conn); 
    
    
         ?>
