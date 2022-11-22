
<?php
$to_email = "laxmigujjari28@gmail.com";
$name=$_POST['name'];
$headers =$_POST['email'];
$subject = "New contact from careerup.com";
$content=$_POST['content'];
$matter[]="Name = ".$name;
$matter[]="Email = ".$headers;
$matter[]="Message = ".$content;
$body =join("\r\n",$matter);

if (mail($to_email, $subject, $body,"From:$headers"))
 
{
    echo "Email successfully sent to $to_email...";
}
 
else
 
{
    echo "Email sending failed!";
}
?>