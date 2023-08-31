<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
use PHPMailer\PHPMailer\SMTP;

require_once('src/PHPMailer.php');
require_once('src/Exception.php');
require_once('src/SMTP.php');

$mail = new PHPMailer;

$mail->isSMTP();                                      // Set mailer to use SMTP
$mail->Host = 'smtp.dreamhost.com';  // Specify main and backup SMTP servers
$mail->SMTPAuth = true;                               // Enable SMTP authentication
$mail->Username = 'info@odysseyjourneys.co.uk';                 // SMTP username
$mail->Password = 'JNCRa!tM';                           // SMTP password
$mail->SMTPSecure = 'tls';                            // Enable encryption, 'ssl' also accepted
$mail->From = 'info@odysseyjourneys.co.uk';
$mail->FromName = 'Odyssey-Travels';
$mail->addAddress('info@odysseyjourneys.co.uk');     // Add a recipient
$mail->WordWrap = 50;                                 // Set word wrap to 50 characters
$mail->isHTML(true);                                  // Set email format to HTML
?>