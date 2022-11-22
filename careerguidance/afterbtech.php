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
   
<h1>AFTER BTECH</h1>
<ul>
<li><a href="#higher"><h3>Higher Studies</h3></a></li>
<li><a href="#mba"><h3>MBA</h3></a></li>
<li><a href="#exp"><h3>Gaining Industry Experience</h3></a></li>
<li><a href="#study"><h3>Study Management</h3></a></li>
<li><a href="#civil"><h3>Take the Civil Services Entrance Exam</h3></a></li>
<li><a href="#entrepreneurship"><h3>Entrepreneurship</h3></a></li>


    
</ul>
<div class="content">


<div class="block">
<h2>Engineering</h2>
<img src="Images\engg.jpg">
<p>
    After completing the B.Tech course, candidates can either pursue higher studies (one popular exam that they 
can give for this is GATE) or consider pursuing a job after B.Tech in the field of their choice. 
<br>Although M.Tech is a natural course choice after completing a B.Tech course, these days many students opt to 
take up an MBA course after completing their B. Tech degree program.
<br>Other options that aspirants can consider include picking up a job at a PSU (Public Sector Undertaking), 
taking the Civil Services entrance exam, or joining a private company. Let’s talk about each of these in detail.
Learn more about B.Tech, read our blog – What is B.Tech?
<h5>What to do after B.Tech – Top Career Options After B.Tech</h4>.
It is a dream for most Science stream school students to become an engineer. Most students get into 
engineering without knowing what they like or what they want to do after B.Tech, which is why India has a 
huge number of B.Tech graduates.
<br>In such a scenario, where the Indian job market seems to be saturated with engineers, this is the time for you 
to decide – which career option to choose after B.Tech. Here is the most comprehensive list of career 
opportunities and jobs after B.Tech: 
</p>
    </div>

    <div class="block">
<a href="aftermtech.php"><h2 id="higher" > Higher Studies – Courses after B.Tech</h2></a>
<img src="Images\higherstudies.jpg">
<p>
Pursuing higher studies is another most popular career option after engineering.
<br> After completing the B.Tech 
course, the natural flow is that aspirants take admission to an M.Tech program. You can prepare for the GATE 
(Graduate Aptitude Test in Engineering) exam that will test your comprehensive understanding of 
undergraduate engineering subjects and help you enter the IITs and NITs for M.Tech.
<br>Another option is to prepare for the JAM exam to take admission in some of India’s top colleges for Master’s in 
Science courses.
<br>Apart from these degree courses, candidates can pursue short-term and diploma courses after completing 
their B.Tech course. There are many benefits of certifications, such as it helps in:
<br>• Expanding knowledge and skills
<br>• Increasing earning potential
<br>• Giving a competitive advantage
<br>• Boosting professional credibility
<br>• Enhancing the pay scale
Some popular certification and professional courses after B.Tech that candidates can take up include:
<br>Popular Certification and Professional Courses after B.Tech
<br>=>Information Security & Ethical Hacking Red Hat Certified Engineer
<br>=>C, C++, Java, .NET, SQL Web Designing
=>Software Testing Networking Professional
<br>=>Borland Database Engine (BDE)<br>=> Embedded Technology
<br>=>Robotics<br>=> Very-Large-Scale Integration (VLSI)
<br>=>Nanotechnology Electrical Distribution System
<br>=>Statistical Quality Control (SQC) Courses Six Sigma
<br>=>Kanban Certification <br>=>Primavera Training
<br>=>ISO Lead Auditor Courses <br>=>Building Design Certification<br>
Explore the Top 8 Highest Paying IT Certifications
</p>
</div>

<div class="block">
    <a href="mba.php"><h2 id="mba" >MBA</h2></a>
<img src="Images\mba.jpg">
<p>MBA stands for Master of Business Administration.<br>
  First introduced by Harvard University Graduate School of Administration in 1908 (now Harvard Business School), the MBA is the original graduate degree offered by business schools globally.<br >   
  Having “MBA” on your resume will help you stand out to employers, but the true meaning of the MBA goes beyond three letters on a sheet.<br>
  During an MBA, you’ll build your business knowledge, grow your professional network, and boost your career and salary prospects.
</div>
<div class="block">
<h2 id="exp"> Gaining Industry Experience</h2>
<img src="Images\experience.jpeg">
You can join an internship while pursuing B.Tech. This will help you in gaining the required 
work experience before you start looking for jobs after B.Tech.
<br> Through internships, you can 
learn the practical applications of the knowledge that you have acquired through the course. 
Based on this experience, you can assess if you either need to pursue higher studies or you are 
more comfortable with getting a job. Internships also helps you identify your capabilities as a 
professional and the areas where you need improvement.
</div>

<div class="block">
<h2 id="study" > Study Management</h2>
<img src="Images\studymanagement.jpeg">
Studying management is a popular career choice among engineering graduates. B.Tech and 
MBA is a great combination that recruiters look for, which is why many students take up an 
MBA course after B.Tech. 
<br>An MBA degree in your resume can help you get management roles in renowned organizations 
like Accenture and TCS. To enter the management field, you can give the CAT exam (Common 
Aptitude Test) and get a good score to enter into the management college of your choice. 
<br>Also, explore: 
<br>Paid and free online courses by Coursera
<br>Popular online Udemy courses
<br>Top online edX courses
</div>
    <div class="block"><h2 id="civil">6..Take the Civil Services Entrance Exam</h2>
<img src="Images\upsc.jpg">
If you aspire to serve the nation, then taking the Civil Services Exam is the best option that you can take up 
after engineering. For this, you will have to clear the UPSC civil services exam. It is considered one of the 
toughest examinations. Thus, it is recommended that you start preparing for at least a year before applying.
<br>The UPSC offers three optional engineering subjects – civil, mechanical, and electrical engineering. On getting 
a high rank in the examination, you can get the prestigious positions of IAS, IPS, or IFS. The UPSC Engineering 
Services selection process is divided into three stages:
<br>• Stage-I: Engineering Services (Preliminary/Stage-I) Examination (Objective Type Papers)
<br>• Stage-II: Engineering Services (Main/Stage-II) Examination (Conventional Type Papers)
<br>• Stage-III: Personality Test
</div>

<div class="block">
<h2 id="entrepreneurship"> Entrepreneurship</h2>
<img src="Images\entrepreneurship.jpg">
<p>
    You can also choose the path of entrepreneurship after engineering. Gone are the days when engineering 
graduates used to stay away from entrepreneurship. Nowadays, the success of many startups inspires many 
engineers to set up their own businesses.
<br>As an engineer entrepreneur, you will have the freedom to express your creativity and ideas. Since this path 
might be full of a lot of challenges, it is recommended that you check the positives and negative sides of it very 
carefully before you choose this option.
<br>• About Us
<br>• Admissions
<br>• Programs
<br>• Institutions
<br>• Exploration
<br>• Placement
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
