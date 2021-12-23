<?php session_start(); 

 $_SESSION["commenttoken"] = bin2hex(random_bytes(24));
 $_SESSION["commenttoken-expire"] = time() +3600;
 $commtoken = $_SESSION["commenttoken"]; 


?>

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
    
    $qid =  htmlspecialchars($_GET["qid"]);

    $sql = "SELECT * FROM questions WHERE qid =" . $qid;

     $result = $conn->query($sql);
    
    ?>

<div class="contentt">

    
                              
<div class="container">
                                <table class="table" style="margin: auto; border-top:none;" >
                                  <thead>
                                    <tr>
                                      <th scope="col"  style="border:none;">Question <?php echo $qid ; ?> </th>
                                      <th scope="col"  style="border:none;">From</th>
                                    </tr>
                                  </thead>
                                  <tbody> 

    <?php
        
       
        
        while ($row = $result-> fetch_assoc()){
                
                
                
                echo " <tr>   
                    <td> <span style='font-size: 25px;'>" .$row["question"]."</span></td> 
                    <td>" .$row["username"]."</td> 
                </tr>";
            }
                ?>
                            
                                      
  </tbody>
    </table>
    
<br> 
<p> <strong> Comments </strong></p>
 <?php 
    
     $sql2 = "SELECT comments.message, comments.username FROM comments, questions WHERE questions.qid = " . $qid . " and comments.question_id = questions.qid";
     $result2 = $conn->query($sql2);
    
    if($result->num_rows >= 1) {
            while ($row2 = $result2-> fetch_assoc()){
                echo "<span style='color: darkblue'>".
                
                $row2['username'] . "</span>: "
                    . $row2['message'] . " </br> <br>";
            }
        }
        else {
            echo "Be the first one to comment!";
        }
        $conn->close();
    
    ?>
</div> 
    </div>
    
    <?php
        if (isset($_SESSION["username"])){
               echo     "<div class='contentt'>
                        <div id='form'>
                                    <div class='col-lg-7 mx-auto'>
                                        <div class='card mt-2 mx-auto p-10 bg-light'>
                                        <div class='text-center mt-5'>
                                            <p id='' style='font-size: 20px;'> <strong> Add a comment</strong></p>
                                        </div>
                                            <div class='card-body bg-ligh'>
                                                <div class='container-fluid'>
                                                    <form action='questioncomment/post_comment.inc.php?qid=" .$qid. "' method='POST' id='comment-form' role='form'>
                                                        <div class='controls'>
                                                       
                                                        <input  type='hidden' name='commtoken' class='form-control' value='".$commtoken."'>
                                                        
                                                            <div class='row'>
                                                                <div class='col-md-12'>
                                                                    <div class='form-group'> <label></label> <input type='text' name='comment' class='form-control' placeholder='Please enter your comment' required='required' data-error='Comment is required.'> </div>
                                                                </div>
                                                            </div>
                                                            </div>
                                                            <div class='text-center mt-3'>
                                                                <button type='submit' class='btn btn-primary btn-block' name='submit'>Post Comment</button> 
                                                            </div>
                                                    </form>
                                                </div>
                                            </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>";
        }
        else {
            echo "<div class='text-center mt-3'>
               <p>You must be <a href = 'login.php'>logged in</a> to comment!</p>
                                                            </div>";
        }
                

        ?>
    

    
    <div class = "contentt" style="text-align: center;"> 
        <br>
        <br>
        <p><a href = 'forum.php'>Back to forum</a></p>
    </div>
    
 
</body>

  <footer> 
    <?php include_once 'navifooter/footer.php';?>
  </footer>
</html>
