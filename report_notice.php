<?php

$email = strtoLower($_GET['email']);
$report = strtoLower($_GET['report']);
$status = strtoLower($_GET['status']);

$to      = $email;
$subject = ' ';
$message = 'The report ' .$report. ' has run and ' .$status.'';
$headers = 'From: status@centene.life' . "\r\n" .
    'Reply-To: status@centene.life' . "\r\n" .
    'X-Mailer: PHP/' . phpversion();

mail($to, $subject, $message, $headers);
?>
