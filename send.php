<?php
$name = $_POST['full-name'];
$phone = $_POST['phone'];
$email = $_POST['email'];
$reason = $_POST['reason'];
$message = $_POST['message'];

$header = 'From: ' . $name . " \r\n";
$header .= "X-Mailer: PHP/" . phpversion() . " \r\n";
$header .= "Mime-Version: 1.0 \r\n";
$header .= "Content-Type: text/plain";

$message_info = "This message was sent by: " . $name . " \r\n";
$message_info .= "Phone Number: " . $phone . " \r\n";
$message_info .= "Sent: " . date('F d, Y', time()) . " \r\n";
$message_info .= "Why are you contacting us?: " . $_POST['reason'] . " \r\n" . " \r\n";
$message_info .= "Message: " . $_POST['message'] . " \r\n";

$to = 'manager@foxchasecondoassociation.com';
$topic = 'Fox Chase Condominium - Contact Page';

mail($to, $topic, utf8_decode($message_info), $header);

header("Location:confirmation.php");
?>
