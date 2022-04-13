<?php
require_once 'bdd.php';

$fname = mysqli_real_escape_string($mysqli, $_POST['fname']);
$email = mysqli_real_escape_string($mysqli, $_POST['email']);
$message = mysqli_real_escape_string($mysqli, $_POST['message']);

$email2 = "name@gmail.com";
$object = "Iswi n w aḍris";

if (strlen($fname) > 50) {
    echo 'fname_long';
} else if (strlen($fname) < 2) {
    echo 'fname_short';
} else if (strlen($email) > 50) {
    echo 'email_long';
} else if (strlen($email) < 2) {
    echo 'email_short';
} else if (filter_var($email, FILTER_VALIDATE_EMAIL) === false) {
    echo 'eformat';
} else if (strlen($message) > 500) {
    echo 'message_long';
} else if (strlen($message) < 2) {
    echo 'message_short';
} else {


    //mailer
    require 'phpmailer/PHPMailerAutoload.php';
    $mail = new PHPMailer;

    $mail->SMTPDebug = 4;
    $mail->isSMTP();                                      // Set mailer to use SMTP
    $mail->Host = 'smtp.gmail.com';  // Specify main and backup SMTP servers
    $mail->SMTPAuth = true;                               // Enable SMTP authentication
    $mail->Username = 'username';                 // SMTP username
    $mail->Password = '*********';                           // SMTP password
    $mail->SMTPSecure = 'ssl';                            // Enable TLS encryption, `ssl` also accepted
    $mail->Port = 465;

    $mail->AddReplyTo($email);
    $mail->From = $email2;
    $mail->FromName = $fname;
    $mail->addAddress('name@gmail.com', 'Admin');     // Add a recipient

    $mail->isHTML(true);
    $mail->Subject = $object;
    $mail->Body = $message;
    $mail->AltBody = 'mail message...';

    $mail->isHTML(true);                                  // Set email format to HTML

    $mail->Subject = $object;
    $mail->Body = $message;
    $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

    if (!$mail->send()) {
        echo 'Message could not be sent.';
        echo 'Mailer Error: ' . $mail->ErrorInfo;
    } else {
        echo 'true';
    }
}
