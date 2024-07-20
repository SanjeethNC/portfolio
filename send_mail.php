<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Collect form data
    $name = htmlspecialchars($_POST['contactName']);
    $email = htmlspecialchars($_POST['contactEmail']);
    $subject = htmlspecialchars($_POST['contactSubject']);
    $message = htmlspecialchars($_POST['contactMessage']);

    // Set up email parameters
    $to = "sanjeethnc@gmail.com";
    $headers = "From: " . $email . "\r\n";
    $email_subject = "Contact Form: " . $subject;
    $email_body = "You have received a new message from your website contact form.\n\n".
                  "Here are the details:\n\nName: $name\n\n".
                  "Email: $email\n\nMessage:\n$message";

    // Send the email
    if (mail($to, $email_subject, $email_body, $headers)) {
        echo "success";
    } else {
        echo "error";
    }
}
?>
