<?php
   $to = "web-form-submission@fordhamramshockey.com"; // <– replace with your address here
   $subject = "Test mail";
   $message = "Hello! This is a simple test email message.";
   $from = "mcasserly@fordhamramshockey.com";
   $headers = "From:" . $from;
   mail($to,$subject,$message,$headers);
   echo "Mail Sent.";
?>