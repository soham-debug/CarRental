<?php

$name =$_POST['name'];
$visitor_email =$_POST['email'];
$message =$_POST['message'];

$email_form = 'poonamminde557@gmail.com';
$email_subject = "new feedback";
$email_body = "User Name: $name.\n".
                "User email: $visitor_email.\n".
                   "User Message: $message.\n";
$to ="morepranjal2000@gmail.com"
$headers ="Form: $email_form\r\n";
mail($to,$email_subject,$email_body,$header);
header("Location: feedback.html");
?>