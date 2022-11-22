<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>CareerUp.in</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="home.css">
        <script src="https://kit.fontawesome.com/5362be6e92.js" crossorigin="anonymous"></script>
    </head>
   
        
        <!-----------------------------------------------------------Navigation Bar - Code ------------------------------------------------------->
        <header>
            <img class="logo" src="images/logo.png" alt="logo">
            <nav>
                <ul class="nav_links">
                <li><a href="home.php">Home</a></li>
                    <li><a href="aboutus.php">About Us</a></li>
                    
              
                   
    <?php
  session_start();
  ini_set('display_errors', '0');#dont display errors
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
        <body class="bg-color">

        <!----------------------------------------------------------------------home page------------------------------------------------------------->
        <div class="container">
            <div class="header-text ">
                <h1>Hi, What's <span>Next ?</span></h1>
                <p>- Don't know what to do next then your at right plce, see your self at good position with our expert guidence<span>.</span></p>
            </div>
        </div>
        

        <!----------------------------------------------------------------------footer------------------------------------------------------------------>
        <footer class="foo">
            <div class="footer-content">
                <h3>Career Up</h3>
                <p>Write about your website in two lines which give a basic idea to the visiter who is checking your website.</p>
                
            </div>
            <div class="footer-bottom">
                <p>copyright &copy; 2022 carerrUp. designed by <span>PVS</span></p>
            </div>
        </footer>
    </body>
</html>