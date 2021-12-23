
<?php

function usernameExists($conn, $username) {

    $sql = "SELECT * FROM users WHERE Username = ? ; " ; 
    $stmt = mysqli_stmt_init($conn); 

    if(!mysqli_stmt_prepare($stmt, $sql)) {

            header("location: ../signup.php?error=stmtfailed");
            exit();

    }

    mysqli_stmt_bind_param($stmt, "s", $username); 

    mysqli_stmt_execute($stmt); 

    $resultData = mysqli_stmt_get_result($stmt); 

    if ( $row = mysqli_fetch_assoc($resultData)){

        return $row; 


    }

    else {

        $result = false; 
        return $result; 
    }

        mysqli_stmt_close($stmt); 
    
}

function createUser($conn, $name, $lastname, $email, $username, $hashed_password)  {

    $sql = "INSERT INTO users (NameU, Lastname, Email, Username, PasswordU) VALUES (?, ?, ?, ?, ?) ;" ; 
    $stmt = mysqli_stmt_init($conn); 

    if(!mysqli_stmt_prepare($stmt, $sql)) {

            header("location: ../signup.php?error=stmtfailed");
            exit();

    }  

    mysqli_stmt_bind_param($stmt, "sssss", $name, $lastname, $email, $username, $hashed_password ); 

    mysqli_stmt_execute($stmt);
    mysqli_stmt_close($stmt); 

    header("location: ../login.php?error=none");
    exit();
}

?>