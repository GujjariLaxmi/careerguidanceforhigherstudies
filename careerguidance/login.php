<?php 
session_start();
include("conn.php");
$username=$_POST['user'];
$pass=$_POST['password'];

mysqli_select_db($conn,"mydb");
$sql="select *from userdetails where email='$username' && password='$pass' ";
$result=mysqli_query($conn,$sql);
$num=mysqli_num_rows($result);

if($num==1)
{
$_SESSION['username']=$username;
$query="select course from userdetails where email='$username';";
$course=mysqli_query($conn,$query);
$row = $course->fetch_assoc();
switch($row['course']){
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
header('location:login.html');
}
$conn->close();
?>