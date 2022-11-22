<?php

session_start();
if($_SESSION["username"]==true)
{
    $username=$_POST['email'];
    $name=$_POST['name'];
    $gender=$_POST['gender'];
    $email=$_POST['email'];
    $mobile=$_POST['mobile'];
    $course=$_POST['course'];
    include("conn.php");#establish connection with database
   mysqli_select_db($conn,"mydb");#selecting a database called mydb
   $query="update userdetails set name='$name' , gender='$gender' ,mobile='$mobile', course='$course' where email='$email' ;";
   $querysucces= mysqli_query($conn,$query);#execute query
  
   if($querysucces)
   {
       header('location:profile.php');
   }

}


$conn->close();
?>