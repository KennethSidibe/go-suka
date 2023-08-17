<?php

$name = $_POST['name'];
$firstName = $_POST['first-name'];
$phoneNumber = $_POST['phone-number'];
$email = $_POST['e-mail'];
$gender = $_POST['gender'];

require "vendor/autoload.php";

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;

$mail = new PHPMailer(true);

$mail->isSMTP();
$mail->SMTPAuth = true;
$mail->Host = "smtp.gmail.com";
$mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
$mail->Port = 587;
$mail->Username = "sidibekagaks@gmail.com";
$mail->Password = "A$j5xi?E!!bC!qhAi8E?TKe6FyDbfdB$BgNri@!n";

$mail->setFrom($email, $name);
$mail->addAddress("sidibekagaks@gmail.com", "Dave");

$mail->Subject = "Reservation pour " + $name;
$mail->Body = $firstName + " est enregistre pour la conference";

$mail->send();

echo "Email sent";

?>
