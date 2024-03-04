er<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    include "mail.php";
    $name = $_POST["name"];
    $email = $_POST["email"];
    $contact = $_POST["contact"];
    $message = $_POST["message"];
    $to = "enter receiver email address"; 
    $subject = $_POST["email_subject"];
    $cc = ""; 
    $attach = ""; 
     $emailMessage = "
        <html>
        <head>
            <style>
                body {
                    font-family: Arial, sans-serif;
                    line-height: 1.6;
                }
                p {
                    margin-bottom: 10px;
                }
                strong {
                    font-weight: bold;
                }
            </style>
            <title>Contact Form Submission</title>
        </head>
        <body>
            <p><strong>Name:</strong> $name</p>
            <p><strong>Email:</strong> $email</p>
            <p><strong>Contact Number:</strong> $contact</p>
            <p><strong>Message:</strong></p>
            <p>$message</p>
        </body>
        </html>
    ";
    if (sendEmail($to, $subject, $emailMessage, $cc, $attach)) {
        echo "Form submitted successfully!";
    } else {
        echo "Error: Unable to send the email.";
    }
} else {
 
    echo "Invalid request method.";
}
?>
