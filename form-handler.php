<?php 
$name = $_POST[''];
$visitor_email = $_POST[''];
$subject = $_POST[''];
$message = $_POST[''];

$email_from = 'gmcodes20@gmail.com';
$email_subject = 'New Form Submission';
$email_body = "Username: $name.\n".
             "User Email: $visitor_email.\n".
             "Subject: $subject.\n".
             "User Message: $message.\n";

$to = 'superstarj4@gmail.com';

$headers = "From: $email_from \r\n";
$headers .= "Reply-To: $visitor_email \r\n";

mail($to, $email_subject, $email_body, $headers);

header("Location: contact.html")

?>