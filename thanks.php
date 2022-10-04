<?php

$firstname = $_POST["user_firstname"];
$name = $_POST["user_name"];
$subject = $_POST["subject"];
$mail = $_POST["user_mail"];
$phone = $_POST["user_phone"];
$message = $_POST["user_message"];

echo "Merci $firstname $name de nous avoir contacté à propos de $subject. <br>
    Un de nos conseiller vous contactera soit à l'adresse mail $mail ou par téléphone au $phone dans les plus brefs delais pour traiter votre demande : <br>
    $message ";
