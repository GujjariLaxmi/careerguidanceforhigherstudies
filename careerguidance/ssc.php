
<html>
<head><link rel="stylesheet" type="text/css" href="course.css"></head>
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

<body>


<h1>AFTER SSC</h1>
<div class="content">
<a href="afterssc.php"> <h2>1.Higher Studies</h2></a>
</div>
<ul>
<li><h3>Intermediate</h3></li>
<li><h3>Diploma</h3></li>
<li><h3>ITI</h3></li>
<li><h3>Paramedic</h3></li>
    
</ul>

</div>
</div>
    <div>
<h2>2.Jobs</h2>
</div>
<ul>
<li><a href="publicjobsafterssc.php" ><h3>Government</h3></a></li>
<li><a href="privatejobsafterssc.php" ><h3>Private</h3></a></li>
    
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



