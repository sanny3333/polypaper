

<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
function send_mail($to_email,$message) {
   require_once(APPPATH . 'third_party/PHPMailer/PHPMailer.php');
    require_once(APPPATH . 'third_party/PHPMailer/SMTP.php');             
    $mail = new PHPMailer(true);
    $mail->isSMTP();
    $mail->Host = 'smtp.gmail.com';
    $mail->SMTPAuth = true;
    $mail->SMTPKeepAlive = true;
    $mail->Username = 'patilkirtiraj1617@gmail.com';
    $mail->Password = 'vqceeutmbrffetai';
            
    $mail->SMTPSecure = 'ssl';
    $mail->Port = '465';

    $mail->setfrom("patilkirtiraj1617@gmail.com", "polypaper.org");
    $mail->addAddress($to_email);
    $mail->isHTML(true);
    // $mail->Subject = $message;
    $mail->Body = $message;
    
//print_r($mail->send());die();
    if ($mail->send()) {
        
        return true;
    } else {
        return false;
    }

}
//application/helpers/utility_helper.php
