<?php

namespace larava\controllers;

use larava\core\Controller;
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

class ContactController extends Controller
{
    public function form()
    {
        $this->View("contact/form");
    }
    public function guimail()
    {
        require "PHPMailer-master/src/PHPMailer.php";
        require "PHPMailer-master/src/SMTP.php";
        require 'PHPMailer-master/src/Exception.php';
        $mail = new PHPMailer; //true:enables exceptions
        try {
            $mail->SMTPDebug = 0; //0,1,2: chế độ debug. khi chạy ngon thì chỉnh lại 0 nhé
            $mail->isSMTP();
            $mail->Mailer = "smtp";
            $mail->CharSet  = "utf-8";
            $mail->Host = 'smtp.gmail.com';  //SMTP servers
            $mail->SMTPAuth = true; // Enable authentication
            $mail->Username = 'phongpvt.web@gmail.com'; // SMTP username
            $mail->Password = 'oeopewfrtsiuguna';   // SMTP password
            $mail->SMTPSecure = 'ssl';  // encryption TLS/SSL 
            $mail->Port = 465;  // port to connect to                
            $mail->setFrom('phongpvt.web@gmail.com', 'Ez Web');
            $mail->addAddress('phongpvt.web@gmail.com', 'Ez Web'); //mail và tên người nhận  
            $mail->isHTML(true);  // Set email format to HTML
            $mail->Subject = 'Tiêu đề thư';
            $noidungthu = "
                            <h3>Thư liên hệ từ khách hàng</h3>
                            <p> Email khách hàng: <br>{$_POST['email']} </p>
                            <p> Nội dung liên hệ: <br>{$_POST['noidunglienhe']} </p>
                        ";
            $mail->Body = $noidungthu;
            $mail->smtpConnect(array(
                "ssl" => array(
                    "verify_peer" => false,
                    "verify_peer_name" => false,
                    "allow_self_signed" => true
                )
            ));
            $mail->send();
            $_SESSION['message'] = 'Mail của bạn đã được gửi đến chúng tôi';
            $this->View("contact/form");
        } catch (Exception $e) {
            $_SESSION['message'] = 'Mail không gửi được. Lỗi: ' . $mail->ErrorInfo;
        }
    } //function GuiMail
}
