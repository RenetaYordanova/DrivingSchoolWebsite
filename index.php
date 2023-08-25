<?php

if (isset($_POST['submit'])) {
  
    $name = $_POST['name'];
    $email = $_POST['mail'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];

   
    $to = ''; 
    $headers = "From: $name <$email>";
    $mailBody = "Name: $name\nEmail: $email\nSubject: $subject\n\n$message";

  
    if (mail($to, $subject, $mailBody, $headers)) {
        echo 'Имейлът е изпратен успешно.';
    } else {
        echo 'Възникна грешка при изпращане на имейла.';
    }
}
?>
