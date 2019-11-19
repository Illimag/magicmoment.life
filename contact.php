<?php

// Details
$message=$_POST['detail'];
// Mail of sender
$mail_from=$_POST['customer_mail'];
// From 
$header="from: <$mail_from>";
// Enter your email address
$to ='ella@magicmoment.life';

$send_contact=mail($to,$message,$header);

// Check, if message sent to your email 
// display message "We've recived your information"
if($send_contact){
echo "Magic is happening. We will notify you on the progress.";
}
else {
echo "ERROR";
}
?>