<?php

$userLastName = $_POST['lastName'];
$userFirstName= $_POST['firstName'];
$userPhone = $_POST['phone'];
$userEmail = $_POST['email'];
$userSubject = $_POST['subject'];
$userMessage = $_POST['message'];

echo "<div><p>Merci,, $userLastName $userFirstName de nous avoir contacter à propos de : $userSubject.</p>\n<p>Un de nos conseillers vous contactera soit à l'adresse email : $userEmail  soit par téléphone au : $userPhone dans les plus brefs délais pour traiter votre demande :</p>\n<p>$userMessage</p></div>";

