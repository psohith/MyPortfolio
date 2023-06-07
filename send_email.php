<?php
  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];

    // Compose the email
    $to = 'pamusohith@gmail.com';
    $headers = "From: $name <$email>\r\n";
    $headers .= "Reply-To: $email\r\n";
    $message = "Name: $name\r\nEmail: $email\r\nSubject: $subject\r\nMessage: $message";

    // Send the email
    if (mail($to, $subject, $message, $headers)) {
      echo "Email sent successfully!";
    } else {
      echo "Failed to send email.";
    }
  }
?>