<?php

include_once "connect.php";

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

if (isset($_POST['contact_us'])) {
    require 'vendor/autoload.php';

    $date = date('Y-m-d H:i:s');

    // Sanitize and secure user inputs
    $your_name = mysqli_real_escape_string($con, $_POST['your_name']);
    $your_email = mysqli_real_escape_string($con, $_POST['your_email']);
    $phone_number = mysqli_real_escape_string($con, $_POST['phone_number']);
    $message = mysqli_real_escape_string($con, $_POST['message']);

    // Insert contact form data into the database
    $insert_contact_us = "INSERT INTO tbl_contact_lead (your_name, your_email, phone_number, message, created_at) 
                          VALUES ('$your_name', '$your_email', '$phone_number', '$message', '$date')";
    mysqli_query($con, $insert_contact_us);

    // Create a new PHPMailer instance
    $mail = new PHPMailer(true);

    try {
        // SMTP configuration
        $mail->isSMTP();
        $mail->Host = 'smtp.hostinger.com'; // Hostinger SMTP server
        $mail->SMTPAuth = true;
        $mail->Username = 'info@beamamz.com'; // Hostinger email
        $mail->Password = 'Iconicwebmedia123!'; // Hostinger email password
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS; // SSL encryption
        $mail->Port = 465; // SSL port

        // Email settings
        $mail->setFrom('info@beamamz.com', 'BeAMZ Sales'); // Sender
        $mail->addAddress('info@beamamz.com', 'Hostinger Email'); // To Hostinger email
        $mail->addAddress('fko597641@gmail.com', 'Personal Email'); // To first personal email
        $mail->addAddress('khanfahad0318@gmail.com', 'Second Personal Email'); // To second personal email
        $mail->isHTML(true);
        
        $mail->Subject = 'New Contact Form Submission';
        $mail->Body = '
            <!DOCTYPE html>
            <html lang="en">
            <head>
                <meta charset="UTF-8">
                <meta name="viewport" content="width=device-width, initial-scale=1.0">
                <title>Contact Form</title>
            </head>
            <body>
                <h2>New Contact Form Submission</h2>
                <p><strong>Your Name:</strong> ' . htmlspecialchars($your_name) . '</p>
                <p><strong>Email Address:</strong> ' . htmlspecialchars($your_email) . '</p>
                <p><strong>Phone Number:</strong> ' . htmlspecialchars($phone_number) . '</p>
                <p><strong>Message:</strong> ' . nl2br(htmlspecialchars($message)) . '</p>
                <p><strong>Submitted On:</strong> ' . $date . '</p>
            </body>
            </html>
        ';

        // Send email
        $mail->send();
        echo 'Email sent successfully to both addresses.';
    } catch (Exception $e) {
        // Output error details
        echo 'Email could not be sent. Mailer Error: ' . $mail->ErrorInfo;
    }
}
