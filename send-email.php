<!-- filepath: c:\Users\Célian\Desktop\gabrage\gabrage\send-email.php -->
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $prenom = htmlspecialchars($_POST['first-name']);
    $nom = htmlspecialchars($_POST['last-name']);
    $email = htmlspecialchars($_POST['email']);
    $telephone = htmlspecialchars($_POST['phone']);
    $message = htmlspecialchars($_POST['message']);

    $to = "garbagecleaner@gmail.com";
    $subject = "Nouveau message de $prenom $nom";
    $body = "Nom : $prenom $nom\n";
    $body .= "Email : $email\n";
    $body .= "Téléphone : $telephone\n\n";
    $body .= "Message :\n$message\n";

    $headers = "From: $email";

    if (mail($to, $subject, $body, $headers)) {
        echo "Message envoyé avec succès.";
    } else {
        echo "Erreur lors de l'envoi du message.";
    }
} else {
    echo "Méthode non autorisée.";
}
?>