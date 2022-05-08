<?php
    
    require 'vendor\phpMailer\PHPMailer.php';
    require 'vendor\phpMailer\Exception.php';
    require 'vendor\phpMailer\SMTP.php';
    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\SMTP;

function prepareEmail ($toEmail, $subject, $msgContent){

    $mail = new PHPMailer();
    $mail->isSMTP();

    $mail->Host = 'smtp.gmail.com';
    $mail->Port = 465;
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;
    $mail->SMTPAuth = true;
    $mail->CharSet = 'UTF-8';
    $mail->isHTML();

    $mail->Username = 'mtdk.info@gmail.com';
    $mail->Password = 'MTDK12345';

    $mail->setFrom('mtdk.info@gmail.com',   'I. MTDK - Magyar Tudományos Diákköri Konferencia');

    $mail->addReplyTo('mtdk.info@gmail.com', 'I. MTDK - Magyar Tudományos Diákköri Konferencia');

    $mail->addAddress($toEmail);
    $mail->Subject = $subject;
    $mail->Body = $msgContent;
    
    if (!$mail->send()) {
        echo 'Mail not sent > Error ' . $mail->ErrorInfo;
    }
}

?>