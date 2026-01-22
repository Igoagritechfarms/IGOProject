<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    error_reporting(E_ALL);
    ini_set('display_errors', 1);

    $name = $_POST["username"];
    $email = $_POST["emailid"];
    $messageContent = $_POST["message"];
    $call = $_POST["mobilnumber"];
    $services = $_POST["Services"];
    $product = $_POST["product"];
    $projects = $_POST["projects"];

    $to = "bankingbackend.indiagreen@gmail.com,igogroupofcompanies@igoagritechfarms.com";
    $subject = "New Enquiry from Website";

    $fromEmail = "igogroupofcompanies@igoagritechfarms.com"; 
    $message = "Name: $name\nEmail: $email\nPhone: $call\nServices: $services\nProducts: $product\nProjects: $projects\nMessage:\n$messageContent";

    $headers = "From: India Green Website <$fromEmail>\r\n";
    $headers .= "Reply-To: $email\r\n";
    $headers .= "Content-Type: text/plain; charset=UTF-8\r\n";

    $success = mail($to, $subject, $message, $headers, "-f$fromEmail");

    if ($success) {
        echo ("<script>alert('Thank you for mailing');</script>");
        echo ("<script>window.location.href='index.php';</script>");
    } else {
        error_log("Mail failed to send.");
        die('Could not send mail! Please check your PHP mail configuration.');
    }
}
?>
