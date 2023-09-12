

<?php
// SMTP server configuration
$smtpServer = 'smtp.dpoczta.pl'; // Replace with your SMTP server hostname or IP address
$smtpPort = 465; // Replace with your SMTP server port (usually 587 for TLS, 465 for SSL)
$smtpUsername = 'www@tne.com.pl'; // Replace with your SMTP server username
$smtpPassword = 'Tadzio12#'; // Replace with your SMTP server password

// Sender's email address
$fromEmail = 'WebMail <www@tne.com.pl>';

// Recipient's email address
$toEmail = 'info@tne.technology';

// Email subject and message
$name = $_POST['name'];
$email = $_POST['email'];
$subject = 'New Contact';
$message = "Name: " . $name . "\r\nEmail: " . $email . "\r\nMessage: " . $_POST['message'];

// Create email headers
$headers = "From: $fromEmail\r\n";
$headers .= "Content-type: text/html; charset=UTF-8\r\n";

// Attempt to send the email
if (mail($toEmail, $subject, $message, $headers, "-f$fromEmail")) {
    echo "<script>
    alert('Email został pomyślnie wysłany!');
    window.location.href='../index.html';
    </script>";
} else {
    echo "<script>
    alert('Email nie został wysłany!');
    window.location.href='../index.html';
    </script>";
}
?>
