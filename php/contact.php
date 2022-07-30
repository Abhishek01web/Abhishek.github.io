<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

if (isset($_POST["submit"])) {

    require('conn.php');

    $name = $_POST["name"];
    $number = $_POST["number"];
    $email = $_POST["email"];
    $message = $_POST["message"];
    // $name = "abhishek";
    // $number = 6376502672;
    // $email = "xzy@gmail.com";
    // $message = "Hello";

    $q_insert =  "INSERT INTO `port_mess` (`name`, `number`, `email`, `message`) VALUES ('$name', '$number', '$email', '$message')";
    $insert = mysqli_query($con, $q_insert);

    if ($insert) {

        require('PHPMailer/Exception.php');
        require('PHPMailer/PHPMailer.php');
        require('PHPMailer/SMTP.php');

        //Create an instance; passing `true` enables exceptions
        $mail = new PHPMailer(true);

        try {
            //Server settings
            $mail->isSMTP();                                            //Send using SMTP
            $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
            $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
            $mail->Username   = 'abhishek01web@gmail.com';                     //SMTP username
            $mail->Password   = 'dlaldjmjxvryhhkn';                               //SMTP password
            $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
            $mail->Port       = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

            //Recipients
            $mail->setFrom('abhishek01web@gmail.com', 'Abhihsek chauhan');
            $mail->addAddress($email);     //Add a recipient

            //Content
            $mail->isHTML(true);                                  //Set email format to HTML
            $mail->Subject = "Thank $name for your interest in my services";
            $mail->Body    = "<div class='container' style='
            width: 100%;
            display: flex;
            justify-content: center;
            align-items: center;
            '>
            <div class='container_main'  style='
            font-size: 18px;
            border-radius: 10px;
            background: rgba(0, 0, 0, 0.150);
            margin: 20px;
            padding: 10px;
            '>
            <p>hi <b>$name</b>,</p>
            <p>Thank you for showing interest in my services. I will get in touch with you. Or you can get in touch with me
                at <a href='tel: 6378993312'>+91-6378993312</a>. I will be happy to assist you.
            </p>
            <p >
              <b>Connect with me on social handles.</b><br><br>
              <a href='https://www.instagram.com/abhishek_chauhan_web/' style='text-decoration: none;font-size: 18px; font-weight: bold; color: #fff; text-shadow: 2px 2px 5px #000; padding: 7px; background: red; border-radius: 10px;'>Instagram</a><br><br>
              <a href='https://www.facebook.com/profile.php?id=100083633063431' style='text-decoration: none;font-size: 18px; font-weight: bold; color: #fff; text-shadow: 2px 2px 5px #000; padding: 7px; background: red; border-radius: 10px;'>Facebook</a><br><br>
              <a href='https://www.youtube.com/channel/UCyisSjssqkY74PPcL_IYOzQ' style='text-decoration: none;font-size: 18px; font-weight: bold; color: #fff; text-shadow: 2px 2px 5px #000; padding: 7px; background: red; border-radius: 10px;'>YouTube</a><br><br>
              <a href='https://www.linkedin.com/in/abhishek-chauhan-0b3955246/' style='text-decoration: none;font-size: 18px; font-weight: bold; color: #fff; text-shadow: 2px 2px 5px #000; padding: 7px; background: red; border-radius: 10px;'>Twitter</a><br><br>
              <a href='https://twitter.com/abhishek01web'  style='text-decoration: none;font-size: 18px; font-weight: bold; color: #fff; text-shadow: 2px 2px 5px #000; padding: 7px; background: red; border-radius: 10px;'>LinkeIn</a>
            </p>
            </div>
            </div>";

            $mail->send();

            $mess_s = 'Thank you ! i will connect with you soon.';
            $name = $number = $email = $message = "";
        } catch (Exception $e) {
            $mess_u = "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
        }
    } else {
        $mess = "inserrt faild";
    }
}
