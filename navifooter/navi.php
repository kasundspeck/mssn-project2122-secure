<nav class="navbar navbar-expand-lg navbar-light fixed-top" style="background-color: #e3f2fd;">
  <a class="navbar-brand" href="index.php"><img src="navifooter/q.png" href="index.php" alt="Logo" id="navbarlogo" style=" width: 50px; height: auto"> </a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarText">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
      <a class="nav-link" href="forum.php">Forum</a>
      </li>
    </ul>
  
    <span class="navbar-text">

<?php

      echo "<div id='signuplogin'>";

      if (isset($_SESSION["username"])) {
          echo " <a href='settings.php'><button type='button' class='btn btn-outline-primary'> ACCOUNT </button></a> 
                 <a href='signuplogin/logout.inc.php'><button type='button' class='btn btn-outline-primary'>  LOG OUT  </button></a>";

      } 

      else {

          echo "<div id='signup'>"; 
          echo "<a href='login.php'><button class='btn btn-outline-primary'>  LOG IN  </button></a>"; 
          echo "<a href='signup.php'><button class='btn btn-primary'>  SIGN UP  </button></a>"; 
          echo "</div>"; 

      }

  ?> 

  </span> 
  </div>

</nav>
  
