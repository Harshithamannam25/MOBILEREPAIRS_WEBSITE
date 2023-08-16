<?php
$name =$_POST['name'];
$email =$_POST['email'];
$mobile =$_POST['mobile'];
$message =$_POST['message'];

$email_from ='harshimannam@gmail.com';

$email_subject='New Form Submission';

$email_body = "User name: $name.\n".
                "User Email: $email.\n".
                   "User mobile: $mobile.\n".
                      "User message: $message.\n";


$to = "harshitha.21bce7180@vitapstudent.ac.in";

$headers = "From: $email_from\r\n";

$headers .= "Reply-to: $email\r\n";

mail($to,$email_subject,$email_body,$headers);

header("Location: contact.html");

?>
