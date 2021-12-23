 <?php

include_once 'functions.php';
include_once '../dbconnection.php';

    if(isset($_POST["submit"])) {
        
        $name = mysqli_real_escape_string($conn, $_POST["name"]); 
        $lastname = mysqli_real_escape_string($conn, $_POST["lastname"]); 
        $email = mysqli_real_escape_string($conn, $_POST["email"]); 
        $username = mysqli_real_escape_string($conn, $_POST["username"]); 
        $password = mysqli_real_escape_string($conn, $_POST["password"]);
        $hashed_password = password_hash($password, PASSWORD_DEFAULT);
        
      
    if (usernameExists($conn, $username) !== false) 
        { header("location: ../signup.php?error=usernametaken"); 
            exit(); }

        
    createUser($conn,  $name, $lastname, $email, $username, $hashed_password); 

    } 

    else  header("location: ../signup.php?error");

?>
