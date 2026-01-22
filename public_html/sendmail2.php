<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';
require 'PHPMailer/src/Exception.php';

// Show all POST data for debugging (optional, remove later)
echo "<pre>";
print_r($_POST);
echo "</pre>";

// Assign form values to variables
$username       = $_POST['username'] ?? '';
$mobilnumber    = $_POST['mobilnumber'] ?? '';
$emailid        = $_POST['emailid'] ?? '';
$Apply_for_jobs = $_POST['Apply_for_jobs'] ?? '';
$qualification  = $_POST['qualification'] ?? '';
$Currentctc     = $_POST['Currentctc'] ?? '';
$Expectedctc    = $_POST['Expectedctc'] ?? '';
$languages      = $_POST['languages'] ?? '';
$message        = $_POST['message'] ?? '';

$mail = new PHPMailer(true);

try {
    $mail->isSMTP();
    $mail->Host = 'smtp.gmail.com';
    $mail->SMTPAuth = true;
    $mail->Username = 'igoagritechfarms@gmail.com'; // Your Gmail
    $mail->Password = 'xhcs pdcq kjte giua'; // App password
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
    $mail->Port = 587;

    $mail->setFrom('igoagritechfarms@gmail.com', 'Job Application');
    $mail->addAddress('Hr.admin@igogroups.com');

    $mail->isHTML(true);
    $mail->Subject = 'New Job Application Submission';

    $mail->Body = "
        <h2>New Job Application</h2>
        <p><strong>Name:</strong> $username</p>
        <p><strong>Phone:</strong> $mobilnumber</p>
        <p><strong>Email:</strong> $emailid</p>
        <p><strong>Applied For:</strong> $Apply_for_jobs</p>
        <p><strong>Qualification:</strong> $qualification</p>
        <p><strong>Current CTC:</strong> $Currentctc</p>
        <p><strong>Expected CTC:</strong> $Expectedctc</p>
        <p><strong>Languages:</strong> $languages</p>
        <p><strong>Message:</strong> $message</p>
    ";

    $mail->send();
    echo "<script>alert('Application sent successfully!');window.location.href='career.php'</script>;";
} catch (Exception $e) {
    echo "Mailer Error: " . $mail->ErrorInfo;
}
?>
