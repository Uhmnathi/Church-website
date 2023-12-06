<?php
$name = $_POST['name'];
$surname= $_POST['surname'];
$visitor_email = $_POST['email'];
$message= $_POST['message'];

$email_from = 'info@uafcriverside.co.za';

$email_subject = 'New Form Submission';

$email_body = "User Name: $name.\n".
              "User Surname: $surname.\n".
              "User Email: $visitor_email.\n".
              "User Message: $message.\n";


$to = 'snkosinathi676@gmail.com';

$headers = "From: $email_ \r\n";

$headers. = "Reply-To: $visitor_email \r\n";

mail($to,$email_subject,$email_body,$headers);

header("Location:contact.html")

?>