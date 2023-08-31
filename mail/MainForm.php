<?
require_once('Config.php');

if ($_POST['name']) {
  $name = htmlspecialchars($_POST['name']);
}
if ($_POST['email']) {
  $email = htmlspecialchars($_POST['email']);
}
if ($_POST['phone']) {
  $phone = htmlspecialchars($_POST['phone']);
}
if ($_POST['date']) {
  $date = htmlspecialchars($_POST['date']);
}
if ($_POST['passengers']) {
  $passengers = htmlspecialchars($_POST['passengers']);
}
if ($_POST['drop_location']) {
  $drop_location = htmlspecialchars($_POST['drop_location']);
}
if ($_POST['pick_location']) {
  $pick_location = htmlspecialchars($_POST['pick_location']);
}
if ($_POST['Number_of_SuitCase']) {
  $Number_of_SuitCase = htmlspecialchars($_POST['Number_of_SuitCase']);
}
if ($_POST['filghtNumber']) {
  $filghtNumber = htmlspecialchars($_POST['filghtNumber']);
}

$body = 'Name : ' . $name . ' <br>
        Phone No : ' . $phone  . ' <br>
        Email Address : ' . $email  . ' <br>
        Date : ' . $date  . ' <br>
        No of Passengers : ' . $passengers  . ' <br>
        Pickup Location : ' . $pick_location  . ' <br>
        Drop Location : ' . $drop_location  . ' <br>
        Number of SuitCase : ' . $Number_of_SuitCase  . ' <br>
        Flight Number : ' . $filghtNumber  . ' <br>';

$mail->Subject = 'Journey Details odyssey Travels';
$mail->Body    = $body;

if (!$mail->send()) {
  echo 'Message could not be sent.';
  echo 'Mailer Error: ' . $mail->ErrorInfo;
} else {
  header('Location: /thanku.html');
}
