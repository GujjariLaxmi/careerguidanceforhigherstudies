
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

   
<h1>AFTER DIPLOMA</h1>
<ul>
<li><a href="#btech"><h3> B.Tech Lateral Entry Scheme</h3></a></li>
<li><a href="#aime"><h3>AIME Certification</h3></a></li>
<li><a href="#study"><h3>Graduation in Study Domain</h3></a></li>
<li><a href="#jobs"><h3>Job Opportunities</h3></a></li>
    </ul>
<div class="content">
<div class="block">
<h2>Further Studies</h2>
<p>Although Polytechnic Diploma programmes are full-fledged technical degree courses run and approved by AICTE / All India Council for Technical Education, these courses are specifically defined at helping students learn the practical aspects and basics of the respective study stream or the subject. 
    <br>Therefore, if you want to expand the horizons of your knowledge, it is important to pursue further studies after the completion of Polytechnic Diploma course.
    Advantages of pursuing further studies after Polytechnic Diploma
    Polytechnic Diploma is a technical degree that can get you a good job on its own.
    <br> However, in order to win more diverse career opportunities and be eligible for high-level jobs, graduation or further studies is a must. 
    <br>Moreover, during your Polytechnic Diploma, you are only introduced to foundational aspects of your respective study domain along with practical training.
    <br> This training might be enough for you to take up junior level jobs or to start early, but they won’t help you to get the necessary promotions or make you eligible for higher level jobs. 
    <br>Therefore, further studies will help you in gaining the in-depth knowledge of your respective domain, at both theoretical and practical level and in turn help you target higher level jobs.</p>
    </div>
    <div class="block">
        
 <a href="btech.php"><h2 id="btech" >1. B.Tech Lateral Entry Scheme</h2></a>

 <img src="Images\engg.jpg">
     <p>The most popular option for Polytechnic Diploma holders, especially those from engineering domains, is to take up B.Tech or B.E.
        <br> For this, candidates need to appear for the respective Engineering Entrance Test for the college and course they want to join.
        <br> Many engineering colleges offer lateral entry to Engineering Diploma holders.<br>
         Lateral entry means you can join the engineering programme directly in the second year or the third semester of B.Tech / B.E. programme.
        <br> Several colleges hold separate entrance test to screen diploma holders for admission via lateral entry scheme.
    </p>
   
    </div>
    <div class="block">
<h2 id="aime">2. AIME Certification</h2>
    <p>Another option for Diploma holders from engineering background is to take up the AIME Certification Course. 
        <br>A.M.I.E (Associate Member of the Institutions of Engineers) certification is a professional certification equivalent to B.E. Degree.
        <br> The candidates who complete the AIME course are awarded AIME certificate by the Institute of Engineering, India.
        <br> The AIME exam consists of two sections and it takes around 4 years to complete the programme. 
        <br>However, Polytechnic Diploma holders do not need to appear for a few papers from Section A, i.e., Project Work. 
        <br>Therefore, they can earn the AIME certification in mere 3 years. You can find more details about this option on the official website i.e. www.ieindia.org.
    </p>
    </div>
    <div class="block">
<h2 id="study">3. Graduation in Study Domain</h2>

<p>
    Apart from B.Tech and B.E. programmes, Polytechnic Diploma holders also have the option to pursue graduation in their respective study domain by joining a three-year regular under-graduate course. 
    <br>This option is especially viable for Diploma holders from non-engineering schemes who can pursue three-year regular graduation programmes such as B.Sc, B.A., BCA, and B.Com. 
    <br>However, candidates must have completed their Class 12 Board Exam or +2 certificates to be eligible for admission to these courses.</p>
    <h4>Career after Polytechnic Course | Scope after Polytechnic Diploma</h4>
    <p>
    Is your Polytechnic Diploma course coming to an end soon? Are you wondering what to do after Polytechnic course? Then it’s time to stop wondering, as there is a plethora of great career options and opportunities that await you after the completion of your Diploma Polytechnic course.
    <br> One of the biggest reasons that students opt for Polytechnic Diploma courses is that it offers excellent career opportunities in an affordable way as well as in relatively short time duration.
    <br> Students from both engineering trades as well as non-engineering fields have a variety of career options to choose from after the completion of the Polytechnic Diploma programme.
    </p>
    <h2 id="jobs">Job Opportunities</h2>
    <p>
    Polytechnic Diploma courses are rightly termed as the short-cut to a professional career by many students, as they offer excellent scope and varied career opportunities to the students. 
    <br>For Class 10 students, who are facing financial difficulties or those who want to start their job career early, Polytechnic offers several career options that are exciting and lucrative. 
    <br>They can opt to join the government service sector through PSU jobs, take up jobs with private companies or even start their own business and be self-employed.
    <br> So, let’s look at the key job career options that a Polytechnic Diploma holder can pursue after the completion of the course.   
</p>
<h3>1. Public Sector / PSUs</h3>

<p>
    The Government or their allied Public Sector Units offer great career opportunities to Polytechnic Diploma holders. 
<br>These companies hire Diploma holders for junior level positions (for both engineering and non-engineering candidates) and technician level jobs.
</p>
<h4>2. Private Sector</h4>
    <p>
        Similar to the public sector, even private sector companies, especially those dealing in manufacturing, construction and electronics and communication domains hire Polytechnic Diploma holders. 
<br>However, these jobs are junior level and have very little scope of promotion or expansion.
    </p>
<h4>3. Self-Employment</h4>

<p >
    Another excellent career option for Polytechnic Diploma holders is that of self-employment.
<br> All the Diploma courses offered by Polytechnic institutes are specially tailored to train the students in the practical or application-oriented aspects of the respective subject.
<br> This prepares the students to learn the basics of the subject and apply it to start their own business.
<br> For instance, a student holding a Diploma in Computer Engineering can easily start a business for computer repair; or someone holding a Diploma in Automobile Engineering can start their own garage or automobile repair store. 
<br>Therefore, Polytechnic Diploma courses also offer great self-employment opportunities to the students.
    </div>
<div>


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

 

