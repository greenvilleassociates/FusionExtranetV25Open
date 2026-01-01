<?php
// Basic sanitization
$name    = escapeshellarg(trim($_POST['name'] ?? ''));
$email   = escapeshellarg(trim($_POST['email'] ?? ''));
$phone   = escapeshellarg(trim($_POST['phone'] ?? ''));
$message = escapeshellarg(trim($_POST['message'] ?? ''));

// Build the email body
$body = "Name: $name\nEmail: $email\nPhone: $phone\n\nMessage:\n$message\n";

// Email settings
$to      = "you@example.com";   // <-- change this
$subject = "New Contact Form Submission";

// Build sendmail command
$cmd  = "echo -e \"Subject: $subject\nFrom: $email\nTo: $to\n\n$body\" | /usr/sbin/sendmail -t";

// Execute sendmail
shell_exec($cmd);

?>
<!DOCTYPE html>
<html>
<head>
    <title>Message Sent</title>
    <link 
        href=\"https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css\" 
        rel=\"stylesheet\">
</head>
<body class=\"bg-light\">
<div class=\"container py-5\">
    <div class=\"alert alert-success text-center\">
        <h4>Your message has been sent successfully.</h4>
        <p>We will get back to you shortly.</p>
        <a href=\"contact.html\" class=\"btn btn-primary mt-3\">Return to Contact Page</a>
    </div>
</div>
</body>
</html>
