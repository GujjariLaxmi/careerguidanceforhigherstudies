<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Contact</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="contact-style.css">
        <script src="https://kit.fontawesome.com/5362be6e92.js" crossorigin="anonymous"></script>
    </head>
    <body>
    <header>
            <img class="logo" src="images/logo.png" alt="logo">
            <nav>
                <ul class="nav_links">
                <li><a href="home.php">Home</a></li>
                    <li><a href="aboutus.php">About Us</a></li>
                    
                      <li><a href="services.php">Services</a></li>
                   
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
        <div class="contact-section">
            <div class="contact-info">
                <div><i class="fa-solid fa-location-dot"></i>Address, City, Country.</div>
                <div><i class="fa-solid fa-envelope"></i>contact@gamil.com</div>
                <div><i class="fa-solid fa-phone-flip"></i>+00 0000 000 000</div>
                <div><i class="fa-solid fa-clock"></i>Mon - Fri 8:00 AM to 5:00 PM</div>
            </div>
            <div class="contact-form">
                <h2>Contact Us</h2>
                <form action="sendmail.php" method="post">
                    <input type="text" name="name" class="text-box" placeholder="YOUR NAME" required>
                    <input type="email" name="email" class="text-box" placeholder="YOUR Email" required>
                    <textarea type="message" rows="5" name="content" placeholder="Your Message" required></textarea>
                    <input type="submit" name="submit" class="send-btn" value="send">
                </form>
            </div>
        </div>

        <!----------------------------------------------------------------------footer------------------------------------------------------------------>
        <footer class="foo">
            <div class="footer-content">
                <h3>Career Up</h3>
                <p>Write about your website in two lines which give a basic idea to the visiter who is checking your website.</p>
                
            </div>
            <div class="footer-bottom">
                <p>copyright &copy; 2022 carerrUp. designed by <span>Your Name</span></p>
            </div>
        </footer>
    </body>
</html>