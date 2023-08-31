<?
require_once('Config.php');

if($_POST['name']) {
$name = htmlspecialchars($_POST['name']);
}
if ($_POST['email']) {
$email = htmlspecialchars($_POST['email']);
}
if ($_POST['message']) {
    $message = htmlspecialchars($_POST['message']);
}
if ($_POST['phone']) {
    $phone = htmlspecialchars($_POST['phone']);
}

$body = 'Name : ' . $name . ' <br>
        Phone No : ' . $phone  . ' <br>
        Email Address : ' . $email  . ' <br>
        Message : ' . $message . '  <br>';

$mail->Subject = 'Contact Form Odyssey-Travels';
$mail->Body    = $body;

if (!$mail->send()) {
  echo 'Message could not be sent.';
  echo 'Mailer Error: ' . $mail->ErrorInfo;
} else {
  header('Location: /thanku.html');
}
