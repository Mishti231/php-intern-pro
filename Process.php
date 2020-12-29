<?php
// Import PHPMailer classes into the global namespace
// These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

// Load Composer's autoloader
require 'vendor/autoload.php';
session_start();
if (isset($_POST['submit'])) {
    $name = $_POST['sname'];
    $email = $_POST['email'];
    $mob = $_POST['mob'];
    $date = $_POST['date'];
    $course = $_POST['course'];
    $gender = $_POST['gender'];
    $address = $_POST['address'];
    $additional_details = $_POST['additional_details'];

    if ($name != "" and $email != "" and $mob != ""  and  $date != ""  and  $course != "" and   $gender != ""  and   $address != ""  and   $additional_details != "") {
        $to = "pbhaumik200@gmail.com"; //admin email
        $toUser = "$email"; //user email

        $subject = "New query submitted"; //admin subject
        $userSubject = "Thank you for sending email"; //user subject

        //admin message
        $message = "Please find the details below:
                        Name: " . $name . ";
                        Email:" . $email . ";
                        Mobile:" . $mob . ";
                        Date:" . $date . ";
                        Course:" . $course . ";
                        Gender:" . $gender . ";
                        Address:" . $address . ";
                        Additional_details:" . $additional_details;


        $userMessage = "Thank you for submitted your query"; //user message           

        // Instantiation and passing `true` enables exceptions
        $mail = new PHPMailer(true);

        try {
            //Server settings
            $mail->isSMTP();
            $mail->Host       = 'smtp.hostinger.com';
            $mail->SMTPAuth   = true;
            $mail->Username   = 'support@sonuhaircut.com';
            $mail->Password   = 'poojaT@89';
            $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
            $mail->Port       = 587;

            //Recipients
            $mail->setFrom('support@sonuhaircut.com', 'Mailer');
            $mail->addAddress('pbhaumik200@gmail.com', 'Hello');     // Add a recipient


            // Content
            $mail->isHTML(true);
            $mail->Subject = 'Here is the subject';
            $mail->Body    = 'This is the HTML message body <b>in bold!</b>';

            $isAdminMailSent = $mail->send();
            $_SESSION['msg'] = "Query Submitted successfully";
        } catch (Exception $e) {
            $_SESSION['msg'] = "Error while submitting query";
        }

        header('Location:index.php');
    } else {
        $_SESSION['msg'] = "Error while submitting query";
        header('Location:index.php');
    }
}
