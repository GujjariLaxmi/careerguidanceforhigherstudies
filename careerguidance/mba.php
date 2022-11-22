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
       
<h1>MBA</h1>
<div class="content">
<div class="block">
<img src="Images\mba.jpg">
<p>MBA stands for Master of Business Administration.<br>
  First introduced by Harvard University Graduate School of Administration in 1908 (now Harvard Business School), the MBA is the original graduate degree offered by business schools globally.<br >   
  Having “MBA” on your resume will help you stand out to employers, but the true meaning of the MBA goes beyond three letters on a sheet.<br>
  During an MBA, you’ll build your business knowledge, grow your professional network, and boost your career and salary prospects.
</div>
<div class="block">
<h2>MBA courses </h2>
<img src="Images\mbacourses.jpg">
<p>Core MBA courses cover the foundations of general management. Core courses typical of MBA programs include:</p>
<div class="list">
<ul>
<li>Accounting</li>
<li>Business Communication</li>
<li>Business Ethics</li>
<li>Business Strategy</li>
<li>Data Analytics</li>
<li>Economics</li>
<li>Finance</li>
<li>Leadership</li>
<li>Marketing</li>
<li>Operations</li>
</ul>
<div>
</div>
<div class="block">
<h2>MBA jobs: What can you do with an MBA?</h2><p>
What can you do with an MBA degree? Pretty much anything you set your mind to. An MBA prepares you for jobs in a variety of industries and roles. Typical MBA jobs include:<p>

<ul>
<li>Finance Manager</li>
<li>Financial Advisor</li>

<li>HR Manager</li>
<li>IT Manager</li>
<li>Management Analyst</li>
<li>Management Consultant</li>
<li>Marketing Manager</li>
<li>Operations Manager/li>

</ul>

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














