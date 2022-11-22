<html>
    <head><link rel="stylesheet" type="text/css" href="course.css"></head>
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
       
<div class="content">
<h1>PHD</h1>
<div class="block">
<img src="Images\phd.jpg">


<p>PhD,short for Doctor of Philosophy,is a doctoral degree programme with a minimum duration of 3 years and maximum duration of 6 years.<br>
However, The course duration may vary frm one institute to the other and also depends on the candidates .<br>
This is an academic or professional degree that,,in most countries,qualifies the degree holder to teach their chosen phd subject at the university level or to work in a specialized position in their chosen field or interest.
<br><br>PhD courses in different streams<br>
    </div>
<div>
    <h3>PhD courses in Humanities</h3>
*Phd in Humanities
<br>*PhD in Economies
<br>*PhD in geography
<br>*PhD in English
<br>*PhD in Psychology...etc

<h3>PhD courses in Science</h3>
*PhD in chemistry
<br>*PhD in science
<br>*PhD in clinical research
<br>*PhD in Bio technology
<br>*PhD Zoology...etc

<h3>PhD in Commerce</h3>
*PhD in commerce managment<br>
*PhD in Accounting and Financial Management.

<h3>PhD in Engineering</h3>
*PhD in Genetic engineering
<br>*PhD in civil Engineering
<br>*PhD in IT
<br>*PhD in production engineering
<br>*PhD in chemical engineeering


<h3>PhD in Teaching and Education</h3>
*PhD in Education
<br>*PhD in Teaching
</div>
    </div>
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














