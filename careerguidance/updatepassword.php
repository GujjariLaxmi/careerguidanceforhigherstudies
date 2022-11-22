<?php
session_start();
if($_SESSION["username"]==true)
{
    $password=$_POST['password'];
    $newpassword=$_POST['newpassword'];
    
    include("conn.php");
   mysqli_select_db($conn,"mydb");
   $query="select password from userdetails where email='$_SESSION[username]';";
   $result=mysqli_query($conn,$query);
   $row = $result->fetch_assoc();
   if($row['password']==$password)
   {

    $query="update userdetails set password='$newpassword' where email='$_SESSION[username]' ;";
    $querysucces= mysqli_query($conn,$query);
    if($querysucces)
    {
        header('location:logout.php');
    }
    else{
        header('location:changepassword.php');
    }
    
   }
}
$conn->close();
?>