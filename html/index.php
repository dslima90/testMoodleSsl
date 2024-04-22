<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require '/var/www/html/PHPMailer/src/Exception.php';
require '/var/www/html/PHPMailer/src/PHPMailer.php';
require '/var/www/html/PHPMailer/src/SMTP.php'; // Define PHPMailer variables

$mail = new PHPMailer();
$mail->isSMTP();
$mail->SMTPAuth = true;
$mail->Host = 'smtp.office365.com';
$mail->Username = 'noreply@nupen.com.br';
$mail->Password = 'vjQkLZZf9Q$N*tL$2PykR';
$mail->SMTPSecure = 'tls';
$mail->Port = 587; // Define recipient, subject, and message
$mail->setFrom('noreply@nupen.com.br');
$mail->addAddress('danilo.xete@gmail.com');
$mail->Subject = 'Test Email';
$mail->Body = 'This is a test email message.'; // Send the email
if (!$mail->send()) {
echo 'Erro! '
.'Mailer Error: '.$mail->ErrorInfo;
} else {
echo 'Sucesso.';
}

