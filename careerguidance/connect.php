<?php 
session_start();
   $username=$_POST['email'];
   $name=$_POST['name'];
   $gender=$_POST['gender'];
   $email=$_POST['email'];
   $mobile=$_POST['number'];
   $password=$_POST['password'];
   $course=$_POST['course'];
   include("conn.php");
   mysqli_select_db($conn,"mydb");
   $sql="select * from userdetails where email='$email';";
  $querysucces= mysqli_query($conn,$sql);#execute query in database
  $num=mysqli_num_rows($querysucces);
  if($num==1)
  {
	  header('location:regform.html');
  }
  else
  {
  $sql="insert into userdetails values('','$name','$gender','$mobile','$email','$password','$course');";
  $rel= mysqli_query($conn,$sql);
  if($rel==true)
  {
	 $_SESSION['username']=$email;

switch($course){
case "SSC":
header('location:ssc.php');
break;
case "Diploma":
    header('location:afterdiploma.php');
    break;
    case "Inter":
        header('location:afterinter.php');
        break;
        case "Btech":
            header('location:btech.php');
            break;
            case "Mtech":
                header('location:aftermtech.php');
                break;

}
	
  }
  else{
	  echo"  fail ";
  }
  }
   $conn->close();
?>