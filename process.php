<?php

$name = $_POST['name'];
$email = $_POST['email'];
$phone = $post['phone'];
$message = $_POST['message'];

$to = "travioholidayshussain@gmail.com";
$subject = "Contact Form Submission";

$body = "You have received a new contact form submission:\n\n";
$body .= "Name: $name\n";
$body .= "Email: $email\n\n";
$body .= "Phone: $phone\n\n";
$body .= "Message: \n$message";

$headers = "From: $email";

if (mail($to, $subject, $body, $headers)) {
  echo "Your message has been sent successfully!";
} else {
  echo "There was an error sending your message. Please try again later.";
}

?>