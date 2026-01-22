<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'vendor/autoload.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $subscriberEmail = $_POST['email'];

    $mail = new PHPMailer(true);

    try {
        // SMTP Settings
        $mail->isSMTP();
        $mail->Host = 'smtp.gmail.com';
        $mail->SMTPAuth = true;
        $mail->Username = 'mlsugusweety18@gmail.com'; // sender Gmail
        $mail->Password = 'mohj nhyj rjqs yhjn'; // use app password
        $mail->SMTPSecure = 'tls';
        $mail->Port = 587;

        // Email Content
        $mail->setFrom('mlsugusweety18@gmail.com', 'Website Notification');
        $mail->addAddress('igoagritechfarms@gmail.com'); // recipient

        $mail->isHTML(false);
        $mail->Subject = 'New Website Subscriber';
        $mail->Body = "A user has subscribed to your website.\n\nEmail: $subscriberEmail";

        if ($mail->send()) {
            echo "Thank you for Subscribed";
        } else {
            echo "Error: " . $mail->ErrorInfo;
        }

    } catch (Exception $e) {
        echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
    }
}
$mail->SMTPDebug = 2;
$mail->Debugoutput = 'html';
$mail = new PHPMailer(true);
$mail->SMTPDebug = 2;
$mail->Debugoutput = 'html';
$mail->addBCC('mlsugusweety18@gmail.com');

?>
