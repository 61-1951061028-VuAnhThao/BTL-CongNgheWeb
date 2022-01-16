<?php
$username = 'ytbfake0001@gmail.com';
$password = 'xijfzyzxikidqhya';

//Thư viện xử lí gửi nhận email:phpMailler, sendMail
//1. Khai báo thư viện Send Mail
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
use PHPMailer\PHPMailer\SMTP;

require 'PHPMailer/Exception.php';
require 'PHPMailer/PHPMailer.php';
require 'PHPMailer/SMTP.php';

//2. Sử dụng thư viện này để gửi Email(localhost) tới 1 tài khoản Email

function sendEmailForAccountActive($email){
    //create an instance; passing 'true' enables exceptions
    global $username;
    global $password;
    $email = new PHPMailer(true);

    try {
        //Server settings
        $mail->SMTPDebug = 0;                      //Enable verbose debug output
        $mail->isSMTP();                                            //Send using SMTP
        $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
        $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
        $mail->Username   = $username;                     //SMTP username
        $mail->Password   = $password;                               //SMTP password
        $mail->SMTPSecure = 'ssl';            //Enable implicit TLS encryption
        $mail->Port       = 465;                                    //TCP port to connect to; use 587 if you have set SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS
        $mail->CharSet = 'UTF-8';
    
        //Recipients
        $mail->setFrom('ytbfake0001@gmail.com', 'Youtube Fake');
        $mail->addAddress($email);     //Add a recipient
    
        //Content
        $mail->isHTML(true);                                  //Set email format to HTML
        $mail->Subject = 'Learn to do youtube';
        $mail->Body    = 'Chào mừng bạn đến với trang youtube của chúng tôi';
        $mail->AltBody = 'S2';
    
        if($mail->send()){
            return true;
        }
        
    } catch (Exception $e) {
        echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
    }
    return false;
}

?>