<?php
ini_set('display_errors', '0');
 session_start();
?>
<!DOCTYPE html>
<head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>profile page</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="profile.css">
        <script src="https://kit.fontawesome.com/5362be6e92.js" crossorigin="anonymous"></script>
    </head>
<body>
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

<center>
    <div class="profile">
    <h2>Change Password</h2>
    <form name="form1" method="POST" action="updatepassword.php">
  <table>
    <tr><td><input class="in" type="password" name="password" placeholder="old password"></td><tr>
    <tr><td><input class="in" type="password" name="newpassword" placeholder="new password"></td></tr>
    <tr><td><input class="btn" type="submit" value="change"></td></tr>
    </table>
    </form>
    <div>
</center>

</body>
<footer class="foo">
            <div class="footer-content">
                <h3>Career Up</h3>
                <p>Write about your website in two lines which give a basic idea to the visiter who is checking your website.</p>
               
            </div>
            <div class="footer-bottom">
                <p>copyright &copy; 2022 carerrUp. designed by <span>Your Name</span></p>
            </div>
        
</footer>
</html>
