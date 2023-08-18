<?php

$name = $_POST['name'];
$firstName = $_POST['first-name'];
$phoneNumber = $_POST['phone-number'];
$email = $_POST['e-mail'];
$lifeOccupation = $_POST['lifeOccupation'];
$discoveryPlace = $_POST['discoveryPlace'];
$associationName = "";

if(isset($_POST['jobName'])) {
    $Fonction = $_POST['jobName'];
} elseif(isset($_POST['universityName'])) {
    $Fonction = $_POST['universityName'];
} else {
    $Fonction = "None";
}

$associationName = $_POST['associationName'];

if(!(isset($_POST['associationName']))) {
    $associationName = $_POST['associationName'];
} else {
    $associationName = 'none';
}

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
$mail->addAddress("sidibekagaks@gmail.com", "botRegistration");

$mail->Subject = "Reservation pour " . $name . ", " . $firstName ;
$mail->Body = "$name, $firstName a reserver son spot, Voici ces informations : 
    Numero de telephone : $phoneNumber
    email : $email
    Occupation dans la vie: $lifeOccupation
    Emploi OU Nom d'universite : $Fonction
    Endroit ou il a entendu parler de la conference : $discoveryPlace
    Nom de l'association (Si connu par une association) : $associationName
    ";

$mail->send();

header("Location: email-sent.php?name=" . urlencode($name));
exit();

?>
