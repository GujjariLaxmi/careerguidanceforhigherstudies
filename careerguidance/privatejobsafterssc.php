<html>
    <head><link rel="stylesheet" type="text/css" href="course.css"></head>
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
   
<h1>Private Jobs After SSC</h1>
<div class="content">

<div class="block">

<h3>List of private jobs After SSC</h3>
 <ol>
<li>Data Entry</li>
<li>Sales Executive</li>
<li>Receptionist</li>
<li>Security Guard</li>
</ol>
</div>
<div class="block">
<h2>1.Data Entry</h2>
<img src="Images\dataentry.jpg">
<p>The process of entering data into a computerized database or spreadsheet. Data entry can be performed by an individual typing at a keyboard or by a machine entering data electronically.<br>
Many people in the electronic age still continue to make use of pen and paper, printed reports and other hard-copy documents. 
<br>When the information contained in these documents needs to be converted to electronic form, it is the data entry keyers, who take on the task of typing information into the databases.
<br> Although there are fewer data entry operators in the U.S. than there were in past decades, data entry skills are still needed in a variety of settings, including government agencies, magazine publishers and mail-order retailers.
<br>What Are the Skills for Data Entry?<br>
Applicants for data entry jobs are generally expected to have, at minimum, strong typing and reading abilities. Here is a list of the skills that many employers require of data entry applicants:
<br>Typing: .
<br>1.10-Keypad: 
<br>2.Reading: 
<br>3.Foreign languages: 
<br>4.Proofreading:
<br>5.Computer skills: 
<br>6.Customer Service:
<br>7.Time Management:</p>
</div>
<div class="block">
<h2>2.Sales Executive</h2>
<img src="Images\sales.jpg">
<p>A sales executive is an employee of a company who is responsible for selling the company’s goods and services to customers. 
<br>Customers are not limited to individual people, but can also be other businesses and even government organizations.
<br> Depending on the company, the position may refer to a person who makes sales over the phone, assists customers with selections in a store or even sells door-to-door.
</p>
</div>
<div class="block">
    <h2>3.Receptionist</h2>
    <img src="Images\receptionist.jpg">
<p>The primary role of a receptionist is to perform administrative and coordination tasks at the front desk of an office or work department. Greeting guests and customers and answering phones are core responsibilities. 
<br>In these roles, the receptionist must establish and maintain rapport.<br>
Receptionists also direct visitors in an office to the right area, such as to an employee’s work space.
<br> Many receptionists perform basic clerical tasks, such as filing, preparing and copying documents.
<br> The receptionist may also distribute mail to the employees in the office and makes sure that the outgoing mail gets to the post office. Managing basic correspondence is another responsibility.
</p>
</div>
<div class="block">
    <h2>4.Security Guard</h2>
    <img src="Images\security.jpg">
<p>The main duties and responsibilities of security guards are to watch and patrol areas to guard against illegal activity and dangerous scenarios. 
<br>Security guards work for a variety of employers, including schools, banks, hospitals and commercial centers, such as casinos, sports centers, power plants and transportation centers.
</p>
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
