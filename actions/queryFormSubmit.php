<?php
// Check if the honeypot field is empty (indicating a human user)
if (empty($_POST['hp'])) {
    // Get form data
    $pckName = $_POST['pck_name'];
    $name = $_POST['name'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    $comments = $_POST['comments'];

    // Compose email message
    $message = "Name: $name\n";
    $message .= "Phone: $phone\n";
    $message .= "Email: $email\n";
    $message .= "Package: $pckName\n";
    $message .= "Comments: $comments\n";

    // Set the email parameters
    $to = "reservations@yourtravellingpartner.com";
    $subject = "New Query Form Submission";
    $headers = "From: info@yourtravellingpartner.com"; // Replace with a valid sender email address

    // Send the email
    $mailSent = mail($to, $subject, $message, $headers);

    // Check if the email was sent successfully
    if ($mailSent) {
        echo "Email sent successfully.";
    } else {
        echo "Failed to send email.";
    }
} else {
    echo "Spam detected. Your submission has been rejected.";
}
?>