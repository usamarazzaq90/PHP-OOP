<?php
$to='usamarazzaq@marham.pk';
$subject="This is our test email.";
$message="<h1>Hi there.</h1><p>Thanks for testing!</p>";

//Headers
$headers="From: The Sender Name <taimooranwaar@marham.pk>\r\n";
$headers.="Reply-To: taimooranwaar@marham.pk\r\n";
$headers.="Content-type: text/html\r\n";

if (mail($to, $subject, $message, $headers)) {
    echo "Email sent successfully!";
} else {
    echo "Email sending failed.";
    error_log("Mail failed. Check sendmail/logs or SMTP settings.");
}
?>



<!-- 
In ubuntu:
    sudo apt update
    sudo apt install sendmail
    sudo sendmailconfig 
Restart the servers
-->