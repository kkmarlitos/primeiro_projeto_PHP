<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $message = htmlspecialchars($_POST['message']);

    $to = 'your-email@example.com';
    $subject = 'New Contact Form Message';
    $body = "Name: $name\nEmail: $email\n\nMessage:\n$message";
    $headers = "From: $email";

    if (mail($to, $subject, $body, $headers)) {
        echo "Obriado, $name. Sua mensagem foi enviada!.";
    } else {
        echo "Desculpe, ocorreu um erro ao enviar sua mensagem.";
    }
}
?>
