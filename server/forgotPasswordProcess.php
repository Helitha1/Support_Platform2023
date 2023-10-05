<?php
// RESPONSE OBJECT
$response_obj = new stdClass();
$code = 0;
// DATABASE CONNECTION
require "connection.php";
// SMTP SERVER LIBRARY
require "email/SMTP.php";
require "email/PHPMailer.php";
require "email/Exception.php";
// USE PHP PHPMAILER FROM SMTP
use PHPMailer\PHPMailer\PHPMailer;
// GET RAW DATA FROM REQUEST
if (file_get_contents("php://input")) {
    // CHECK REQUEST
    $request = file_get_contents("php://input");
    // GET JSON OBJECT FROM REQUESR
    $object = json_decode($request);
    $email = $object->email;
    $rs = Database::search("SELECT * FROM `users` WHERE `email`='" . $email . "'");
    if ($rs->num_rows == 1) {

        $code = uniqid();

        Database::iud("UPDATE `users` SET `verification_code`='" . $code . "' WHERE 
        `email`='" . $email . "'");

        $mail = new PHPMailer;
        $mail->IsSMTP();
        $mail->Host = 'smtp.gmail.com';
        $mail->SMTPAuth = true;
        $mail->Username = 'sasinduprasad2002@gmail.com';
        $mail->Password = 'mjex zjzg jvbc byri';
        $mail->SMTPSecure = 'ssl';
        $mail->Port = 465;
        $mail->setFrom('sasinduprasad2002gmail.com', 'Reset Password');
        $mail->addReplyTo('sasinduprasad2002gmail.com', 'Reset Password');
        $mail->addAddress($email);
        $mail->isHTML(true);
        $mail->Subject = 'Your Forgot Password Verification Code';
        $bodyContent = '<h1 style="color:green">Your Verification code is ' . $code . '</h1>';
        $mail->Body    = $bodyContent;
        // if (!$mail->send()) {
        //     $code = 18;
        // } else {
        //     $code = 100;
        // }
        $code =100;
    } else {
        $code = 7;
    }
}else{
    $code = 99;
}
// ASSIGN CODE TO RESPONSE OBJECT 
$response_obj->code = $code;
// ECHO RESPONSE OBJECT
echo (json_encode($response_obj));
