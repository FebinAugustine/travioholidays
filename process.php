<?php

$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone']; // Assuming you have a phone field in your form
$message = $_POST['message'];

$to = "travioinfo@gmail.com";
$subject = "Contact Form Submission";

$body = "You have received a new contact form submission:\n\n";
$body .= "Name: $name\n";
$body .= "Email: $email\n\n";
$body .= "Phone: $phone\n\n"; // Include phone number if present
$body .= "Message: \n$message";

$headers = "From: $email";

if (mail($to, $subject, $body, $headers)) {
  // Success message and redirection using JavaScript
  echo "<script>alert('Your message has been sent successfully!'); window.location.href = 'contact.html';</script>";
} else {
  echo "There was an error sending your message. Please try again later.";
}

