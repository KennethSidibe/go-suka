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
$mail->Password = 'ewdonrdkhkkxwcrx';

$mail->setFrom($email, $name);
$mail->addAddress("sidibekagaks@gmail.com", "Dave");

$mail->Subject = "Reservation pour " . $name . "," . $firstName ;
$mail->Body = "$name, $firstName a reserver son spot, Voici ces informations : 
    Numero de telephone : $phoneNumber
    email : $email
    gender : $gender";;

$mail->send();

echo "Email sent";

?>
