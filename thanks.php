<?php
require_once 'form.php';

$firstname = $_POST["user_firstname"];
$name = $_POST["user_name"];
$subject = $_POST["subject"];
$mail = $_POST["user_mail"];
$phone = $_POST["user_phone"];
$message = $_POST["user_message"];

$errors = [];

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (!isset($_POST['user_firstname']) || trim($_POST['user_firstname']) === '')
        $errors[] = "Le prénom est obligatoire";
    if (!isset($_POST['user_name']) || trim($_POST['user_name']) === '')
        $errors[] = "Le nom est obligatoire";
    if (!isset($_POST['user_mail']) || trim($_POST['user_mail']) === '')
        $errors[] = "L'adresse mail est obligatoire";
    if (!filter_var($_POST['user_mail'], FILTER_VALIDATE_EMAIL))
        $errors[] = "L'email n'est pas formaté correctement. <br>";
    if (!isset($_POST['user_phone']) || trim($_POST['user_phone']) === '')
        $errors[] = "Le numéro de téléphone est obligatoire";
    if (!isset($_POST['user_message']) || trim($_POST['user_message']) === '')
        $errors[] = "Vous devez écrire un message";
    else if (empty($errors))
        echo "Merci $firstname $name de nous avoir contacté à propos de $subject. <br>
    Un de nos conseiller vous contactera soit à l'adresse mail $mail ou par téléphone au $phone dans les plus brefs delais pour traiter votre demande : <br>
    $message ";
    else
        echo "<p>Il y a des erreurs</p>";
    echo "<ul>";
    foreach ($errors as $error)
        echo "<li> $error </li> </ul>";

    if (empty($errors));
}
