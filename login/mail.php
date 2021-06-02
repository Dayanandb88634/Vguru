<?php
$to = 'hariram48414@email.com';
$subject = 'Greet';
$message = 'Hi Jane'; 
$from = '18euec060@skcet.ac.in';
 
// Sending email
if(mail($to, $subject, $message)){
    echo 'Your mail has been sent successfully.';
} else{
    echo 'Unable to send email. Please try again.';
}
?>