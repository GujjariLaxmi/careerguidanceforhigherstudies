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
       
<h1>AFTER 12th</h1>
<ul>
<li><a href="#law"><h3>Law</h3></a></li>
<li><a href="#science"><h3>Science</h3></a></li>
<li><a href="#mbbs"><h3>MBBS</h3></a></li>
<li><a href="#engg"><h3>Engineering</h3></a></li>
<li><a href="#commerce"><h3>Commerce</h3></a></li>
<li><a href="#banking"><h3>Banking</h3></a></li>
<li><a href="#accoutancy"><h3>Accountancy</h3></a></li>

    
</ul>
<div class="content">

<div class="block">    
Class 12th is a life-changing step of our lives as we move a step closer to making wonderful careers. 
<br>But, how to choose a career after class 12th? In the contemporary world, there is an array of opportunities and courses available for students.
<br> And to choose the right one, they need to either do self-introspection or consult experts to map them to a suitable career. Science, Commerce and Humanities are the 3 majors divisions in class 12.
<br> Each of these has different career options for students.
<br> Read this blog to know the stream-wise popular career options after 12th available for you!
    </div>
<div class="block">
<h2 id="law" >1.Law</h2>
<img src="Images\law.jpg">
<p>Again one of the most sought after career options after 12th is Law or Legal studies.
    <br> There are top-notch Law courses based on leading universities and colleges around the world.
    <br> It offers multidisciplinary subjects with a remarkable scope.
    <br> Also, there are different specializations available for candidates to choose from like Labour Law, Commercial Law, Business Law, Corporate Law, Criminal Law, Cyber Law and Environment Law.
    <br> A professional degree in this discipline can take your career to the next level. Some of the core job profiles in law include:<br>
    Judges 
    ,Litigators
    ,Corporate Lawyers
    ,Compliance Analyst
    ,Arbitrator
    ,Lawyer 
    ,Law Researcher 
    ,Professor </p>
    </div>
<div class="block">
<h2 id="science">Science</h2> 
<img src="Images\science.jpg">
<p>The Science stream is considered the toughest stream in class 12th.
    <br> It is a lucrative field of study with immense career options like MBBS. Engineering, Dentistry, Architecture and many more.  
    <br>Moreover, the field of Science and Technology has gained immense popularity as you can fetch high salary courses after 12th Science. 
    
</p>
</div>
<div class="block">
<h2 id="mbbs" >2.MBBS</h2>
<img src="Images\mbbs.jpg">
<p>MBBS is a popular course opted by students who enjoy studying Biology.<br>
    It is mandatory to have Biology in class 12th to pursue this course.
   <br> The course duration of MBBS in 5 years which includes internships along with academic and hospital training. You can also explore study abroad options for pursuing MD. 
   
</p>
</div>
<div class="block">
    <a href="btech.php"><h2 id="engg" >3.Engineering</h2></a>
<img src="Images\engg.jpg">
<p>
    Yet, again promising career which has truly revolutionized the entire world is Engineering.
    <br> It is considered as one of the prolific job opportunities of the 21st-century with the various multidisciplinary courses.
    <br> Engineering has become one of the most promising career options after the 12th standard. Some of the popular Engineering courses are:
    <br>Civil Engineers
    ,Electrical Engineers
    ,Aerospace Engineers 
    ,Automobile Engineers
    ,Computer Engineers 
    ,Nuclear engineers </p>

</div>
<div class="block">
<h2 id="commerce">4.Commerce</h2> 
<img src="Images\commerce.png">
<p>The Commerce field offers some of the highest paying career options to students. <br>
    Ranging from BBA, BCom, BA Economics at UG level to MBA,  MIM, MIS and PGDM at PG level. 
    <br>The multidisciplinary courses like B.Com or BBA to Integrated Law programme is considered as the highest salary jobs for commerce students. 
    </p>

</div>
<div class="block">
<h2 id="banking">5.Banking</h2>
<img src="Images\banking.jpg">

<p>Professional bankers who have a credible degree are in high demand in the market. 
    <br>Banking has become a leading career option after 12th for commerce students.
    <br> With the inception of multinational banks and other international banks in the country, the industry has become one of the major contributors to job recruitment.</p>

<br>
</div>
<div class="block">
<h2 id="accoutancy">6.Accountancy</h2>
<img src="Images\accountancy.jpg">
<p>Another lucrative career option after 12th is the field of Accountancy.
    <br> Every organisation, private or government needs professionals to handle their accounts.
    <br> Thus, this career pathway is never going to lose its charm. There are advanced certificate courses like CA, CFA, ICWA, etc. in this field that can take your career to great heights!
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














