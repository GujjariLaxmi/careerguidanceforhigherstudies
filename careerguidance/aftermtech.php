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
            <div class="block">
 <ul>
<li><a href="#phd"><h3>Specialization in PhD</h3></a></li>

<li><a href="#jobs"><h3>Job After M.Tech</h3></a></li>

</ul>

    </div>
    
    <div class="block">

<a href="phd.php"><h2 id="phd">Specialization in PhD</h2></a>
<img src="Images\phd.jpg">
The area of ​​specialization in M.Tech will determine your area of ​​study in Ph.D. For example, if you have done M.Tech in Mechanical Engineering, then your area of ​​specialization in PhD will be related to Mechanical Engineering.
<br> However, the actual area of ​​research is decided by the concerned department of the Institute Committee on the basis of knowledge and ability of the students.
<br> Nowadays, the inter-disciplinary approach in PhD is becoming popular. This means that candidates can opt for two PhD specializations.
    </div>
<div class="block">
<h3>Fellowship</h3>
Reputed engineering institutes like NITs, IITs and IISc Bangalore have different funding policies for PhD students.
<br> Fellowships range from Rs 19,000 to Rs 24,000 per month. Usually, the time period for this would be 3 years, which can be extended as per the requirement.

<h3>Scholarship</h3>
Department of Information Technology, Department of Science and Technology, UGC, AICTE and CSIR offer scholarships to PhD students.
<br> There are also separate scholarship schemes for women scientists.
<br> Apart from the above mentioned government institutions, private companies like SAIL and Microsoft also offer scholarships to PhD students with specialization in industry related problems.
<br> Apart from this, many private companies also invest and contribute to increase research and development activities in the country.

<h4>Jobs After M.Tech:</h4> 
Engineering is one of the most popular and sought after career option among young students in India.
<br> Talking about career after M.Tech, it becomes important that you should know your interest as well as what you want to do next. Today we are telling you about various career opportunities after M.Tech.

<h5>Career opportunities after doing M.Tech can be divided into 4 parts-</h5>

Research degrees like PhD can be done.
<br>One can do job after completing M.Tech.
<br>Can teach in engineering college as a teacher.
<br>You can start your own organization.
<h4>PhD- Doctoral Degree After M.Tech (PhD- Doctoral Degree After M.Tech)</h4>
<br>If you want to get into teaching profession or want to work in research and development organization, then you should do PhD after M.Tech in your area of ​​interest. If you have decided to do PhD after M.Tech, then you can make a career in teaching or research. To promote higher education in India, the Government of India has given grants to Research and Development Organization and Central Universities like IITs and NITs. The job in the teaching profession is challenging. Based on your interest you have to choose your career after M.Tech.
</div>
<div class="block">
<h2 id="jobs">Job After M.Tech</h2>
Looking at the trend, you can get the same job profile after M.Tech which is available after B.Tech. 
<br>However, the job role will have more responsibilities and the salary package will also be comparatively higher.
<br> Due to higher courses, you will have better understanding of technical things. You will be able to complete all the tasks in a productive manner.
<br> After M.Tech you can easily find jobs in Research and Development Organizations, Manufacturing Firms and IT Companies as Project Manager, Research Associate and Senior Engineer.
</div>
<div class="block">
<h2>Jobs In Teaching Profession</h2>
Generally most of the students go for academic jobs after completing M.Tech. Today the academic field for higher education is growing rapidly in India.
<br> This is the reason why the demand for teachers and professors in deemed universities, educational institutions and colleges has increased. 
<br>To join the teaching profession after M.Tech, students must keep in mind the importance of communication and presentation skills.
<br> These skills are important to become a teacher. In addition, you must have the passion to teach and be patient and calm to deal with the students. 
<br>Apart from this, you will need to make a habit of reading books and magazines to keep pace with the relevant subject.
</div>
<div class="block">
<h2>You can start your own organization</h2>
Want to become an entrepreneur after doing M.Tech? Very few M.Tech graduates aspire to start their own organization.
<br> However, the good news is that you will get full support in terms of funding and investments from venture capitalists based on your M.Tech degree.
<br> If you have the passion to work with dedication and have the right business sense, then you can become a successful entrepreneur.
</div>
<div class="block">
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


