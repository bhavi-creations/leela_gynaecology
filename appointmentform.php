<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'vendor/autoload.php'; // Adjust the path to autoload.php based on your project

// Check if the form is submitted
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Assign POST data to variables
    $name = $_POST['name'] ?? '';
    $email = $_POST['email'] ?? '';
    $address = $_POST['address'] ?? '';
    $service = $_POST['service'] ?? '';
    $date = $_POST['date'] ?? '';
   


    echo $name;
    // Create a new PHPMailer instance
    $mail = new PHPMailer(true);

    try {
        // Server settings for Gmail SMTP
        $mail->isSMTP();
        $mail->Host = 'smtp.gmail.com';
        $mail->SMTPAuth = true;
        $mail->Username = 'leelawomenshealthcare@gmail.com'; // Your Gmail email address
        $mail->Password = 'seumobbxwwqixdor'; // Your Gmail password
        $mail->SMTPSecure = 'tls';
        $mail->Port = 587;

        // Recipients
        $mail->setFrom('leelawomenshealthcare@gmail.com', 'LEELA WOMENS HEALTH CARE' ); // Your Gmail email and name
        $mail->addAddress('leelawomenshealthcare@gmail.com', 'LEELA WOMENS HEALTH CARE'); // Recipient's email and name

// Content
        $mail->isHTML(true);
        $mail->Subject = 'New Message from Appointment form';
        $mail->Body = "
   
            <h1>New Appointment</h1>
            <p><strong>Name:</strong> $name</p> 
            <p><strong>Email:</strong> $email</p>
            <p><strong>Address:</strong> $address</p>
             <p><strong>service:</strong> $service</p>
             <p><strong>Date of Appointment:</strong> $date</p>
        ";

        $mail->send();
        echo '<script> window.alert("Message has been sent.\n\nPlease click OK."); window.location.href="index.php";</script>';

    } catch (Exception $e) {
        echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
    }
} else {
    // If accessed directly without POST data
    echo 'Access Denied';
}


?>