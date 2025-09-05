<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require '../vendor/autoload.php'; // Make sure path is correct if you're using Composer

$mail = new PHPMailer(true);

try {
    // SMTP configuration
    $mail->isSMTP();
    $mail->Host = 'newedgeoverseas.com';
    $mail->SMTPAuth = true;
    $mail->Username = 'newedgerealty@newedgeoverseas.com';
    $mail->Password = 'bUxjFBGuQ4}p';
    $mail->SMTPSecure = 'tls'; // try 'ssl' if 'tls' fails
    $mail->Port = 465;

    // Sender and recipient settings
    $mail->setFrom('newedgerealty@newedgeoverseas.com', 'NewEdge Realty');
    $mail->addAddress('dipbmcoder@gmail.com'); // Replace with your test email

    // Email content
    $mail->isHTML(true);
    $mail->Subject = 'Test Email';
    $mail->Body = 'Hello';

    $mail->send();
    echo 'Message has been sent successfully.';
} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}