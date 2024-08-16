<?php
// Récupérer les données du formulaire
$nom = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];

// Adresse e-mail de destination
$destinataire = 'titouchef@hotmail.fr';

// Sujet de l'e-mail
$sujet = 'Nouveau message du formulaire de contact';

// Corps de l'e-mail
$contenu = "Nom: $nom\n";
$contenu .= "Email: $email\n";
$contenu .= "Message: $message\n";

// En-têtes de l'e-mail
$headers = "From: $email \r\n";
$headers .= "Reply-To: $email \r\n";

// Envoyer l'e-mail
mail($destinataire, $sujet, $contenu, $headers);
?>
