<?php

header('Content-Type: application/json');

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'vendor/autoload.php';
include ("config.php");
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $name     = htmlspecialchars($_POST['name']);
    $email    = htmlspecialchars($_POST['email']);
    $company  = htmlspecialchars($_POST['company']);
    $service  = htmlspecialchars($_POST['service']);
    $message  = htmlspecialchars($_POST['message']);



    try {

        /*
        |--------------------------------------------------------------------------
        | ADMIN MAIL
        |--------------------------------------------------------------------------
        */

        $mail = new PHPMailer(true);

        $mail->isSMTP();
        $mail->Host       = 'smtp.gmail.com';
        $mail->SMTPAuth   = true;
        $mail->Username   = $smtpEmail;
        $mail->Password   = $smtpPassword;
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
        $mail->Port       = 587;
        $mail->CharSet = 'UTF-8';
        $mail->Encoding = 'base64';

        $mail->setFrom($smtpEmail, 'Portfolio Website');
        $mail->addAddress($smtpEmail);

        $mail->isHTML(true);

        $mail->Subject = '🚀 New Portfolio Inquiry';

        $mail->Body = "
<div style='font-family:Arial,sans-serif;
            max-width:600px;
            margin:auto;
            padding:30px;
            background:#ffffff;
            border-radius:12px;
            border:1px solid #e5e5e5;'>

    <h2 style='color:#111;margin-bottom:25px;'>
        New Contact Request
    </h2>

    <table width='100%' cellpadding='10' cellspacing='0' style='border-collapse:collapse;'>

        <tr>
            <td style='font-weight:bold;width:140px;'>Name:</td>
            <td>{$name}</td>
        </tr>

        <tr>
            <td style='font-weight:bold;'>Email:</td>
            <td>
                <a href='mailto:{$email}'>{$email}</a>
            </td>
        </tr>

        <tr>
            <td style='font-weight:bold;'>Phone:</td>
            <td>{$phone}</td>
        </tr>

        <tr>
            <td style='font-weight:bold;'>Company:</td>
            <td>
                <a href='{$company}' target='_blank'>{$company}</a>
            </td>
        </tr>

        <tr>
            <td style='font-weight:bold;'>Service:</td>
            <td>{$service}</td>
        </tr>

        <tr>
            <td style='font-weight:bold;vertical-align:top;'>Message:</td>
            <td>" . nl2br($message) . "</td>
        </tr>

    </table>

</div>
";

        $mail->send();

        /*
        |--------------------------------------------------------------------------
        | THANK YOU MAIL
        |--------------------------------------------------------------------------
        */

        $clientMail = new PHPMailer(true);

        $clientMail->isSMTP();
        $clientMail->Host       = 'smtp.gmail.com';
        $clientMail->SMTPAuth   = true;
        $clientMail->Username   = $smtpEmail;
        $clientMail->Password   = $smtpPassword;
        $clientMail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
        $clientMail->Port       = 587;
        $clientMail->Encoding = 'base64';
        $clientMail->CharSet = 'UTF-8';


        $clientMail->setFrom($smtpEmail, 'Vigneshwaran');
        $clientMail->addAddress($email, $name);

        $clientMail->isHTML(true);

        $clientMail->Subject = 'Thank You for Contacting Me';

        $clientMail->Body = "
        <div style='font-family:Arial,sans-serif;
                    max-width:600px;
                    margin:auto;
                    padding:30px;
                    background:#111;
                    color:#fff;
                    border-radius:12px;'>

            <h2 style='color:#d4af37;'>Hi {$name},</h2>

            <p>Thank you for reaching out through my portfolio website.</p>

            <p>I have received your request regarding:</p>

            <p style='font-size:18px;
                    color:#d4af37;
                    font-weight:bold;'>
                {$service}
            </p>

            <p>I’ll review your project details and get back to you shortly.</p>

            <br>

            <p>Best Regards,<br>
            <strong>Vigneshwaran</strong></p>

        </div>
        ";

        $clientMail->send();

        echo json_encode([
            "status" => "success",
            "message" => "Message sent successfully 🚀"
        ]);

    } catch (Exception $e) {

        echo json_encode([
            "status" => "error",
            "message" => "Mailer Error: " . $e->getMessage()
        ]);
    }
}
?>