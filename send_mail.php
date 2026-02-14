<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require 'vendor/autoload.php';

$mail = new PHPMailer(true);

try {
    //Server settings
    $mail->SMTPDebug = SMTP::DEBUG_SERVER;
    $mail->isSMTP();
    $mail->Host       = 'smtp.gmail.com';                       //gmail SMTP server set to send through
    $mail->SMTPAuth   = true;
    $mail->Username   = 'termuxuser123@gmail.com';                     //SMTP username (your gmail account)
    $mail->Password   = 'Death@01';                               //SMTP password (your gmail password or app password)
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;
    $mail->Port       = 465;

    //Recipients
    $mail->setFrom('termuxuser123@gmail.com', 'Mailer');         //Set the sender of the message (your email address)
    $mail->addAddress('snehaaaa008@gmail.com', 'Joe User');     //Add a recipient (your bae's email address)

    //Content
    $mail->isHTML(true);
    $mail->Subject = 'I Love You Ishaa';
    $mail->Body    = 'Happy Valentine Day Budiii. I love you so much budiiii. You are the best thing that has ever happened to me ❤... Sadhai sadhai sangai hunu husss budiii... Although this is the second valentines for us, tara ystai gari sadhai sadhdai sabbai valentines ma sangai hunu parxa husss bachoooo... I love you soo soo muchh budiii ❤️❤️❤️';

    $mail->send();
    echo 'Message has been sent';
} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}
