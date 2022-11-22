<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="quizz.css">
  <!-- Coding with nick -->
  <title>Quiz App</title>
</head>
<body>
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
     echo' <li><a href="changepassword.php"> change password</a></li>';
     }
     ?>
   
                </ul>

            </nav>
            <a class="cta" href="contact.php" ><button>Contact</button></a>
        </header>
       
  <div class="quiz-container" id="quiz">
    <div class="quiz-header" >
      <h2 id="question">Question Text</h2>
      <ul class="ul">
        <li class="li">
          <input type="radio" name="answer" id="a" class="answer">
          <label for="a" id="a_text">Answer</label>
        </li>

        <li class="li">
          <input type="radio" name="answer" id="b" class="answer">
          <label for="b" id="b_text">Answer</label>
        </li>

        <li class="li">
          <input type="radio" name="answer" id="c" class="answer">
          <label for="c" id="c_text">Answer</label>
        </li class="li">

        <li class="li">
          <input type="radio" name="answer" id="d" class="answer">
          <label for="d" id="d_text">Answer</label>
        </li>

      </ul>
    </div>
  
    <button class="button" id="submit">Submit</button>

  </div>
  
  <script src="script.js"></script>
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