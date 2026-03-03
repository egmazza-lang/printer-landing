<?php

$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$issue = $_POST['issue'];
$message = $_POST['message'];

$to = "your-email@example.com";   // CHANGE THIS
$subject = "New Printer Support Request";

$body = "
Name: $name
Email: $email
Phone: $phone
Issue: $issue
Message: $message
";

$headers = "From: $email";

mail($to, $subject, $body, $headers);

header("Location: thankyou.html");
exit();

?>