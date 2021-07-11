<?php

$name = $_POST ["name"];
$visitor_mail = $_POST ["email"];
$subject = $_POST ["subject"];
$message = $_POST ["message"];


$email_from = 'info@titanbilsim.net'

$email_subject = 'new form submission'

$email_body =   "user Name: $name.\n"
                "user Email: $visitor_mail.\n"
                "subject: $subject.\n"
                "user message: $message.\n"
$to = 'enesunat2@gmail.com';

$headers = " from: $email_from \r\n " ;

$headers = "reply-to: $visitor_mail \r\n " ;


mail($to,$email_subject,$email_body,$headers);

headers("location: contact.html");


?>