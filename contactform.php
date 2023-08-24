<?php
// Проверка дали формата е изпратена
if (isset($_POST['submit'])) {
    // Вземане на данните от формата
    $name = $_POST['name'];
    $email = $_POST['mail'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];

    // Подготовка на данните за изпращане по имейл
    $to = ''; // Заменете с вашия имейл адрес
    $headers = "From: $name <$email>";
    $mailBody = "Name: $name\nEmail: $email\nSubject: $subject\n\n$message";

    // Изпращане на имейла
    if (mail($to, $subject, $mailBody, $headers)) {
        echo 'Имейлът е изпратен успешно.';
    } else {
        echo 'Възникна грешка при изпращане на имейла.';
    }
}
?>
