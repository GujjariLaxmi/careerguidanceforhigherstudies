
<!DOCTYPE html>

<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="Services.css">
    </head>
    <body class="bg-color">
        <!-----------------------------------------------------------Navigation Bar - Code ------------------------------------------------------->
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
        <!-- ---------------------------------------------------------services----------------------------------------------------------------------- -->

        <div id="services">
            <div class="container">
                <h1 class="sub-title"><span>My </span>Services</h1>
                <div class="services-lis">
                    <div>
                        <i class="fa-solid fa-code"></i>
                        <h2>SSC</h2>
                        <p>after complition of ssc we have confused to make career decision .we have pleanty of options to choose after complition of ssc</p>
                            <a href="ssc.php" target="_blank">know more</a>
                        </div>
                    <div>
                        <i class="fa-brands fa-android"></i>
                        <h2>Inter</h2>
                        <p>after complition of inter we have confused to make career decision .we have pleanty of options to choose after complition of inter</p>
                            .</p>
                            <a href="afterinter.php" target="_blank">know more</a>
                    </div>
                    <div>
                        <i class="fa-brands fa-apple"></i>
                        <h2>Diploma</h2>
                        <p>after complition of Diploma we have confused to make career decision .we have pleanty of options to choose after complition of Diploma</p>
                            .</p>
                            <a href="afterdiploma.php" target="_blank">know more</a>
                    </div>
                    <div>
                        <i class="fa-brands fa-apple"></i>
                        <h2>Btech</h2>
                        <p>after complition of Btech we have confused to make career decision .we have pleanty of options to choose after complition of Btech</p>
                            .</p>
                            <a href="btech.php" target="_blank">know more</a>
                    </div>
                    <div>
                        <i class="fa-brands fa-apple"></i>
                        <h2>Mtech</h2>
                        <p>after complition of Mtech we have confused to make career decision .we have pleanty of options to choose after complition of Mtech</p>
                            .</p>
                            <a href="aftermtech.php" target="_blank">know more</a>
                    </div>
                    <div>
                        <i class="fa-brands fa-apple"></i>
                        <h2>MBA</h2>
                        <p>after complition of Btech we have confused to make career decision .we have pleanty of options to choose after complition of Btech</p>
                            .</p>
                            <a href="mba.php" target="_blank">know more</a>
                    </div>
                    <div>
                        <i class="fa-brands fa-apple"></i>
                        <h2>Phd</h2>
                        <p>after complition of Mtech we have confused to make career decision .we have pleanty of options to choose after complition of Mtech</p>
                            .</p>
                            <a href="phd.php" target="_blank">know more</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- <script src="" async defer></script> -->

        <footer class="foo">
            <div class="footer-content">
                <h3>Career Up</h3>
                <p>Write about your website in two lines which give a basic idea to the visiter who is checking your website.</p>
                <ul class="socials">
                    <li></li><a href="https://www.linkedin.com/in/vamshi-krishna-k-639515234/" target="_blank"><i class="fa-brands fa-linkedin"></i> </a></li>
                    <li></li><a href="https://www.instagram.com/k.vamshi_krishna_/" target="_blank"><i class="fa-brands fa-square-instagram"></i></a></li>
                    <li></li><a href="https://twitter.com/vamshi_kurakula" target="_blank"><i class="fa-brands fa-square-twitter"></i></a></li>
                </ul>
            </div>
            <div class="footer-bottom">
                <p>copyright &copy; 2022 carerrUp. designed by <span>Your Name</span></p>
            </div>
        </footer>
    </body>
</html>