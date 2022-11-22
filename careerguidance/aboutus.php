<html>
<head>
<link rel="stylesheet" href="about.css">
</head>

<header>
            <img class="logo" src="images/logo.png" alt="logo">
            <nav>
                <ul class="nav_links">
                <li><a href="home.php">Home</a></li>
                    <li><a href="aboutus.php">About Us</a></li>
                    
                   
                   
    <?php
  session_start();
  ini_set('display_errors', '0');
  if($_SESSION["username"]==true){
  echo'<li><a href="profile.php" >profile </a></li>';
  }
  else{
  echo'<li><a href="login.php">sign in </a></li>';
  }
  
  ?>
 <?php 
     if(isset($_SESSION['username'])){
     echo'<li><a href="logout.php" >logout</a></li>';
   
     }
     ?>
   
                </ul>
            </nav>
            <a class="cta" href="contact.php" ><button>Contact</button></a>
        </header>
        <body>
<div id="about">
    <div class="parent">
        <img src="Images\about2.png">
        <div class="text">
          <center><h2>About Us</h2></center>
          <p>
          <ul><h2> Career Guidance :</h2>
             We provide different types of career options like for 10th pass out,12th pass outor may some other career options which can help a student to find their career options.
            <br>->After Tenth.
            <br>->After 12th.
            <br>->For Further Studies.  </ul>
    </p>
        </div>
      </div>

  </div>
</body>

  </html>